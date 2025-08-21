<?php
// DB Connection
include('config/db.php');

// Fetch Job Listing Info (Title, Company, Location, Salary)
$job_listing_query = "SELECT job_title, company_name, location, salary FROM job_listings";
$listing_result = $conn->query($job_listing_query);

// Fetch Job Post Info (Description, Skills, Education)
$job_post_query = "SELECT job_title, company_name, description, skills, education FROM job_posts";
$post_result = $conn->query($job_post_query);

// Close the DB connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
</head>
<body>

<div class="col-xl-7 col-lg-8">
    <!-- job single -->
    <div class="single-job-items mb-30">
        <div class="job-items">
            <div class="company-img">
                <a href="#">
                    <img src="assets/img/logo/DSA logo.png" alt="Data-Software Analysis Logo" style="width:60px; height:60px;">
                </a>
            </div>
            <div class="job-tittle job-tittle2">
                <?php if ($listing_result->num_rows > 0): ?>
                    <?php while ($job_listing = $listing_result->fetch_assoc()): ?>
                        <a href="#">
                            <h4><?= htmlspecialchars($job_listing['job_title']) ?></h4>
                        </a>
                        <ul>
                            <li><?= htmlspecialchars($job_listing['company_name']) ?></li>
                            <li><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($job_listing['location']) ?></li>
                            <li><?= htmlspecialchars($job_listing['salary']) ?></li>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="items-link items-link2 f-right">
            <a href="job_details.html">Internship</a>
            <span>2 Days ago</span>
        </div>
    </div>
    <!-- job single End -->

    <div class="job-post-details">
        <!-- Job Description -->
        <div class="post-details1 mb-50">
            <div class="small-section-tittle">
                <h4>Job Description</h4>
            </div>
            <?php if ($post_result->num_rows > 0): ?>
                <?php while ($job_post = $post_result->fetch_assoc()): ?>
                    <p>
                        We are seeking a highly motivated <b><?= htmlspecialchars($job_post['job_title']) ?></b> to join our team at
                        <b><?= htmlspecialchars($job_post['company_name']) ?></b>. This internship will provide hands-on experience in
                        SEO, social media management, content marketing, and online advertising campaigns.
                        You will work closely with our marketing team to improve brand visibility, generate
                        leads, and support live digital projects.
                    </p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- Skills -->
        <div class="post-details2 mb-50">
            <div class="small-section-tittle">
                <h4>Required Knowledge, Skills, and Abilities</h4>
            </div>
            <?php if ($post_result->num_rows > 0): ?>
                <?php while ($job_post = $post_result->fetch_assoc()): ?>
                    <ul>
                        <?php
                        $skills = explode('|', $job_post['skills']);
                        foreach ($skills as $skill):
                        ?>
                            <li><?= htmlspecialchars($skill) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- Education -->
        <div class="post-details2 mb-50">
            <div class="small-section-tittle">
                <h4>Education + Experience</h4>
            </div>
            <?php if ($post_result->num_rows > 0): ?>
                <?php while ($job_post = $post_result->fetch_assoc()): ?>
                    <ul>
                        <?php
                        $education = explode('|', $job_post['education']);
                        foreach ($education as $edu):
                        ?>
                            <li><?= htmlspecialchars($edu) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
