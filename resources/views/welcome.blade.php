@include('website.static.header')

<!-- Bnner Section One -->
<section class="banner-section-one">
    <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
        <!-- Slide Item -->
        <div class="slide-item" style="background-image: url( {{ asset('images/main-slider/1.jpg')}} );">
            <div class="auto-container">
                <div class="content-outer">
                    <div class="content-box">
                        <span class="title">Welcome to our Medical Care Center</span>
                        <h2>We take care our <br>patients health</h2>
                        <div class="text">I realized that becoming a doctor, I can only help a small community. <br>But by becoming a doctor, I can help my whole country. </div>
                        <div class="btn-box">
                            <a href="about-us.html" class="theme-btn btn-style-one"><span class="btn-title">About Us</span></a>
                            <a href="departments.html" class="theme-btn btn-style-two"><span class="btn-title">Our Services</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item" style="background-image: url({{ asset('images/main-slider/2.jpg')}});">
            <div class="auto-container">
                <div class="content-outer">
                    <div class="content-box">
                        <span class="title">Welcome to our Medical Care Center</span>
                        <h2>We take care our <br>patients health</h2>
                        <div class="text">I realized that becoming a doctor, I can only help a small community. <br>But by becoming a doctor, I can help my whole country. </div>
                        <div class="btn-box">
                            <a href="about-us.html" class="theme-btn btn-style-one"><span class="btn-title">About Us</span></a>
                            <a href="departments.html" class="theme-btn btn-style-two"><span class="btn-title">Our Services</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Bnner Section One -->

<!-- Top Features -->
<section class="top-features">
    <div class="auto-container">
        <div class="row">
            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon flaticon-charity"></span>
                    <h4><a href="#">Quality & Safety</a></h4>
                    <p>Our Delmont hospital utilizes state of the art technology and employs a team of true experts.</p>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon flaticon-lifeline"></span>
                    <h4><a href="#">Leading Technology</a></h4>
                    <p>Our Delmont hospital utilizes state of the art technology and employs a team of true experts.</p>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon flaticon-doctor"></span>
                    <h4><a href="#">Experts by Experience</a></h4>
                    <p>Our Delmont hospital utilizes state of the art technology and employs a team of true experts.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section -->

@include('website.static.footer')
