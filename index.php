<?php
include ('comman/header.php'); ?>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most exciting remote IT & software jobs</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row mt-4">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="job_listing.html" method="GET" class="search-box">
                                    <div class="input-form">
                                        <input type="text" name="keyword" placeholder="Search internships or jobs..."
                                            required>
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="location" id="select1">
                                                <option value="remote">Remote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <button type="submit">🔍 Find Job</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Custom Styles -->
        <style>
            /* Search Box Wrapper */
            .search-box {
                display: flex;
                align-items: center;
                background: #fff;
                border-radius: 50px;
                padding: 8px;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.08);
            }

            /* Input Field */
            .search-box .input-form input {
                border: none;
                outline: none;
                padding: 12px 18px;
                border-radius: 50px;
                width: 100%;
                font-size: 15px;
            }

            /* Select Dropdown */
            .search-box .select-itms select {
                border: none;
                outline: none;
                padding: 12px 18px;
                border-radius: 50px;
                font-size: 15px;
                background-color: transparent;
            }

            /* Find Job Button */
            .search-box .search-form button {
                border: none;
                outline: none;
                background: linear-gradient(135deg, #007bff, #0056d2);
                color: #fff;
                padding: 12px 24px;
                border-radius: 50px;
                font-weight: 600;
                font-size: 15px;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            /* Hover Effect */
            .search-box .search-form button:hover {
                background: linear-gradient(135deg, #0056d2, #003c99);
                transform: translateY(-2px);
            }
        </style>


        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Explore Opportunities</span>
                            <h2>Top IT & Software Categories</h2>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <!-- Web Development -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">Web Development</a></h5>
                                <span>(120)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile App Development -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">Mobile App Development</a></h5>
                                <span>(95)</span>
                            </div>
                        </div>
                    </div>

                    <!-- UI/UX Design -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">UI/UX Design</a></h5>
                                <span>(80)</span>
                            </div>
                        </div>
                    </div>

                    <!-- AI & Machine Learning -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">AI & Machine Learning</a></h5>
                                <span>(60)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Digital Marketing -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">Digital Marketing</a></h5>
                                <span>(110)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Data Science & Analytics -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">Data Science & Analytics</a></h5>
                                <span>(85)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Browse All Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="job_listing.php" class="border-btn2">Browse All IT & Software Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->

        <!-- Online CV Area Start -->
        <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="assets/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">Join Our Team</p>
                            <p class="pera2">Kickstart Your Career with Data-Software Analysis – Apply Now!</p>
                            <a href="mailto:datasoftwareanalysis@gmail.com?subject=Internship%20or%20Job%20Application&body=Please%20find%20my%20CV%20attached%20for%20consideration."
                                class="border-btn2 border-btn4">
                                Submit Your CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End -->


        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Openings</span>
                            <h2>Internships</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <!-- Internship Card Template -->
                        <div class="single-job-items mb-30">
                            <div class="job-items" style="align-items: center;">
                                <div class="company-img">
                                    <a href="internship_details.html">
                                        <img src="assets/img/logo/DSA logo.png" alt="Data-Software Analysis Logo"
                                            style="max-width: 60px; height: auto; display: block; margin: 0 auto;">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="internship_details.html">
                                        <h4>Social Media Marketing Intern</h4>
                                    </a>
                                    <ul>
                                        <li>Data-Software Analysis</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Remote / Nashik, India</li>
                                        <li>Unpaid</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_listing.php">Internship</a>
                                <span>Posted 2 days ago</span>
                            </div>
                        </div>

                        <!-- Internship 2 -->
                        <div class="single-job-items mb-30">
                            <div class="job-items" style="align-items: center;">
                                <div class="company-img">
                                    <a href="internship_details.html">
                                        <img src="assets/img/logo/DSA logo.png" alt="Web Development Internship"
                                            style="max-width: 60px; height: auto; display: block; margin: 0 auto;">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="internship_details.html">
                                        <h4>Web Development Intern</h4>
                                    </a>
                                    <ul>
                                        <li>Data-Software Analysis</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Remote / Nashik, India</li>
                                        <li>Stipend</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_listing.php">Full Time</a>
                                <span>Posted 3 days ago</span>
                            </div>
                        </div>

                        <!-- Internship 3 -->
                        <div class="single-job-items mb-30">
                            <div class="job-items" style="align-items: center;">
                                <div class="company-img">
                                    <a href="internship_details.html">
                                        <img src="assets/img/logo/DSA logo.png" alt="Content Writing Internship"
                                            style="max-width: 60px; height: auto; display: block; margin: 0 auto;">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="internship_details.html">
                                        <h4>Content Writing Intern</h4>
                                    </a>
                                    <ul>
                                        <li>Data-Software Analysis</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Remote / Nashik, India</li>
                                        <li>Unpaid</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_listing.php">Internship</a>
                                <span>Posted 5 days ago</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->



        <!-- How Apply Process Start -->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply Process</span>
                            <h2>How It Works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Steps -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                                <h5>1. Search Opportunities</h5>
                                <p>Browse verified internships and job openings from trusted companies and organizations
                                    tailored to your skills and interests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                                <h5>2. Apply Online</h5>
                                <p>Submit your resume, portfolio, or required documents directly through our secure
                                    online application system in just a few clicks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                                <h5>3. Get Hired</h5>
                                <p>Receive interview calls, land your dream internship or job, and start your journey
                                    toward professional growth and success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- How Apply Process End -->

        <!-- Add this in <head> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <style>
            .founder-social a {
                display: inline-block;
                width: 40px;
                height: 40px;
                margin: 0 5px;
                background: #f1f1f1;
                border-radius: 50%;
                text-align: center;
                line-height: 40px;
                font-size: 16px;
                color: #333;
                transition: all 0.3s ease-in-out;
            }

            .founder-social a:hover {
                background: #007bff;
                color: #fff;
                transform: scale(1.1);
            }
        </style>

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">

                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption">

                                    <!-- Founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-4">
                                            <img src="assets/img/testmonial/imgage.jpg"
                                                alt="Founder & CEO - Data-Software Analysis" class="founder-photo">
                                            <h5 class="mt-3 mb-1 fw-bold">Er. Rushikesh Kekane</h5>
                                            <p class="small text-muted">Founder & CEO, Data-Software Analysis</p>

                                            <!-- Social Links -->
                                            <div class="founder-social mt-3">
                                                <a href="https://data-softwareanalysis.com" target="_blank"
                                                    title="Official Website"><i class="fas fa-globe"></i></a>
                                                <a href="https://www.linkedin.com/in/data-software-analysis-4a271a375/"
                                                    target="_blank" title="LinkedIn"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                                <a href="https://x.com/software930061" target="_blank"
                                                    title="Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.facebook.com/profile.php?id=61578819190184"
                                                    target="_blank" title="Facebook"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/data_software_analysis/?hl=en"
                                                    target="_blank" title="Instagram"><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="testimonial-top-cap mt-4">
                                        <p class="fst-italic">
                                            “At Data-Software Analysis, we are committed to empowering students,
                                            freshers, and professionals through AI-driven job matching, verified
                                            internships, and industry-ready skill programs to help them thrive in the
                                            modern digital economy.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Founder Image Styling -->
        <style>
            .founder-photo {
                width: 180px;
                height: 180px;
                object-fit: cover;
                border-radius: 50%;
                border: 4px solid #0dcaf0;
                box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            }

            .founder-social a {
                display: inline-block;
                margin: 0 6px;
                font-size: 1.2rem;
                color: #555;
                transition: color 0.3s, transform 0.3s;
            }

            .founder-social a:hover {
                color: #0dcaf0;
                transform: scale(1.2);
            }
        </style>



        <!-- Support Company Start-->
        <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Title -->
                            <div class="section-tittle section-tittle2">
                                <span>What We Do</span>
                                <h2>Empowering Careers with Internships & Jobs</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Data-Software Analysis connects students, freshers, and
                                    professionals with top companies through AI-driven job matching and industry-ready
                                    internship programs.</p>
                                <p>We specialize in bridging the gap between talent and opportunity by offering verified
                                    internships, job listings, skill development programs, and career guidance. Our
                                    platform ensures candidates are prepared with the latest industry skills while
                                    employers gain access to top-tier talent.</p>
                                <a href="about.html" class="btn post-btn">Post a Job</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="assets/img/service/support-img.jpg" alt="Job and Internship Portal">
                            <div class="support-img-cap text-center">
                                <p>Since</p>
                                <span>2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->

        <!-- Blog Area Start -->
        <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Career & Tech Insights</span>
                            <h2>Latest Internship & Job Trends</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Blog Post 1 -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/blog/home-blog1.jpg" alt="Internship Trends 2025">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>12</span>
                                        <p>Aug</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Internships</p>
                                    <h3><a href="single-blog.html">Top Internship Trends to Boost Your Career in
                                            2025</a></h3>
                                    <a href="#" class="more-btn">Discover Insights »</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 2 -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/blog/home-blog2.jpg" alt="AI Tools for Job Seekers">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>10</span>
                                        <p>Aug</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Jobs & AI</p>
                                    <h3><a href="single-blog.html">How AI Tools Are Helping Job Seekers Succeed</a></h3>
                                    <a href="#" class="more-btn">Read More »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->


    </main>
    <?php
    include ('comman/footer.php');
    ?>