<?php
include "navin.php";
?>

<section id="contactus-header" class="bg-contact-img">
    <div class="overlay-contact"></div>
    <div class="container">
        <div class="row text-center d-flex justify-content-center align-items-center row-height">
            <div class="col-12">
                <h1 class="main-heading text-white">How to Reach Us</h1>
                <p class="sub-heading text-white text-width">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                    labore.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact-description">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center align-items-center mt-4 mt-md-0 mt-lg-0">
                <div class="about-heading width-heading">
                    <h1 class="main-heading green-color">Have Questions? <span class="blue-color">Contact Us</span></h1>
                    <p class="sub-heading mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation.</p>
                    <a href="#contact-content" class="btn btn-primary rounded-pill blue-btn scroll">Read More</a>
                </div>
            </div>

            <div class=" col-sm-12 col-md-6 col-lg-6 text-left">
                <div class="about_img margin_aboutimg">
                    <img src="img/contact-us/contact-img.png" alt="About Image">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card text-center contact-card">
                    <div class="card-body">
                        <div class="location-icon green-color">
                            <i class="las la-map-marked"></i>
                        </div>
                        <h2 class="card-title">Where We Are</h2>
                        <p class="card-text sub-heading">Temitope Ajegunle,<br>Idiroko, Ogun State.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 pb-4 pt-4 pt-md-0 pb-md-0 pt-lg-0 pb-lg-0">
                <div class="card text-center contact-card card-blue">
                    <div class="card-body">
                        <div class="location-icon blue-color">
                            <i class="las la-envelope-open-text"></i>
                        </div>
                        <h2 class="card-title">Email Inquiry</h2>
                        <p class="card-text sub-heading">info@stjohnschools.com.ng<br>contact@stjohnschools.com.ng</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 pb-sm-4">
                <div class="card text-center contact-card">
                    <div class="card-body">
                        <div class="location-icon green-color">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <h2 class="card-title">Need to Call</h2>
                        <p class="card-text sub-heading"> +234 0808 219 5280<br>+234 0814 256 2169 </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- START MAP SECTION  -->
<section id="map">
    <div class="row">
        <div class="col-12">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507246.0944719881!2d2.8030654214073873!3d6.664252026585141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b41df46b2d967%3A0x48f9df0016f60efd!2sSt.%20Johns%20Group%20of%20Schools!5e0!3m2!1sen!2sng!4v1633440485153!5m2!1sen!2sng" width="600" height="620" style="border:0;" allowfullscreen=""></iframe>
                   
                </div>
                <div class="row c-form">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-outer">
                        <h1 class="main-heading green-color text-left">Get In<span class="blue-color"> Touch</span></h1>

                        <form id="contact-form-data">
                            <div class="row mt-4">
                                <div class="col-md-12 col-sm-12">
                                    <div id="result"></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" required  id="candidate_name" name="userName">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email" required  id="user_email" name="userEmail">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <input class="form-control" type="text" required placeholder="Subject" id="user_subject" name="userSubject">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea class="form-control" placeholder="Message" required rows="5" id="user_message" name="userMessage"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-large btn-primary contact-btn w-100 text-white contact_btn">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

</section>


<?php
include "footer.php"
?>