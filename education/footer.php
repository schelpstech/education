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
                <p class="sub-heading footer_text text-black"><i class="far fa-copyright"></i><?php echo date("Y")?> ST. JOHNS Schools </p>

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
                                <option value="">Select Class</option>
                                <option value="nursery">Nursery</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
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
<!--contact form-->
<script src="../vendor/js/contact_us.js"></script>
<script src="../education/js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</body>
</html>