<?php
// DB Connection
include('admin/config/db.php');

// Get the job id from the URL
if (isset($_GET['id'])) {
    $job_id = $_GET['id'];

    // Fetch job details from the job_posts table
    $sql_posts = "SELECT * FROM job_posts WHERE id = ?";
    $stmt_posts = $conn->prepare($sql_posts);
    $stmt_posts->bind_param("i", $job_id);
    $stmt_posts->execute();
    $result_posts = $stmt_posts->get_result();

    if ($result_posts->num_rows > 0) {
        $job = $result_posts->fetch_assoc(); // Fetch the job details from job_posts
    } else {
        die("Job not found in job_posts table.");
    }

    // Fetch the location, salary, image_url, job_type, and posting_date from job_listings table
    $sql_listings = "SELECT location, salary, image_url, job_type, posting_date FROM job_listings WHERE id = ?";
    $stmt_listings = $conn->prepare($sql_listings);
    $stmt_listings->bind_param("i", $job_id);
    $stmt_listings->execute();
    $result_listings = $stmt_listings->get_result();

    if ($result_listings->num_rows > 0) {
        $location_salary = $result_listings->fetch_assoc(); // Fetch location, salary, and other details from job_listings
    } else {
        $location_salary = ['location' => 'Not Available', 'salary' => 'Not Specified', 'image_url' => '', 'job_type' => 'Not Specified', 'posting_date' => 'Not Available']; // Default values
    }
} else {
    die("No job id provided.");
}

$conn->close();
?>

<?php include ('comman/header.php'); ?>

<main>

    <!-- Hero Area Start-->
    <div class="slider-area">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?= htmlspecialchars($job['job_title']) ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

    <!-- Job Post Company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- Job Single -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#">
                                    <!-- Check if the image URL exists, otherwise use a default placeholder -->
                                    <img src="<?= !empty($location_salary['image_url']) ? htmlspecialchars($location_salary['image_url']) : 'assets/img/logo/default-logo.png' ?>"
                                         alt="<?= htmlspecialchars($job['company_name']) ?> Logo"
                                         style="width:60px; height:60px;">
                                </a>
                            </div>
                            <div class="job-tittle job-tittle2">
                                <a href="#">
                                    <h4><?= htmlspecialchars($job['job_title']) ?></h4>
                                </a>
                                <ul>
                                    <li><?= htmlspecialchars($job['company_name']) ?></li>
                                    <li><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($location_salary['location']) ?></li>
                                    <li><?= !empty($location_salary['salary']) ? htmlspecialchars($location_salary['salary']) : 'Unpaid / Stipend Based' ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link items-link2 f-right">
                            <a href="job_details.php?id=<?= $job['id'] ?>"><?= htmlspecialchars($location_salary['job_type']) ?></a>
                            <span><?= htmlspecialchars($location_salary['posting_date']) ?></span>
                        </div>
                    </div>
                    <!-- Job Single End -->

                    <!-- Job Details -->
                    <div class="job-post-details">

                        <!-- Job Description -->
                        <div class="post-details1 mb-50">
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>
                                <?= nl2br(htmlspecialchars($job['description'])) ?>
                            </p>
                        </div>

                        <!-- Skills -->
                        <div class="post-details2 mb-50">
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                            <ul>
                                <?php
                                // Assuming skills are stored as a list separated by "|"
                                $skills = explode('|', $job['skills']);
                                foreach ($skills as $skill) {
                                    echo "<li>" . htmlspecialchars($skill) . "</li>";
                                }
                                ?>
                            </ul>
                        </div>

                        <!-- Education -->
                        <div class="post-details2 mb-50">
                            <div class="small-section-tittle">
                                <h4>Education + Experience</h4>
                            </div>
                            <ul>
                                <?php
                                // Assuming education requirements are stored as a list separated by "|"
                                $education = explode('|', $job['education']);
                                foreach ($education as $edu) {
                                    echo "<li>" . htmlspecialchars($edu) . "</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3 mb-50">
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul class="job-overview-list">
                            <li><span class="label">Posted date :</span> <span class="value"><?= htmlspecialchars($location_salary['posting_date']) ?></span></li>
                            <li><span class="label">Location :</span> <span class="value"><?= htmlspecialchars($location_salary['location']) ?></span></li>
                            <li><span class="label">Job nature :</span> <span class="value"><?= htmlspecialchars($location_salary['job_type']) ?></span></li>
                            <li><span class="label">Stipend :</span> <span class="value"><?= !empty($location_salary['salary']) ? htmlspecialchars($location_salary['salary']) : 'Unpaid / Performance-based Stipend' ?></span></li>
                        </ul>

                        <div class="apply-btn2 text-center mt-4">
                            <a href="apply.php?id=<?= $job['id'] ?>" class="btn">Apply Now</a>
                        </div>
                    </div>

                    <!-- Company Info -->
                    <!-- Company Info -->
                        <div class="post-details4 mb-50">
                            <div class="small-section-tittle">
                                <h4>Company Information</h4>
                            </div>
                            <span>Data-Software Analysis</span>
                            <p>
                                Data-Software Analysis is an ISO-certified IT solutions company offering
                                services in Website Development, SEO, Digital Marketing, Cloud Hosting,
                                Software Development, and AI-driven analytics. We help startups,
                                educators, and businesses grow through digital transformation.
                            </p>
                            <ul>
                                <li>Name: <span>Data-Software Analysis</span></li>
                                <li>Web : <span>www.data-softwareanalysis.com</span></li>
                                <li>Email: <span>services@data-softwareanalysis.com</span></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Post Company End -->

</main>

<?php include ('comman/footer.php'); ?>
