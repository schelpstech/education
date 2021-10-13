<?php
include "navin.php";
?>
<section id="contactus-header" class="bg-courses-img">
    <div class="overlay-contact"></div>
    <div class="container">
        <div class="row text-center d-flex justify-content-center align-items-center row-height">
            <div class="col-12">
                <h1 class="main-heading text-white"></h1>
                <p class="sub-heading text-white text-width"></p>
            </div>
        </div>
    </div>
</section>

<section id="content-courses">
    <div class="container">
        <div class="row courses">

            <div class="col-sm-12 col-lg-6 mb-sm-0 mb-lg-5">
                <div class="row">
                    <div class="col-6">
                        <a href="course-detail.html">
                        <figure class="snip1295">
                           <img src="img/courses/course1.png" alt="COURSE IMG">
                            <div class="border one">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div>
                        </figure>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="course-text mt-2">
                            <a href="course-detail.html" class="text-decoration-none"><h1 class="main-heading green-color">Nursery<span class="blue-color"> Classes</span></h1></a>
                            <p class="sub-heading text-black">Creche | Kindergarten and Nursery Classes.</p>
                            <a class="btn btn-primary rounded-pill blue-btn"  data-toggle="modal" data-target=".modal">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6 mb-sm-0 mb-lg-5">
                <div class="row">
                    <div class="col-6">
                        <a href="course-detail.html">
                        <figure class="snip1295">
                            <img src="img/courses/course6.png" alt="COURSE IMG">
                            <div class="border one">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div>
                        </figure>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="course-text mt-2">
                            <a href="course-detail.html" class="text-decoration-none"><h1 class="main-heading green-color">Primary<span class="blue-color"> Classes</span></h1></a>
                            <p class="sub-heading text-black">Lower and Upper Basic Primary Classes</p>
                            <a class="btn btn-primary rounded-pill blue-btn"  data-toggle="modal" data-target=".modal">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6 mb-sm-0 mb-lg-5">
                <div class="row">
                    <div class="col-6">
                        <a href="course-detail.html">
                        <figure class="snip1295">
                            <img src="img/courses/course3.png" alt="COURSE IMG">
                            <div class="border one">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div>
                        </figure>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="course-text mt-2">
                            <a href="course-detail.html" class="text-decoration-none"><h1 class="main-heading green-color">JSS <span class="blue-color"> Classes</span></h1></a>
                            <p class="sub-heading text-black">Junior Secondary School with Basic Elementary Secndary Education</p>
                            <a class="btn btn-primary rounded-pill blue-btn"  data-toggle="modal" data-target=".modal">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6 mb-sm-0 mb-lg-5">
                <div class="row">
                    <div class="col-6">
                        <a href="course-detail.html">
                        <figure class="snip1295">
                            <img src="img/courses/course4.png" alt="COURSE IMG">
                            <div class="border one">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div>
                        </figure>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="course-text mt-2">
                            <a href="course-detail.html" class="text-decoration-none"><h1 class="main-heading green-color">Senior Secondary<span class="blue-color"> Classes</span></h1></a>
                            <p class="sub-heading text-black">Senior Secondary Classes with registration for national and external examinations like WASSCE, NECO SSCE.</p>
                            <a class="btn btn-primary rounded-pill blue-btn"  data-toggle="modal" data-target=".modal">Apply Now</a>

                        </div>
                    </div>
                </div>
            </div>

           

        </div>
    </div>
</section>

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center footer-content">
                <ul class="footer-icon">
                    <li class="footer_list"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer_list"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="footer_list"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="footer_list"><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="sub-heading footer_text text-black"><i class="far fa-copyright"></i>2020 MegaOne. Made with love by themeindustry</p>

            </div>
        </div>
    </div>
</section>

<!--modal window-->
<div class="modal fade model-reg" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="appointment-form" id="appointment-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="font-weight-bold green-color form-tittle">Apply<span class="blue-color"> Now!</span></h1>
                    <div class="form-group-1">
                        <input type="text" name="name" id="name" placeholder="Your Name" required />
                        <input type="text" name="name" placeholder="Father Name" required />
                        <input type="email" name="email" id="email" placeholder="Email" required />
                        <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                        <input type="text" name="title" id="title" placeholder="Address" required />
                        <div class="select-list">
                            <select name="course_type" id="course_type" class="la-angle-down">
                                <option value="">Course to Apply</option>
                                <option value="society">Society</option>
                                <option value="language">Language</option>
                            </select>
                        </div>
                    </div>

                    <button type="button" class="btn btn-large btn-primary contact-btn w-100 text-white" id="submit_btn" onclick="send_mails();">SUBMIT NOW</button>

                </form>


            </div>

        </div>
    </div>
</div>
<!--modal window end-->

<!-- JavaScript -->
<script src="../vendor/js/bundle.min.js"></script>

<!-- Plugin Js -->
<script src="../vendor/js/jquery.fancybox.min.js"></script>
<script src="../vendor/js/jquery.cubeportfolio.min.js"></script>

<!-- custom script -->
<script src="../education/js/mediaelement-and-player.min.js"></script>
<script src="../education/js/wow.min.js"></script>
<script src="../vendor/js/owl.carousel.min.js"></script>
<script src="../vendor/js/parallaxie.min.js"></script>
<script src="../education/js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</body>
</html>