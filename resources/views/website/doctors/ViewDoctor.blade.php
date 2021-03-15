@include('website.static.header')

<section class="page-title" style="background-image: url(images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>استعراض الأطباء</h1>
            <ul class="page-breadcrumb">
                <li><a href="./">الرئيسية</a></li>
                <li>اطباء حسب الاختصاص</li>
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


@include('website.static.footer')
