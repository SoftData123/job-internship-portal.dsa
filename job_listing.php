<?php
include('comman/header.php');
include('admin/config/db.php'); ?>
<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                        <path fill-rule="evenodd" fill="rgb(27, 207, 107)"
                                            d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                                    </svg>
                                </div>
                                <h4>Filter Jobs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <h4>Job Category</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="select" required>
                                    <option value="">All Categories</option>
                                    <option value="web-development">Web Development</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="social-media-marketing">Social Media Marketing</option>
                                    <option value="content-writing">Content Writing</option>
                                    <option value="seo">SEO Specialist</option>
                                    <option value="data-science">Data Science / AI</option>
                                    <option value="cybersecurity">Cybersecurity</option>
                                </select>
                            </div>


                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Job Type</h4>
                                </div>
                                <label class="container">Full Time
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Part Time
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <!-- <label class="container">Remote
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label> -->
                                <label class="container">Freelance
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <h4>Job Location</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="location" required>
                                    <option value="remote">Remote</option>
                                </select>
                            </div>

                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Experience</h4>
                                </div>

                                <label class="container">Freshers
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container">6 months - 1 year
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container">1-2 Years
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <!-- select-Categories End -->
                        </div>
                        <!-- single three -->
                        <div class="single-listing">
                            <!-- select-Categories start -->
                            <div class="select-Categories pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Posted Within</h4>
                                </div>
                                <label class="container">Any
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Today
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 2 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 3 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 5 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 10 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <div class="single-listing">
                            <!-- Filter Jobs Start -->
                            <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                <div class="small-section-tittle2">
                                    <h4>Filter Jobs</h4>
                                </div>
                                <div class="widgets_inner">
                                    <div class="range_item">
                                        <label class="container">Unpaid Internship
                                            <input type="checkbox" value="unpaid">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container">Stipend up to ₹5,000
                                            <input type="checkbox" value="5000">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container">Salary up to ₹2.5 LPA
                                            <input type="checkbox" value="2.5lpa">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container">Salary above ₹2.5 LPA
                                            <input type="checkbox" value="above2.5lpa">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </aside>
                            <!-- Filter Jobs End -->
                        </div>

                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35 d-flex justify-content-between align-items-center">
                                        <span class="job-count"><strong>5</strong> Jobs Found</span>

                                        <!-- Sort by Dropdown -->
                                        <div class="select-job-items d-flex align-items-center">
                                            <label for="sort-jobs" class="me-2 mb-0">Sort by:</label>
                                            <select id="sort-jobs" name="sort" class="form-select">
                                                <option value="">Relevance</option>
                                                <option value="">Old</option>
                                                <option value="latest">Latest</option>
                                                <!-- <option value="salary-high">Salary: High to Low</option>
                                                    <option value="salary-low">Salary: Low to High</option> -->
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            <?php

                            // Fetch job listings from the database
                            $sql = "SELECT * FROM job_listings ORDER BY posting_date DESC";
                            $result = $conn->query($sql);

                            // Check if there are jobs in the database
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                            <div class="single-job-items mb-30">
                                                <div class="job-items">
                                                    <div class="company-img">
                                                        <a href="#">
                                                            <img src="' . $row['image_url'] . '" alt="' . $row['company_name'] . ' Logo" style="width:60px; height:60px;">
                                                        </a>
                                                    </div>
                                                    <div class="job-tittle job-tittle2">
                                                        <a href="#">
                                                            <h4>' . $row['job_title'] . '</h4>
                                                        </a>
                                                        <ul>
                                                            <li>' . $row['company_name'] . '</li>
                                                            <li><i class="fas fa-map-marker-alt"></i> ' . $row['location'] . '</li>';
                                                                        if (!empty($row['salary'])) {
                                                                            echo '<li>' . $row['salary'] . '</li>';
                                                                        }
                                                                        echo '</ul>
                                                    </div>
                                                </div>
                                                <div class="items-link items-link2 f-right">
                                                    <a href="job_details.php?id=' . $row['id'] . '">' . $row['job_type'] . '</a>
                                                    <span>' . $row['posting_date'] . '</span>
                                                </div>
                                            </div>';
                           }
                            } else {
                                echo "No job listings found.";
                            }

                            $conn->close();
                            ?>
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
    <div class="pagination-area pb-115 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span
                                            class="ti-angle-right"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Pagination End  -->

</main>
<?php
include('comman/footer.php');
?>