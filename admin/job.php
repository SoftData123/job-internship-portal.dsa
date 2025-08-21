<?php
// Connection setup
include('config/db.php');

// 2. Insert new job
if (isset($_POST['add_job'])) {
	$title = $_POST['job_title'];
	$company = $_POST['company_name'];
	$location = $_POST['location'];
	$salary = $_POST['salary'];
	$type = $_POST['job_type'];
	$date = $_POST['posting_date'];
	$image = $_POST['image_url'];

	$insert = "INSERT INTO job_listings (job_title, company_name, location, salary, job_type, posting_date, image_url)
	           VALUES ('$title', '$company', '$location', '$salary', '$type', '$date', '$image')";
	$conn->query($insert);
	header("Location: job.php");
	exit();
}

// 3. Delete job
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$conn->query("DELETE FROM job_listings WHERE id = $id");
	header("Location: job.php");
	exit();
}

// 4. Update job
if (isset($_POST['update_job'])) {
	$id = $_POST['id'];
	$title = $_POST['job_title'];
	$company = $_POST['company_name'];
	$location = $_POST['location'];
	$salary = $_POST['salary'];
	$type = $_POST['job_type'];
	$date = $_POST['posting_date'];
	$image = $_POST['image_url'];

	$update = "UPDATE job_listings SET
	           job_title='$title',
	           company_name='$company',
	           location='$location',
	           salary='$salary',
	           job_type='$type',
	           posting_date='$date',
	           image_url='$image'
	           WHERE id=$id";
	$conn->query($update);
	header("Location: job.php");
	exit();
}
include('common/header.php');
?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Job</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Job Listing</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->

	<h2 class="mb-4">Job Listings Manager</h2>

	<!-- Form: Add or Edit Job -->
	<div class="card mb-4">
		<div class="card-header bg-primary text-white">
			<?= isset($_GET['edit']) ? "Edit Job" : "Add New Job" ?>
		</div>
		<div class="card-body">
			<?php
			$edit = false;
			$job = ['id' => '', 'job_title' => '', 'company_name' => '', 'location' => '', 'salary' => '', 'job_type' => '', 'posting_date' => '', 'image_url' => ''];

			if (isset($_GET['edit'])) {
				$edit = true;
				$id = $_GET['edit'];
				$res = $conn->query("SELECT * FROM job_listings WHERE id = $id");
				if ($res->num_rows > 0) {
					$job = $res->fetch_assoc();
				}
			}
			?>
			<form method="POST">
				<?php if ($edit): ?>
					<input type="hidden" name="id" value="<?= $job['id']; ?>">
				<?php endif; ?>
				<div class="row mb-3">
					<div class="col">
						<label>Job Title</label>
						<input type="text" name="job_title" class="form-control" value="<?= $job['job_title']; ?>" required>
					</div>
					<div class="col">
						<label>Company Name</label>
						<input type="text" name="company_name" class="form-control" value="<?= $job['company_name']; ?>" required>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col">
						<label>Location</label>
						<input type="text" name="location" class="form-control" value="<?= $job['location']; ?>" required>
					</div>
					<div class="col">
						<label>Salary</label>
						<input type="text" name="salary" class="form-control" value="<?= $job['salary']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<div class="col">
						<label>Job Type</label>
						<select name="job_type" class="form-select" required>
							<option value="Full Time" <?= $job['job_type'] == 'Full Time' ? 'selected' : '' ?>>Full Time</option>
							<option value="Internship" <?= $job['job_type'] == 'Internship' ? 'selected' : '' ?>>Internship</option>
						</select>
					</div>
					<div class="col">
						<label>Posting Date</label>
						<input type="date" name="posting_date" class="form-control" value="<?= $job['posting_date']; ?>" required>
					</div>
				</div>
				<div class="mb-3">
					<label>Image URL</label>
					<input type="text" name="image_url" class="form-control" value="<?= $job['image_url']; ?>" required>
				</div>
				<?php if ($edit): ?>
					<button type="submit" name="update_job" class="btn btn-warning">Update Job</button>
					<a href="job.php" class="btn btn-secondary">Cancel</a>
				<?php else: ?>
					<button type="submit" name="add_job" class="btn btn-success">Add Job</button>
				<?php endif; ?>
			</form>
		</div>
	</div>

	<!-- Table: Job Listings -->
	<div class="card">
		<div class="card-header bg-dark text-white">All Jobs</div>
		<div class="card-body">
			<table class="table table-bordered table-striped table-hover">
				<thead class="table-dark">
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Company</th>
					<th>Location</th>
					<th>Salary</th>
					<th>Type</th>
					<th>Date</th>
					<th>Logo</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$res = $conn->query("SELECT * FROM job_listings ORDER BY posting_date DESC");
				$i = 1;
				while ($row = $res->fetch_assoc()):
					?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= htmlspecialchars($row['job_title']); ?></td>
						<td><?= htmlspecialchars($row['company_name']); ?></td>
						<td><?= htmlspecialchars($row['location']); ?></td>
						<td><?= $row['salary'] ? '$' . htmlspecialchars($row['salary']) : 'Unpaid'; ?></td>
						<td><?= htmlspecialchars($row['job_type']); ?></td>
						<td><?= htmlspecialchars($row['posting_date']); ?></td>
						<td><img src="<?= htmlspecialchars($row['image_url']); ?>" width="50" height="50" alt="logo"></td>
						<td>
							<a href="?edit=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="?delete=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this job?');">Delete</a>
						</td>
					</tr>
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
</body>
</html>
