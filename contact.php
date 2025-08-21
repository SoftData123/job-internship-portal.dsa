<?php
include ('comman/header.php'); ?>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30022.028476979405!2d73.97338123615836!3d19.850377733275877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddba5b07fccb4d%3A0xd1a086a9b031bc72!2sSinnar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1755440289515!5m2!1sen!2sin"
                        width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>


            <div class="row g-4">
                <!-- Contact Title -->
                <div class="col-12 text-center mb-4">
                    <h2 class="contact-title fw-bold text-primary">💬 Get in Touch with Us</h2>
                    <p class="text-muted">Have questions, ideas, or need help? We’d love to hear from you!</p>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <form class="form-contact contact_form shadow p-4 rounded bg-light" action="contact_process.php"
                        method="post" id="contactForm" novalidate="novalidate">

                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-sm-6">
                                <div class="form-group position-relative">
                                    <input class="form-control rounded-3 ps-4" name="name" id="name" type="text"
                                        placeholder="👤 Your full name">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-sm-6">
                                <div class="form-group position-relative">
                                    <input class="form-control rounded-3 ps-4" name="email" id="email" type="email"
                                        placeholder="📧 Your email address">
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <input class="form-control rounded-3 ps-4" name="subject" id="subject" type="text"
                                        placeholder="📌 Subject of your message">
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-12">
                            <div class="form-group position-relative">
                                <textarea class="form-control rounded-3 ps-4" name="message" id="message" rows="6"
                                    placeholder="✍️ Type your message here..."></textarea>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-gradient px-5 py-3 rounded-pill shadow-lg">
                                🚀 Send Message
                            </button>
                        </div>

                        <style>
                            /* Gradient Button */
                            .btn-gradient {
                                background: linear-gradient(135deg, #4e54c8, #8f94fb);
                                border: none;
                                color: #fff;
                                font-size: 1.1rem;
                                font-weight: 600;
                                letter-spacing: 0.5px;
                                transition: all 0.3s ease;
                                box-shadow: 0 4px 15px rgba(78, 84, 200, 0.4);
                            }

                            /* Hover Effect */
                            .btn-gradient:hover {
                                background: linear-gradient(135deg, #8f94fb, #4e54c8);
                                transform: translateY(-3px) scale(1.05);
                                box-shadow: 0 6px 20px rgba(78, 84, 200, 0.6);
                            }

                            /* Click Effect */
                            .btn-gradient:active {
                                transform: translateY(0) scale(0.98);
                                box-shadow: 0 2px 10px rgba(78, 84, 200, 0.4);
                            }
                        </style>

                    </form>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-3">
                        <div class="card shadow-sm border-0 rounded-3 p-3 text-center hover-shadow">
                            <span class="fs-3 text-primary"><i class="ti-home"></i></span>
                            <h5 class="mt-2">Our Campus</h5>
                            <p class="mb-0 text-muted">Sinnar,Nashik, Maharashtra, India</p>
                        </div>

                        <div class="card shadow-sm border-0 rounded-3 p-3 text-center hover-shadow">
                            <span class="fs-3 text-success"><i class="ti-tablet"></i></span>
                            <h5 class="mt-2">Call Us</h5>
                            <p class="mb-0 text-muted">+91 7219080839</p>
                            <small class="text-muted">Call or What'sapp (24/7)</small>
                        </div>

                        <div class="card shadow-sm border-0 rounded-3 p-3 text-center hover-shadow">
                            <span class="fs-3 text-danger"><i class="ti-email"></i></span>
                            <h5 class="mt-2">Email Support</h5>
                            <p class="mb-0 text-muted">datasoftwareanalysis@gmail.com</p>
                            <small class="text-muted">We reply within 24 hours!</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Extra Styling -->
            <style>
                .hover-shadow:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
                    transition: all 0.3s ease-in-out;
                }

                .form-control:focus {
                    border-color: #0d6efd;
                    box-shadow: 0 0 8px rgba(13, 110, 253, 0.3);
                }
            </style>

        </div>
    </section>
    <!-- ================ contact section end ================= -->
       <?php
    include ('comman/footer.php');
    ?>