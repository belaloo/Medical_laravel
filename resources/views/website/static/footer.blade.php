<!-- Main Footer -->
<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section" style="background-image: url({{ asset('images/background/7.jpg') }});">
        <div class="auto-container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('images/logo-2.png') }}" alt=""></a>
                                </div>
                                <div class="text">
                                    <p>Our Clinic has grown to provide a world class facility for the clinic advanced restorative. </p>
                                    <p>We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.</p>
                                </div>
                                <ul class="social-icon-three">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h2 class="widget-title">Departments</h2>
                                <ul class="user-links">
                                    <li><a href="#">Surgery & Radiology</a></li>
                                    <li><a href="#">Family Medicine</a></li>
                                    <li><a href="#">Women???s Health</a></li>
                                    <li><a href="#">Optician</a></li>
                                    <li><a href="#">Pediatrics</a></li>
                                    <li><a href="#">Dermatology</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget recent-posts">
                                <h2 class="widget-title">Latest News</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <div class="post">
                                        <div class="thumb"><a href="blog-post-image.html"><img src="{{ asset('images/resource/post-thumb-1.jpg') }}" alt=""></a></div>
                                        <h4><a href="blog-post-image.html">Integrative Medicine <br>& Cancer Treatment.</a></h4>
                                        <span class="date">July 11, 2020</span>
                                    </div>

                                    <div class="post">
                                        <div class="thumb"><a href="blog-post-image.html"><img src="{{ asset('images/resource/post-thumb-2.jpg') }}" alt=""></a></div>
                                        <h4><a href="blog-post-image.html">Achieving Better <br>Health Care Time.</a></h4>
                                        <span class="date">August 1, 2020</span>
                                    </div>

                                    <div class="post">
                                        <div class="thumb"><a href="blog-post-image.html"><img src="{{ asset('images/resource/post-thumb-3.jpg') }}" alt=""></a></div>
                                        <h4><a href="blog-post-image.html">Great Health Care <br>For Patients.</a></h4>
                                        <span class="date">August 1, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li>
                                            <span class="icon flaticon-placeholder"></span>
                                            <div class="text">2130 Fulton Street San Diego <br>CA 94117-1080 USA</div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <div class="text">Mon to Fri : 08:30 - 18:00</div>
                                            <a href="tel:+89868679575"><strong>+898 68679 575</strong></a>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-email"></span>
                                            <div class="text">Do you have a Question?<br>
                                                <a href="mailto:info@gmail.com"><strong>info@gmail.com</strong></a></div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-back-in-time"></span>
                                            <div class="text">Mon - Sat 8.00 - 18.00<br>
                                                <strong>Sunday CLOSED</strong></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="footer-nav">
                    <ul class="clearfix">
                        <li><a href="index.html">Privacy Policy</a></li>
                        <li><a href="about-us.html">Contact</a></li>
                        <li><a href="services.html">Supplier</a></li>
                    </ul>
                </div>

                <div class="copyright-text">
                    <p>Copyright ?? 2020 <a href="#">Bold Touch</a>All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->

</div><!-- End Page Wrapper -->

@include('website.static.color-switcher')
<script src="{{ asset('asset/js/jquery.js') }}"></script>
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('asset/js/mmenu.polyfills.js') }}"></script>
<script src="{{ asset('asset/js/jquery.modal.min.js') }}"></script>
<script src="{{ asset('asset/js/mmenu.js') }}"></script>
<script src="{{ asset('asset/js/appear.js') }}"></script>
<script src="{{ asset('asset/js/owl.js') }}"></script>
<script src="{{ asset('asset/js/wow.js') }}"></script>
<script src="{{ asset('asset/js/script.js') }}"></script>
<!-- Color Setting -->
<script src="{{ asset('asset/js/color-settings.js') }}"></script>
</body>
</html>


