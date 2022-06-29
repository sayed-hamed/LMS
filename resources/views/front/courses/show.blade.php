
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
                            <div class="mu-course-container mu-course-details">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mu-latest-course-single">
                                            <figure class="mu-latest-course-img">
                                                <a href="#"><img src="{{asset('uploads/courses/'.$courses->img)}}" alt="img"></a>
                                                <figcaption class="mu-latest-course-imgcaption">
                                                    <a href="#">{{$courses->name}}</a>
                                                    <span><i class="fa fa-clock-o"></i>{{$courses->duration}}</span>
                                                </figcaption>
                                            </figure>
                                            <div class="justify-content-between">
                                                <p>{{__('messages.Course Rating')}} <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span></p>

                                                <div>
                                                    <button class="btn btn-warning">{{__('messages.Free English Placement Test')}}</button>
                                                    <button class="btn btn-warning"><a href="{{route('front.contact')}}">{{__('messages.Take this Course')}}</a></button>
                                                </div>

                                            </div>
                                            <div class="mu-latest-course-single-content pt-3 ">
                                                <h2><a href="#">{{$courses->name}}</a></h2>

                                                <h4 class="fw-bold">{{__('messages.Course Information')}}</h4>
                                                <table style="width: 100%;" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"  >
                                                    <tbody>

                                                    <tr>
                                                        <th colspan="2" scope="rowgroup">{{__('messages.This Is Our Course Information')}}</th>
                                                    </tr>

                                                    <tr>

                                                        <td>{{__('messages.Course Type')}}</td>

                                                        <td>{{$courses->course_type}}</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Course Price')}}</td>

                                                        <td>{{$courses->price}}</td>

                                                    </tr>

                                                    <tr>

                                                        <td>{{__('messages.Phone')}}</td>

                                                        <td>{{$courses->phone}}</td>

                                                    </tr>

                                                    <tr>

                                                        <td>{{__('messages.Language Level')}}</td>

                                                        <td>{{$courses->level}}</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Course Duration')}}</td>

                                                        <td>{{$courses->duration}}</td>

                                                    </tr>

                                                    <tr>

                                                        <td>{{__('messages.Place')}}</td>

                                                        <td>{{__('messages.QATAR_Doha')}}</td>

                                                    </tr>


                                                    <tr>

                                                        <td>{{__('messages.Language')}}</td>

                                                        <td>{{$courses->lang}}</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Provider')}}</td>

                                                        <td>{{__('messages.EduTec')}}</td>

                                                    </tr>
                                                    </tbody>

                                                </table>
                                                <h4 class="fw-bold bg-gradient bg-dark text-light">{{__('messages.Description')}}</h4>
                                                <h3>{{$courses->name}}</h3>
                                                <ul class="text-start fw-bold text-start list-group">
                                                    <li class="text-start fw-bold @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding-left: 100px; padding: 20px;">{!! nl2br($courses->desc) !!}</li>


                                                </ul>

                                                <h3 class="fw-bold bg-gradient bg-dark text-light">{{__('messages.Aims of the Course')}}</h3>
                                                <h5>{{$courses->name}}</h5>
                                                <ul class="text-start fw-bold text-start">
                                                    <li class="text-start fw-bold @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding-left: 100px;padding: 20px;">{!! nl2br($courses->aim_course) !!}</li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!-- end course content container -->
                            <!-- start blog social share -->
                            <div class="mu-blog-social pt-2">
                                <ul class="mu-news-social-nav pt-2">
                                    <li>SOCIAL SHARE :</li>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                            <!-- End blog social share -->
                            <!-- start related course item -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-related-item">
                                        <h3>Related Courses</h3>
                                        <div class="mu-related-item-area">
                                            <div id="mu-related-item-slide">
                                                @foreach($letest_courses as $c)
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="mu-latest-course-single" style="width: 450px;height: 450px;background-color: #FFFFFF">
                                                        <figure class="mu-latest-course-img">
                                                            <a href="{{route('front.coursedetails',[$cats->id,$c->id])}}"><img src="{{asset('uploads/courses/'.$c->img)}}" alt="img"></a>
                                                            <figcaption class="mu-latest-course-imgcaption">
                                                                <a href="#">{{$c->name}}</a>
                                                                <span><i class="fa fa-clock-o"></i>{{$c->duration}}</span>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="mu-latest-course-single-content" style="size: ">
                                                            <h4><a href="{{route('front.coursedetails',[$cats->id,$c->id])}}" style="font-size: small">{{$c->name}}</a></h4>
                                                            <div class="mu-latest-course-single-contbottom">
                                                                <button class="btn btn-warning mb-2" ><a href="{{route('front.coursedetails',[$cats->id,$c->id])}}">More Details</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
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
