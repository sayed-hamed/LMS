
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


<!-- End search box -->
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- start course content container -->
                            <div class="mu-course-container mu-blog-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img alt="img" src="{{asset('uploads/blogs/'. $blogs->img)}}"></a>
                                                <figcaption class="mu-blog-caption">
                                                    <h3 class="p-4 bg-warning bg-gradient text-dark w-100 "><a href="#">{{$blogs->name}}</a></h3>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-blog-description text-start fw-bold text-start">
                                                <p class="text-start fw-bold @if (App::getLocale() == 'en')text-start @else text-end @endif ">{!! nl2br($blogs->desc) !!}}</p>


                                            </div>
                                            <!-- start blog post tags -->
                                            <div class="mu-blog-tags">
                                                <ul class="mu-news-single-tagnav">
                                                    <li>TAGS :</li>
                                                    <li><a href="#">Science,</a></li>
                                                    <li><a href="#">English,</a></li>
                                                    <li><a href="#">Sports,</a></li>
                                                    <li><a href="#">Health</a></li>
                                                </ul>
                                            </div>
                                            <!-- End blog post tags -->
                                            <!-- start blog social share -->
                                            <div class="mu-blog-social">
                                                <ul class="mu-news-social-nav">
                                                    <li>SOCIAL SHARE :</li>
                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                </ul>
                                            </div>
                                            <!-- End blog social share -->
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end course content container -->
                            <!-- start blog navigation -->
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                            </div>
                            <!-- end blog navigation -->
                            <!-- start related course item -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-related-item">
                                        <h3>Related News</h3>
                                        <div class="mu-related-item-area">
                                            <div id="mu-related-item-slide">
                                                @foreach($latest_blog as $blog)
                                                <div class="col-md-6">
                                                    <article class="mu-blog-single-item" style="width: 450px;height: 450px;background-color: #FFFFFF">
                                                        <figure class="mu-blog-single-img">
                                                            <a href="{{route('front.blogdetails',[$blog->id])}}"><img alt="img" src="{{asset('uploads/blogs/'.$blog->img)}}"></a>
                                                            <figcaption class="mu-blog-caption">
                                                                <h3><a href="{{route('front.blogdetails',[$blog->id])}}">{{$blog->name}}</a></h3>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="mu-blog-description">
                                                            <p>EduTec Learning Center</p>
                                                            <a href="{{route('front.blogdetails',[$blog->id])}}" class="mu-read-more-btn">Read More</a>
                                                        </div>
                                                    </article>
                                                </div>

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end start related course item -->


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
                                        <li><a href="">Business English</a></li>
                                        <li><a href="">Exam Preparation</a></li>
                                        <li><a href="">ENGLISH FOR SPECIFIC PURPOSES (ESP)</a></li>
                                    </ul>
                                </div>
                                <!-- end single sidebar -->
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
                                            @foreach($letest_courses as $course)
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
                                            @foreach($letest_courses as $course)
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
