@include('website.static.header')

<section class="page-title" style="background-image: url(images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>View Doctor Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="./">Doctor</a></li>
                <li>View Details</li>
            </ul>
        </div>
    </div>
</section>


<section class="doctor-detail-section">
    <div class="auto-container">
        <div class="row">
            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="docter-detail">
                    <h3 class="name">{{ $doctor->name }}</h3>
                    <span class="designation">{{ $doctor->TheMajor->name }}</span>

                    <ul class="doctor-info-list">
                        <li>
                            <strong>Mobile</strong>
                            <p>{{ $doctor->mobile }}</p>
                        </li>

                    </ul>
                </div>


            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <div class="sidebar">
                    <!-- Team Block -->
                    <div class="team-block wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <figure class="image"><img src="{{ $doctor->image  }}" alt=""></figure>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


@if(isset($dates))

    <section class="time-table-section">
        <div class="auto-container">
            <div class="table-outer">
                <!-- Doctors Time Table -->
                <table class="doctors-time-table">
                    <thead>
                    <tr>
                        <th class="dark">Doctor Work Time</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>

                    </tr>
                    </thead>

                    <tbody>
                    <!-- Table Row 08:00am -->
                    <tr>
                        <th>Time And Clinic</th>

                        @if(count($sat) > 0 )
                            <td>
                                <strong><strong>مركز {{ $sat[0]->Clinc->name }}</strong></strong>
                                <p> {{ $sat[0]->from }} - {{ $sat[0]->to}}<br></p>
                                <div class="doctor-info">
                                    <figure class="thumb"><img src="{{ $sat[0]->Doctor->name }}" alt=""></figure>
                                    <h4 class="name">{{ $doctor->FullName }}</h4>
                                    <a href="/booking/{{ $sat[0]->id}}" class="theme-btn btn-style-one"><span class="btn-title">Book Now </span><span></span> <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </td>
                        @else
                            <td class="empty"></td>
                        @endif

                        @if(count($sun) > 0 )
                            <td>
                                <strong><strong>مركز {{ $sun[0]->Clinc->name  }}</strong></strong>
                                <p> {{ $sun[0]->from }} - {{ $sun[0]->to }}<br></p>
                                <div class="doctor-info">
                                    <figure class="thumb"><img src="{{ $sun[0]->Doctor->name }}" alt=""></figure>
                                    <h4 class="name">{{ $doctor->FullName }}</h4>
                                    <a href="/booking/{{ $sun[0]->id}}" class="theme-btn btn-style-one"><span class="btn-title">Book Now </span><span></span> <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </td>
                        @else
                            <td class="empty"></td>
                        @endif

                        @if(count($mon) > 0 )
                            <td>
                                <strong><strong>مركز {{ $mon[0]->Clinc->name  }}</strong></strong>
                                <p> {{ $mon[0]->from }} - {{ $mon[0]->to }}<br></p>
                                <div class="doctor-info">
                                    <figure class="thumb"><img src="{{ $mon[0]->Doctor->name }}" alt=""></figure>
                                    <h4 class="name">{{ $doctor->FullName }}</h4>
                                    <a href="/booking/{{ $mon[0]->id}}" class="theme-btn btn-style-one"><span class="btn-title">Book Now </span><span></span> <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </td>
                        @else
                            <td class="empty"></td>
                        @endif

                        @if(count($thu) > 0)
                            <td>
                                <strong><strong>مركز {{ $thu[0]->Clinc->name }}</strong></strong>
                                <p> {{ $thu[0]->from }} - {{ $thu[0]->to }}<br></p>
                                <div class="doctor-info">
                                    <figure class="thumb"><img src="{{ $thu[0]->Doctor->name }}" alt=""></figure>
                                    <h4 class="name">{{ $doctor->FullName }}</h4>
                                    <a href="/booking/{{ $thu[0]->id}}" class="theme-btn btn-style-one"><span class="btn-title">Book Now </span><span></span> <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </td>
                        @else
                            <td class="empty"></td>
                        @endif

                        @if(count($win) > 0 )
                            <td>
                                <strong><strong>مركز {{ $win[0]->Clinc->name  }}</strong></strong>
                                <p> {{ $win[0]->from }} - {{ $win[0]->to }}<br></p>
                                <div class="doctor-info">
                                    <figure class="thumb"><img src="{{ $win[0]->Doctor->name }}" alt=""></figure>
                                    <h4 class="name">{{ $doctor->FullName }}</h4>
                                    <a href="/booking/{{ $win[0]->id}}" class="theme-btn btn-style-one"><span class="btn-title">Book Now </span><span></span> <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </td>
                        @else
                            <td class="empty"></td>
                        @endif

                        @if(count($thurth) > 0 )
                            <td>
                                <strong><strong>مركز {{ $thurth[0]->Clinc->name }}</strong></strong>
                                <p> {{ $thurth[0]->from }} - {{ $thurth[0]->to }}<br></p>
                                <div class="doctor-info">
                                    <figure class="thumb"><img src="{{ $thurth[0]->Doctor->name }}" alt=""></figure>
                                    <h4 class="name">{{ $doctor->FullName }}</h4>
                                    <a href="/booking/{{ $thurth[0]->id}}" class="theme-btn btn-style-one"><span class="btn-title">Book Now </span><span></span> <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </td>
                        @else
                            <td class="empty"></td>
                        @endif

                        @if(count($fri) > 0 )
                            <td>
                                <strong><strong>مركز {{ $fri[0]->Clinc->name  }}</strong></strong>
                                <p> {{ $fri[0]->from }} - {{ $fri[0]->to }}<br></p>
                                <div class="doctor-info">
                                    <figure class="thumb"><img src="{{ $fri[0]->Doctor->name }}" alt=""></figure>
                                    <h4 class="name">{{ $doctor->FullName }}</h4>
                                    <a href="/booking/{{ $fri[0]->id}}" class="theme-btn btn-style-one"><span class="btn-title">Book Now </span><span></span> <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </td>
                        @else
                            <td class="empty"></td>
                        @endif



                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endif




@include('website.static.footer')
