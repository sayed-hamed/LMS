@include('front.inc.header')
<!-- Start header  -->
<header id="mu-header">
    <div class="container-fluid bg-black fixed-top px-5">
        <div class="row">
            <div class="col">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col">
                            <div class="mu-header-top-left">
                                <div class="mu-top-email">
                                    <i class="fa fa-envelope"></i>
                                    <span>info@edu-tec.net</span>
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span>+974 44122454</span>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mu-header-top-right">
                                <nav>

                                    <ul class="mu-top-social-nav">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div style="width: 2px; height: 1px; padding-right: 35px;">
                            <button type="button" class="btn-group btn-group-sm btn-light"><a target="_blank" href="{{route('admin.login')}}">login</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header  -->
<section class="Home">
    <div
        id="carouselExampleCaptions"
        class="carousel slide vh-100 bg-dark"
        data-bs-ride="carousel"
    >
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('front/assets/img/slider/1.jpg')}}" class="d-block w-100" alt="..." />
                <div class="carousel-caption">
                    <h2 class="fw-bold fs-1 mb-4">{{__('messages.EduTec Training Center')}} </h2>
                    <p class="fs-5">
                        {{__('messages.EduTec was established in 2007 to offer vocational training')}}
                    </p>
                    <div class="slider-btn mt-5">
                        <a
                            class="btn text-white fw-bold rounded-1 border border-white text-uppercase bg-transparent mb-3"
                            href="http://edu-tec.xyz/en/courses"
                            role="button"
                        >{{__('messages.View Courses')}}</a
                        >
                        <a
                            class="btn text-white fw-bold rounded-1 border border-white text-uppercase bg-transparent mb-3"
                            href="http://edu-tec.xyz/en/contact"
                            role="button"
                        >{{__('messages.ENROLL NOW')}}</a
                        >
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('front/assets/img/slider/2.jpg')}}" class="d-block w-100" alt="..." />
                <div class="carousel-caption">
                    <h2 class="fw-bold fs-1 mb-4">{{__('messages.English Training')}}</h2>
                    <p class="fs-5">
                        {{__('messages.EduTec is proud to announce a wide range of
                        General English Courses --
                        Business English Courses --
                        English for Specific Purposes')}}
                    </p>
                    <div class="slider-btn mt-5">
                        <a
                            class="btn text-white fw-bold rounded-1 border border-white text-uppercase bg-transparent"
                            href="http://edu-tec.xyz/en/blog"
                            role="button"
                        >{{__('messages.MORE DETAILS')}}</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev d-none d-md-block"
            type="button "
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon d-none d-md-block"" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- End Slider -->
<!-- Start service  -->
<section id="mu-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-service-area">
                    <!-- Start single service -->
                    <div class="mu-service-single bg-image" style="background-image:url('front/assets/img/services-back/A-friendly-helpful-honest-company.jpg')">
                        <span class="fa fa-graduation-cap"></span>
                        <h3>{{__('messages.English Language Training')}}</h3>
                        <p>{{__('messages.A wide range of General, Business English')}}
                            {{__('messages.ESP (English for Specific Purposes)')}}
                            {{__('messages.and Exam Preparation courses for 2015.')}} </p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single" style="background-image: url('front/assets/img/services-back/Comprehensive-Customer-Service.jpg')">
                        <span class="fa fa-university"></span>
                        <h3>{{__('messages.Management & Soft Skills training')}}</h3>
                        <p>{{__('messages.Training that will make a real and measurable difference to your performance. it can be tailored to meet your organisation’s specific needs.')}}</p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single" style="background-image: url('front/assets/img/services-back/Management-Soft-Skills-training.jpg')")>
                        <span class="fa fa-shopping-cart"></span>
                        <h3>{{__('messages.Competitive Pricing')}}</h3>
                        <p>{{__('messages.EduTec training solutions are competitively priced to enable your operation to get optimum returns-on-investment.')}}</p>

                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single" style="background-image: url('front/assets/img/services-back/E-Learning-Distance-Learning.jpg')")>
                        <span class="fa fa-television"></span>
                        <h3>{{__('messages.E-Learning & Distance Learning')}}</h3>
                        <p>{{__('messages.Learn what you need, when you need, where you need…” e-Learning, e-Tutoring, e-Coaching Live and Blended Learning.')}}</p>

                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single" style="background-image: url('front/assets/img/services-back/Management-Soft-Skills-training.jpg')")>
                        <span class="fa fa-star"></span>
                        <h3>{{__('messages.Comprehensive Customer Service')}}</h3>
                        <p>{{__('messages.Unlike many of our competitors, EduTec is customer oriented. Everything you need will be our pleasure to provide and any questions will be answered promptly.')}}</p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single" style="background-image: url('front/assets/img/services-back/English-Language-Training.jpg')")>
                        <span class="fa fa-users"></span>
                        <h3>{{__('messages.A friendly helpful honest company')}}</h3>
                        <p>{{__('messages.EduTec Training Center Qatar is proud to be a Qatari company that has international service quality standards.')}}</p>
                    </div>
                    <!-- Start single service -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service  --><!-- End service  -->

<!-- Start about us -->
<section class="container pt-5">

    <div class="py-5">
        <div class="row">
            <h3 style="font-size: 50px;" class="text-warning fw-bold  py-5" class="text-warning py-5">{{__('messages.Our Popular Courses')}}</h3>
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="hover hover-4 text-white rounded"><img src="{{asset('front/assets/img/sss.jpg')}}" alt="">
                    <div class="hover-overlay"></div>
                    <div class="hover-4-content">
                        <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">{{__('messages.Our Courses')}}</span></h3>
                        <p class="hover-4-description text-uppercase mb-0 small">{{__('messages.Our assessments focus on the language skills (reading, writing, listening and speaking). They are designed for learners with varying levels of proficiency in English.')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hover hover-4 text-white rounded"><img src="{{asset('front/assets/img/pp.png')}}" alt="">
                    <div class="hover-overlay"></div>
                    <div class="hover-4-content">
                        <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">{{__('messages.Our Events')}}</span></h3>
                        <p class="hover-4-description text-uppercase mb-0 small">{{__('messages.Know and understand the types of contracts, Risk in construction industry, FIDIC Forms, Claims in construction industry, Arbitration & Adjudication, and Review Real Cases.
                            In this course, students will apply the generally recognized practices of project management acknowledged by the Project Management Institute (PMI®) to successfully manage projects based on BMBOK Guide 6th edition.')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start about us counter -->
<section id="mu-abtus-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-abtus-counter-area">
                    <div class="row">
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-users"></span>
                                <h4 class="counter">{{$students_count}}</h4>
                                <p>{{__('messages.ENROLLED STUDENTS')}}</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-book"></span>
                                <h4 class="counter">{{$courses_count}}</h4>
                                <p>{{__('messages.COURSES')}}</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-star"></span>
                                <h4 class="counter">243</h4>
                                <p>5 STARS RATING</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single no-border">
                                <span class="fa fa-play"></span>
                                <h4 class="counter">{{$trainers_count}}</h4>
                                <p>{{__('messages.Trainers')}}</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us counter -->

<!-- Start features section -->
<section id="mu-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 border rounded">
                <div class="mu-features-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2 style="font-size: 40px;" class="text-warning fw-bold mt-5" >{{__('messages.Our Features')}}</h2>
                    </div>
                    <!-- End Title -->
                    <!-- Start features content -->
                    <div class="mu-features-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-4  col-sm-6">
                                <div class="mu-single-feature border shadow rounded py-5">
                                    <span class="fa fa-book"></span>
                                    <h4>{{__('messages.Scalable learning')}}</h4>
                                    <p>{{__('messages.Provide your people with virtual and in-person instructor-led training sessions, eLearning.')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature1 border shadow rounded py-5">
                                    <span class="fa fa-users"></span>
                                    <h4>{{__('messages.Expert Teachers')}}</h4>
                                    <p>{{__('messages.Expertise in teaching involves much more than the simple accumulation of technical skills and tips.')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature border shadow rounded py-5">
                                    <span class="fa fa-laptop"></span>
                                    <h4>{{__('messages.Learning insights')}}</h4>
                                    <p>{{__('messages.Connect people-growth and organisational success using reports for individual learning, teams, and skills.')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature1 border shadow rounded py-5">
                                    <span class="fa fa-microphone"></span>
                                    <h4>{{__('messages.Personalised for learners')}}</h4>
                                    <p>{{__('messages.Create or connect to expertly curated content and build flexible learning spaces that drive engagement.')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature border shadow rounded py-5">
                                    <span class="fa fa-film"></span>
                                    <h4>{{__('messages.Attendance Certificate')}}</h4>
                                    <p>{{__('messages.Engaging courses designed and led by real-world experts to help learners prepare and practice for their.')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature1 border shadow rounded py-5">
                                    <span class="fa fa-certificate"></span>
                                    <h4>{{__('messages.Foster self-driven growth')}}</h4>
                                    <p>{{__('messages.Empower your people to learn with AI-recommended content and insights on how to grow their careers.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End features content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features section -->

<!-- Start latest course section -->
<section id="mu-latest-courses"style="height: 700px;margin-bottom:70px; background-image: url('front/assets/img/courses/bg2-min.jpg')">
    <div class="container" >
        <div class="row" >
            <div class="col-lg-12 col-md-12 " style="margin-top: -50px" >
                <div class="mu-latest-courses-area" >
                    <!-- Start Title -->
                    <div class="mu-title" >
                        <h2 style="font-size: 50px;" class="text-warning fw-bold mt-3">{{__('messages.Latest Courses')}}</h2>
                    </div>
                    <!-- End Title -->
                    <!-- Start latest course content -->
                    <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                        @foreach($courses as $course)
                        <div class="col-md-6 col-sm-6 " style="margin: 10px" style="width: 32%; height: 600px">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="{{route('front.coursedetails',[$cats->id,$course->id])}}"><img src="{{asset('uploads/courses/'.$course->img)}}" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">{{$course->name}}</a>
                                        <span><i class="fa fa-clock-o"></i>{{$course->duration}}</span>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content" style="height: 200px">
                                    <h4><a href="{{route('front.coursedetails',[$cats->id,$course->id])}}">{{$course->name}}</a></h4>
                                    <p class="text-sm-left">{{$course->small_desc}}</p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <button class="btn btn-warning"  style="margin-bottom: 10px"><a href="{{route('front.coursedetails',[$cats->id,$course->id])}}">{{__('messages.More Details')}}</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                    <!-- End latest course content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End latest course section -->



<!-- Start testimonial -->
<section id="mu-testimonial" style="background-image: url('front/assets/img/courses/2.jpg')">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-testimonial-area">
                    <h2 class="text-warning mb-5">{{__('messages.WHAT PEOPLE SAY ABOUT EDUTEC')}}</h2>

                    <div id="mu-testimonial-slide" class="mu-testimonial-content">


                        @foreach($tests as $test)
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>{{$test->desc}}</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="{{asset('uploads/test/'.$test->img)}}" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>{{$test->name}}</h4>
                                <span>{{__('messages.Happy')}} {{$test->status}}</span>
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial -->
<!-- Start footer -->
@include('front.inc.footer')
<!-- End footer -->



