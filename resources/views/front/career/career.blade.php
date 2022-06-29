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


                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header  -->
<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->
<div id="slider">
    <div class="slides">
        <!-- First slide -->
        <div class="slider">
            <div class="legend"></div>
            {{--            <div class="content">--}}
            {{--                <div class="content-txt">--}}
            {{--                    <h1>Your title</h1>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="images">
                <img src="{{asset('front/assets/img/courses/bg2-1.jpg')}}" />
            </div>
        </div>

        <!-- Second slide -->
        <div class="slider">
            {{--            <div class="legend"></div>--}}
            {{--            <div class="content">--}}
            {{--                <div class="content-txt">--}}
            {{--                    <h1>Your title</h1>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="images">
                <img src="{{asset('front/assets/img/courses/bg-page.jpg')}}" />
            </div>
        </div>

        <!-- Third slide -->
        <div class="slider">
            {{--            <div class="legend"></div>--}}
            {{--            <div class="content">--}}
            {{--                <div class="content-txt">--}}
            {{--                    <h1>Your title</h1>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="images">
                <img src="{{asset('front/assets/img/courses/bg-min.jpg')}}" />
            </div>
        </div>

        <!-- Fourth slide -->
        <div class="slider">
            {{--            <div class="legend"></div>--}}
            {{--            <div class="content">--}}
            {{--                <div class="content-txt">--}}
            {{--                    <h1>Your title</h1>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="images">
                <img src="{{asset('front/assets/img/courses/bg9.jpg')}}" />
            </div>
        </div>
    </div>
</div>
<!-- Start header  -->
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="{{asset('front/assets/img/courses/slider-6.jpg')}}" alt="img" />
                    </div>
                    <div class="col-6 text-start">
                        <img
                            class="img-fluid"
                            src="{{asset('front/assets/img/courses/corporate-012.jpg')}}"
                            style="width: 85%; margin-top: 15%"
                        />
                    </div>
                    <div class="col-6 text-end">
                        <img
                            class="img-fluid"
                            src="{{asset('front/assets/img/courses/corporate-language-training.jpg')}}"
                            style="width: 85%"
                        />
                    </div>
                    <div class="col-6 text-end" >
                        <img class="img-fluid w-100" src="{{asset('front/assets/img/courses/2.jpg')}}" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Be a part of Edu-Tec!</h1>
                <p class="mb-4">
                    Edu-Tec was established in 2007 to offer vocational training and award recognized qualifications. The company specializes in tailor made courses in English, Management, Skills for Life offered through a forum of workshops and seminars.
                    If you have questions about EduTec training services and offers, please do not hesitate to contact us.
                    We will be happy to assist you in any way we can.
                </p>
                <h5>We are currently looking for</h5> <br>
                @foreach($teachers as $teacher)
                    <p class="list-group-item text-center">
                        <i class=" text-warning me-sm-5"></i>{{$teacher->teacher_type}}
                    </p>

                @endforeach
                <a class="btn btn-warning py-3 px-5 mt-3" href="#form">Join Us Now</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="d-flex justify-content-center">
    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>

        </div>
    @endif

</div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <h4 class="mb-4  text-center fw-bold list-group-item bg-dark bg-gradient rounded-pill text-light text-size ">POST YOUR RESUME</h4><br>
    <form id="form" method="post" action="{{route('front.career.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 text-center list-group-item " style="background-image: url({{asset('front/assets/img/courses/bggg.jpeg')}}); width: 100%; float: left;">
            <div class="col-12 col-sm-6 ">
                <input type="text" class="form-control list-group-item " name="name" placeholder="Your Name">
            </div>
            <div class="col-12 col-sm-6">
                <input type="email" class="form-control list-group-item" name="email" placeholder="Your Email">
            </div>
            <div class="col-12 col-sm-6">
                <input type="text" class="form-control list-group-item" name="company" placeholder="Company & School">
            </div>
            <div class="col-12 col-sm-6">
                <input type="text" class="form-control list-group-item" name="phone" placeholder="Your Phone">
            </div>
            <div class="col-12 col-sm-6">
                <input type="file"  name="file" class="form-control list-group-item bg-white">
            </div>
            <div class="col-12 col-sm-6">
                <input type="text" class="form-control list-group-item" name="job_title" placeholder="Job Title">
            </div>
            <div class="col-12 col-sm-6">
                <input type="text" class="form-control list-group-item" name="edu_level" placeholder="Education Level">
            </div>
            <div class="col-12">
                <button class="btn btn-warning w-50 rounded-pill " style="float: left; margin-bottom: 10px;" type="submit">Apply Now</button>
            </div>
        </div>
    </form>
</div>
</div>

@include('front.inc.footer')
