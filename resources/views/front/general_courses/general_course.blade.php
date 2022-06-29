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

<!-- End search box -->
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
                                                <a href="#"><img src="{{asset('front/assets/img/courses/beg-eng-A-min.jpg')}}" alt="img"></a>
                                                <figcaption class="mu-latest-course-imgcaption">
                                                    <a href="#">{{__('messages.General English Courses')}}</a>
                                                    <span><i class="fa fa-clock-o"></i>18 hours</span>
                                                </figcaption>
                                            </figure>
                                            <div class="justify-content-between">
                                                <p>{{__('messages.Course Rating')}} <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span></p>

                                                <div>
                                                    <button class="btn btn-warning fw-bold">{{__('messages.Free English Placement Test')}}</button>
                                                    <button class="btn btn-warning fw-bold"><a href="{{route('front.contact')}}">{{__('messages.Take this Course')}}</a></button>
                                                </div>

                                            </div>
                                            <div class="mu-latest-course-single-content pt-3">
                                                <h2 class="fw-bold"><a href="#">{{__('messages.General English Courses')}}</a></h2>

                                                <h4 class="fw-bold">{{__('messages.Course Information')}}</h4>
                                                <table style="width: 100%;" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"  >
                                                    <tbody>

                                                    <tr>
                                                        <th colspan="2" scope="rowgroup">{{__('messages.This Is Our Course Information')}}</th>
                                                    </tr>

                                                    <tr>

                                                        <td>{{__('messages.Course Type')}}</td>

                                                        <td>{{__('messages.Online')}}</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Place')}}</td>

                                                        <td>{{__('messages.QATAR_Doha')}}</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Language level')}}</td>

                                                        <td>{{__('messages.Complete Beginner ( A1 ) To Upper-Intermediate+ ( C1 )')}}</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Course Duration')}}</td>

                                                        <td>18 hours</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Language')}}</td>

                                                        <td>{{__('messages.English')}}</td>

                                                    </tr>
                                                    <tr>

                                                        <td>{{__('messages.Provider')}}</td>

                                                        <td>{{__('messages.EduTec')}}</td>

                                                    </tr>
                                                    </tbody>

                                                </table>
                                                <h4 class="fw-bold bg-dark bg-gradient text-light">{{__('messages.Description')}}</h4><br>
                                                <P class="fw-bold text-start bg-gradient bg-dark text-light @if (App::getLocale() == 'en')text-start @else text-end @endif"style="padding-left: 100px; padding: 10px;">{{__('messages.Our General English Programme Offers You:')}}</P>

                                                <ul class="text-start fw-bold display: flex;  @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding-left: 40px; padding-right: 30px;">
                                                    <li>{{__('messages.A balanced syllabus with writing, reading, listening and communication,')}}</li>
                                                    <li>{{__('messages.using modern course books and a wide range of our resources.')}}</li>
                                                    <li>{{__('messages.You will be expected to participate in pair work,')}}</li>
                                                    <li>{{__('messages.group work and be as active as possible in the classroom.')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding: 10px">{{__('messages.Our Classes Are Usually Small:')}}</li><br>
                                                    <li>{{__('messages.Which means that your teacher can give you the personal attention you need.')}}</li>
                                                    <li>{{__('messages.Participants are given plenty of opportunities to practice the spoken English language through discussions, debates and')}}</li>
                                                    <li>{{__('messages.conversation activities, such as role-play and pair-work')}}</li>
                                                    <li>{{__('messages.• 12 lessons per sub-level')}}</li>
                                                    <li>{{__('messages.• All trainers are fully qualified native speakers of English')}}</li>
                                                    <li>{{__('messages.• All prices include tuition fees, course book, administration fees and certificates.')}}</li>
                                                    <li>{{__('messages.• Placement test before the training begins for FREE')}}</li>
                                                    <li>{{__('messages.• Learners are able to follow comprehensive track through the materials respecting the modern need for flexibility')}}</li>
                                                    <li>{{__('messages.  ,  and more directly relevant to adult professionals.')}}</li>
                                                    <li>{{__('messages.• Customized Learning Program')}}</li>
                                                    <li>{{__('messages.• Optional: Experienced and certified bilingual teachers for Complete Beginners learners')}}</li>
                                                    <li>{{__('messages.• Wide range of learning material and support')}}</li>
                                                    <li>{{__('messages.• EduTec had successfully delivered the below courses to many professional and government sectors in Qatar.')}}</li>
                                                </ul>
                                                <h3 class="fw-bold bg-dark bg-gradient text-light " >{{__('messages.Aims of the Course')}}</h3><br>
                                                <ul class="text-start fw-bold display: flex @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding-left: 100px; padding:20px;">

                                                    <li class="bg-gradient bg-dark text-light @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding: 10px;">{{__('messages.You will be able to take your Certification :')}}</li><br>
                                                    <li>{{__('messages.In order to receive a certificate of attendance/achievement at the end of each course, the trainee must attend at least 75')}}</li>
                                                    <li>{{__('messages.percent of all the classes and participate in any final tests or project work if applicable.,')}}</li>
                                                    <li>{{__('messages.The awarding of a certificate does not depend on grades, but on participation. Basically, if a trainee maintains a 75')}}</li>
                                                    <li>{{__('messages.percent attendance or better and participates in any required task, a certificate will be rewarded without question. Not')}}</li>
                                                    <li>{{__('messages.only will each trainee be eligible for a certificate, we also provide a detailed performance report at the end of the course for each and every trainee.')}}</li>
                                                </ul>
                                                <!-- <p>All of the skills will be mastered in a multinational environment helping trainees to develop cross-cultural awareness at the same time.</p> -->
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

<!-- Start footer -->
@include('front.inc.footer')
