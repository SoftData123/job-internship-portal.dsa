
    <footer class="footer-area footer-bg footer-padding text-light">
        <!-- Background World Map -->
        <div class="footer-map-bg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 1000" preserveAspectRatio="xMidYMid meet">
                <path
                    d="M348 180l24 17-8 14 30 12-2 20-28 8-6 18-30 2-14-10-24 20-22-8-4-28 16-22-10-18 20-25 36 10zM680 160l28 16 20 26-10 20-24 2-18 18-20-6-16-22-14 8-24-10-4-18 20-20 30-14 32 0zM1080 220l40 20 28 28-8 22-40 10-24-6-22-14-18-30 10-26 34-4zM1440 180l26 18-10 20 18 14-4 28-30 10-24-10-18 6-12-24 18-28 36-34zM1700 240l28 12 26 20 8 26-22 20-30 10-28-8-16-16-2-32 16-24 20-8zM640 460l28 16 20 24-8 26-30 10-26-10-20-20 2-26 34-20zM1180 500l32 16 20 28-8 20-24 10-30-10-22-20-2-28 34-16zM1500 600l34 18 20 26-10 26-30 10-26-12-20-18-4-28 36-22z"
                    fill="rgba(255,255,255,0.05)" />
            </svg>
        </div>

        <div class="container position-relative">
            <div class="row gy-5">
                <!-- About -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <h4 class="fw-bold mb-3 text-primary">About Us</h4>
                    <p class="small">
                        Data-Software Analysis is India’s leading internship & job portal,
                        connecting students and freshers with top employers.
                        We empower careers through internships, skill development, and AI-driven job matching.
                    </p>
                </div>

                <!-- Contact Info -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <h4 class="fw-bold mb-3 text-primary">Contact Info</h4>
                    <ul class="list-unstyled small contact-info">
                        <li><i class="fas fa-map-marker-alt icon"></i>Sinnar, Nashik, Maharashtra</li>
                        <li><i class="fas fa-phone-alt icon"></i><a href="tel:+917219080839">+91 7219080839</a></li>
                        <li><i class="fas fa-envelope icon"></i><a
                                href="mailto:services@data-softwareanalysis.com">services@data-softwareanalysis.com</a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <h4 class="fw-bold mb-3 text-primary">Quick Links</h4>
                    <ul class="list-unstyled small footer-links">
                        <li><a href="https://data-softwareanalysis.com/">Home</a></li>
                        <li><a href="https://data-softwareanalysis.com/contact.html">Contact Us</a></li>
                        <li><a href="https://data-softwareanalysis.com/testimonial.html">Testimonials</a></li>
                        <li><a href="https://data-softwareanalysis.com/Carrer.html">Careers</a></li>
                        <li><a href="https://data-softwareanalysis.com/quote.html">Support</a></li>
                    </ul>
                </div>
            </div>

            <hr class="border-light my-4">

            <!-- Footer Bottom -->
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-6 mb-3 mb-md-0">
                    <a href="index.html">
                        <img src="assets/img/logo/DSA logo.png" alt="Data-Software Analysis Logo" class="img-fluid mb-2"
                            style="max-height: 50px;">
                    </a>
                    <p class="small mb-0">
                        &copy;
                        <script>document.write(new Date().getFullYear());</script> Data-Software Analysis |
                        Made with <i class="fa fa-heart text-danger"></i> for Students
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/data-software-analysis-4a271a375/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://x.com/software930061" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61578819190184" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/data_software_analysis/?hl=en" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom Styling -->
    <style>
        .footer-area {
            background: #0d0d0d;
            padding: 60px 0 20px;
            position: relative;
            overflow: hidden;
        }

        .footer-map-bg {
            position: absolute;
            inset: 0;
            opacity: 0.2;
            z-index: 0;
            pointer-events: none;
        }

        .footer-area .container {
            position: relative;
            z-index: 2;
        }

        /* Contact Info */
        .contact-info li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .contact-info .icon {
            color: #ffc107;
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .contact-info a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-info a:hover {
            color: #0dcaf0;
        }

        /* Footer Links */
        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-links a:hover {
            color: #0dcaf0;
            text-decoration: underline;
        }

        /* Social Icons */
        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            margin: 0 5px;
            background: #222;
            border-radius: 50%;
            font-size: 1.2rem;
            color: #bbb;
            transition: 0.3s;
        }

        .social-icons a:hover {
            background: #0dcaf0;
            color: #fff;
            transform: scale(1.2);
        }
    </style>



    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>