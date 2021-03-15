@include('website.static.header')

<section class="page-title" style="background-image: url(images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>استعراض الأطباء</h1>
            <ul class="page-breadcrumb">
                <li><a href="./">الرئيسية</a></li>
                <li>الأطباء</li>
            </ul>
        </div>
    </div>
</section>

<section class="team-section-two alternate alternate2">
    <div class="auto-container">
        <div class="row">
            @foreach($doctors as $doctor)
            <!-- Team Block -->
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ route('View-Doctor',$doctor->id) }}"><img src="{{ asset($doctor->image) }}" alt=""></a></figure>

                    </div>
                    <div class="info-box">
                        <h5 class="name"><a href="{{ route('View-Doctor',$doctor->id) }}"> {{ $doctor->name }} </a></h5>
                        <span class="designation">
                            <a href="{{ route('View-Majors',$doctor->major_id) }}">  {{ $doctor->TheMajor->name }}</a>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $doctors->links() }}

        </div>

    </div>
</section>

@include('website.static.footer')
