
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



<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- start course content container -->
                            <div class="mu-course-container">
                                <div class="row">

                                    @foreach($letest_courses as $courses)
                                    <div class="col-md-6 col-sm-6">
                                        <div class="mu-latest-course-single">
                                            <figure class="mu-latest-course-img">
                                                <a href="{{route('front.coursedetails',[$cats->id,$courses->id])}}"><img src="{{asset('uploads/courses/'.$courses->img)}}" alt="img"></a>
                                                <figcaption class="mu-latest-course-imgcaption">
                                                    <a href="{{route('front.coursedetails',[$cats->id,$courses->id])}}">{{$courses->name}}</a>
                                                    <span><i class="fa fa-clock-o"></i>{{$courses->duration}}</span>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-latest-course-single-content">
                                                <h4><a href="#"></a></h4>
                                                <p>{{$courses->small_desc}}</p>
                                                <div class="mu-latest-course-single-contbottom">
                                                    <button class="btn btn-warning mb-2" ><a href="{{route('front.coursedetails',[$cats->id,$courses->id])}}">More Details</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach

                                    <div class="d-flex justify-content-center w-100 mb-5">

                                        {!!$letest_courses->render()!!}

                                    </div>


                                </div>
                            </div>
                            <!-- end course content container -->
                            <!-- start course pagination -->
                            <!-- end course pagination -->
                        </div>
                        <div class="col-md-3">
                            <!-- start sidebar -->
                            <aside class="mu-sidebar">
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>Categories</h3>
                                    <ul class="mu-sidebar-catg">
                                        <li><a href="{{route('general')}}">General English</a></li>
                                        <li><a href="{{route('conversation')}}">Conversation</a></li>
                                        <li><a href="/cat/{{$cats->id}}">Business English</a></li>
                                        <li><a href="/cat/{{$cats->id}}">Exam Preparation</a></li>
                                        <li><a href="/cat/{{$cats->id}}">ENGLISH FOR SPECIFIC PURPOSES (ESP)</a></li>
                                    </ul>
                                </div>
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>Latest Courses</h3>
                                    <div class="mu-sidebar-popular-courses">
                                        @foreach($lacourses as $course)
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="/cat/{{$cats->id}}/course/{{$course->id}}" {{$course->name}}">
                                                    <img class="media-object" src="{{asset('uploads/courses/'.$course->img)}}" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="/cat/{{$cats->id}}/course/{{$course->id}}"{{$course->name}}">{{$course->name}}</a></h4>
                                                    <span class="popular-course-price">{{$course->price}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>Popular Courses</h3>
                                    <div class="mu-sidebar-popular-courses">
                                        @foreach($lacourses as $course)
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('uploads/courses/'.$course->img)}}" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">{{$course->name}}</a></h4>
                                                    <span class="popular-course-price">{{$course->price}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->

                                <!-- end single sidebar -->
                            </aside>
                            <!-- / end sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('front.inc.footer')
