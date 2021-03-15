@include('website.static.header')

@if(isset($doctor) and !null)

    <section class="page-title" style="background-image: url('images/background/8.jpg');">
        <div class="auto-container">
            <div class="title-outer">
                <h1>
                    Dr.{{ $doctor->Doctor->name }}</h1>
{{--                <ul class="page-breadcrumb">--}}
{{--                    <li><a href=".."></a></li>--}}
{{--                    <li><a href=".."> </a></li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>

    <section class="doctor-detail-section" style="background-color: #e0e0e0;background-image: url({{ asset('images/icons/pattern-11.png') }});">
        <div class="auto-container" >
            <div class="row">
                <!--
    <div class="col-6">
        <div id="calendarContainer"></div>

    </div>
    <div class="col-6">
        <div id="organizerContainer"></div>
    </div>
                -->
                <!-- Contact Form -->
                <div class="contact-form-two" style="background-color: #00968847;">
                    @if(session('message'))
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="message-box with-icon success">
                                <div class="icon-box"><span class="icon fa fa-check"></span></div>
                                <p>Thank You </p>
                                <a href="#" class="close-btn"><span class="icon fa fa-times"></span></a>
                            </div>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="message-box with-icon error">
                                <div class="icon-box"><span class="icon fa fa-exclamation-triangle"></span></div>
                                <p>Error</p>
                                <a href="#" class="close-btn"><span class="icon fa fa-times"></span></a>
                            </div>
                        </div>
                    @endif

                    @if(session('Notfound'))
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="message-box with-icon error">
                                <div class="icon-box"><span class="icon fa fa-exclamation-triangle"></span></div>
                                <p>Choose Different Day</p>
                                <a href="#" class="close-btn"><span class="icon fa fa-times"></span></a>
                            </div>
                        </div>
                    @endif
                    <div class="title-box">
                        <h4>

                           Dr. {{ $doctor->Doctor->name  }}  On Clinic : {{ $doctor->Clinc->name}}
                        </h4>

                    </div>
                    <form method="post"  id="contact-form">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="patient_name" placeholder="Full Name" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="number" name="patient_mobile" placeholder="Phone Number" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label >Describe Your status</label>
                                <select name="status_desc" id="status_desc"  required>
                                    <option selected value="Patient preview">Patient preview</option>
                                    <option value="consultation">consultation</option>
                                    <option value="Review">Review</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button class="theme-btn btn-style-three small" type="submit" ><span class="btn-title">Book Now</span></button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </section>

@endif

@include('website.static.footer')


<!-- Stick script at the end of the body -->

@include('website.static.footer')

