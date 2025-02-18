@extends('website.layouts.app')

@section('content')

<!-- bradcam_area_start -->
<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3>UI/UX Design with <br> Adobe XD</h3>
                    <div class="prise">
                        <span class="inactive">$89.00</span>
                        <span class="active">$49</span>
                    </div>
                    <div class="rating">
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <span>(4.5)</span>
                    </div>
                    <div class="hours">
                        <div class="video">
                            <div class="single_video">
                                <i class="fa fa-clock-o"></i> <span>12 Videos</span>
                            </div>
                            <div class="single_video">
                                <i class="fa fa-play-circle-o"></i> <span>9 Hours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<div class="courses_details_info">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="single_courses">
                    <h3>Objectives</h3>
                    <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness open place day great wherein heaven sixth lesser subdue fowl male signs his day face waters itself and make be to our itself living. Fish in thing lights moveth. Over god spirit morning, greater had man years green multiply creature, form them in, likeness him behold two cattle for divided. Fourth darkness had. Living light there place moved divide under earth. Light face, fly dry us.</p>

                    <h3 class="second_title">Course Outline</h3>
                </div>
                <div class="outline_courses_info">
                    <div id="accordion">
                        @foreach (['Is WordPress hosting worth it?', 'Basic Classes', 'Will you transfer my site?', 'Why should I host with Hostza?', 'How do I get started with Shared Hosting?'] as $key => $question)
                        <div class="card">
                            <div class="card-header" id="heading{{ $key }}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}">
                                        <i class="flaticon-question"></i> {{ $question }}
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                                <div class="card-body">
                                    Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god moving. Moving in fourth air night bring upon.
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <div class="video_thumb">
                        <img src="{{ asset('website/img/latest_blog/video.png') }}" alt="">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=AjgD3CvWzS0">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="author_info">
                        <div class="auhor_header">
                            <div class="thumb">
                                <img src="{{ asset('img/latest_blog/author.png') }}" alt="">
                            </div>
                            <div class="name">
                                <h3>Macau Wilium</h3>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                        <p class="text_info">
                            Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness open place day.
                        </p>
                        <ul>
                            <li><a href="#"> <i class="fa fa-envelope"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="ti-linkedin"></i> </a></li>
                        </ul>
                    </div>
                    <a href="#" class="boxed_btn">Buy Course</a>
                    <div class="feedback_info">
                        <h3>Write your feedback</h3>
                        <p>Your rating</p>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>

                        <form action="#">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Write your feedback"></textarea>
                            <button type="submit" class="boxed_btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our_courses_start -->
<div class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Our Course Speciality</h3>
                    <p>Your domain control panel is designed for ease-of-use and <br> allows for all aspects of your domains.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (['Premium Quality', 'Business and Finance', 'Premium Quality', 'Premium Quality'] as $title)
            <div class="col-xl-3 col-md-6 col-lg-6">
                <div class="single_course text-center">
                    <div class="icon">
                        <i class="flaticon-art-and-design"></i>
                    </div>
                    <h3>{{ $title }}</h3>
                    <p>Your domain control panel is designed for ease-of-use <br> and <br> allows for all aspects of.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- our_courses_end -->

@endsection
