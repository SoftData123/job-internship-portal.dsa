<?php
// DB Connection
include ('config/db.php');

// Fetch job titles and company names for dropdown
$job_titles = [];
$sql = "SELECT job_title, company_name FROM job_listings";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $job_titles[] = $row;
}

// Handle Insert
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $description = $_POST['description'];
    $skills = implode('|', $_POST['skills']);
    $education = implode('|', $_POST['education']);

    $stmt = $conn->prepare("INSERT INTO job_posts (job_title, company_name, description, skills, education) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company_name, $description, $skills, $education);
    $stmt->execute();
    echo "<p style='color: green;'>Job details added successfully!</p>";
}

// Handle Edit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $id = $_POST['id'];
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $description = $_POST['description'];
    $skills = implode('|', $_POST['skills']);
    $education = implode('|', $_POST['education']);

    $stmt = $conn->prepare("UPDATE job_posts SET job_title = ?, company_name = ?, description = ?, skills = ?, education = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $job_title, $company_name, $description, $skills, $education, $id);
    $stmt->execute();
    echo "<p style='color: green;'>Job details updated successfully!</p>";
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM job_posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    echo "<p style='color: red;'>Job post deleted successfully!</p>";
}

// Fetch job posts for viewing
$posts = [];
$sql = "SELECT * FROM job_posts";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

$conn->close();
include ('common/header.php');
?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Job Post Management</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Job Posts</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Job Post Form</h6>
                <hr/>

                <!-- Job Post Form -->
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="">
                            <!-- If Editing, Pre-fill the Form -->
                            <?php if (isset($_GET['edit'])): ?>
                                <?php
                                include('config/db.php'); // Reconnect for edit block
                                $edit_id = $_GET['edit'];
                                $sql = "SELECT * FROM job_posts WHERE id = ?";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("i", $edit_id);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $job = $result->fetch_assoc();
                                $conn->close();
                                ?>
                                <input type="hidden" name="id" value="<?= $job['id'] ?>">
                            <?php endif; ?>

                            <div class="mb-3">
                                <label>Select Job Title:</label>
                                <select name="job_title" class="form-select" required onchange="updateCompanyName()">
                                    <option value="">--Select--</option>
                                    <?php foreach ($job_titles as $title): ?>
                                        <option value="<?= htmlspecialchars($title['job_title']) ?>"
                                            <?= isset($job) && $job['job_title'] == $title['job_title'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($title['job_title']) ?> (<?= htmlspecialchars($title['company_name']) ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Company Name:</label>
                                <input type="text" name="company_name" class="form-control" id="company_name"
                                       value="<?= isset($job) ? htmlspecialchars($job['company_name']) : '' ?>"
                                       required readonly>
                            </div>

                            <div class="mb-3">
                                <label>Description:</label>
                                <textarea name="description" class="form-control" rows="5" required><?= isset($job) ? htmlspecialchars($job['description']) : '' ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label>Skills (Add multiple):</label><br>
                                <?php
                                $skills = isset($job) ? explode('|', $job['skills']) : ["", "", "", ""];
                                for ($i = 0; $i < 4; $i++):
                                ?>
                                    <input type="text" name="skills[]" class="form-control mb-2" placeholder="Skill <?= $i + 1 ?>"
                                           value="<?= htmlspecialchars($skills[$i] ?? '') ?>"><br>
                                <?php endfor; ?>
                            </div>

                            <div class="mb-3">
                                <label>Education (Add multiple):</label><br>
                                <?php
                                $education = isset($job) ? explode('|', $job['education']) : ["", "", ""];
                                for ($i = 0; $i < 3; $i++):
                                ?>
                                    <input type="text" name="education[]" class="form-control mb-2" placeholder="Education <?= $i + 1 ?>"
                                           value="<?= htmlspecialchars($education[$i] ?? '') ?>"><br>
                                <?php endfor; ?>
                            </div>

                            <button type="submit" name="<?= isset($job) ? 'edit' : 'submit' ?>" class="btn btn-primary"><?= isset($job) ? 'Update' : 'Save' ?> Job Details</button>
                        </form>
                    </div>
                </div>

                <hr>

                <!-- Job Posts Table -->
                <h6 class="mb-0 text-uppercase">Existing Job Posts</h6>
                <hr/>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-hover table-bordered mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Skills</th>
                                    <th scope="col">Education</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($posts as $post): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($post['job_title']) ?></td>
                                        <td><?= htmlspecialchars($post['company_name']) ?></td>
                                        <td><?= htmlspecialchars($post['description']) ?></td>
                                        <td><?= htmlspecialchars($post['skills']) ?></td>
                                        <td><?= htmlspecialchars($post['education']) ?></td>
                                        <td>
                                            <a href="?edit=<?= $post['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="?delete=<?= $post['id'] ?>" class="btn btn-danger btn-sm"
                                               onclick="return confirm('Are you sure you want to delete this job post?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
// Update company name when job title is selected
function updateCompanyName() {
    const jobTitle = document.querySelector('[name="job_title"]').value;
    const companyNameField = document.getElementById('company_name');
    
    const job = <?= json_encode($job_titles) ?>;
    const selectedJob = job.find(item => item.job_title === jobTitle);
    if (selectedJob) {
        companyNameField.value = selectedJob.company_name;
    } else {
        companyNameField.value = '';
    }
}
</script>
<?php include ('common/footer.php');?>