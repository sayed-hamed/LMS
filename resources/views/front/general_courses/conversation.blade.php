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
                                                <a href="#"><img src="{{asset('front/assets/img/courses/conversation-min.jpg')}}" alt="img"></a>
                                                <figcaption class="mu-latest-course-imgcaption">
                                                    <a href="#">{{__('messages.Conversation Courses')}}</a>
                                                    <span><i class="fa fa-clock-o"></i>15 hours</span>
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
                                                <h2 class="fw-bold"><a href="#">{{__('messages.Conversation Courses')}}</a></h2>

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

                                                        <td>15 hours</td>

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
                                                <P class="fw-bold text-start bg-gradient bg-dark text-light @if (App::getLocale() == 'en')text-start @else text-end @endif"style="padding-left: 100px;padding: 10px;">{{__('messages.Our General English Programme Offers You:')}}</P>

                                                <ul class="text-start fw-bold display: flex;@if (App::getLocale() == 'en')text-start @else text-end @endif " style="padding-left: 100px; padding: 20px;">
                                                    <li>{{__('messages.Spoken English classes gives chance to you to interact with others and use English as your second language as we all are aware that English is the most spoken language around the word.')}}</li>
                                                    <li>{{__('messages.Its English words put together in simple sentence(s) format to make sense in communicating with other person where grammar is informal.')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light" style="padding: 10px;">{{__('messages.Our Spoken English course includes the following:')}}</li><br>
                                                    <li>{{__('messages.• English for everyday situation.')}}</li>
                                                    <li>{{__('messages.• Basic Grammar (Sentences, Parts of Speech, tenses, active and passive voice, direct and indirect Narration).')}}</li>
                                                    <li>{{__('messages.• Communication with people in the class room and in real situation in class excursion project.')}}</li>
                                                    <li>{{__('messages.• Skills to Speak accurately and clearly.')}}</li>
                                                    <li>{{__('messages.• Improving pronunciation and fluency.')}}</li>
                                                    <li>{{__('messages.• Discussion, brainstorming and debates')}}</li>
                                                    <li>{{__('messages.• Group work and tasks')}}</li>
                                                    <li>{{__('messages.• Communication exercises')}}</li>
                                                    <li>{{__('messages.• Vocabulary and written exercises')}}</li>
                                                    <li>{{__('messages.• Role playing')}}</li>
                                                    <li>{{__('messages.• Selected grammar where required')}}</li>
                                                    <li>{{__('messages.• Conversation techniques')}}</li>
                                                    <li>{{__('messages.• Company visit and/or guest speaker')}}</li>
                                                    <li>{{__('messages.• Individual and group presentations')}}</li>
                                                </ul>
                                                <h3 class="fw-bold bg-dark bg-gradient text-light" >{{__('messages.Aims of the Course')}}</h3><br>
                                                <ul class="text-start fw-bold display: flex @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding-left: 100px;padding: 20px;">

                                                    <li class="bg-gradient bg-dark text-light @if (App::getLocale() == 'en')text-start @else text-end @endif" style="padding: 20px;">{{__('messages.OUR COURSE HAS FOLLOWING LEVELS')}}</li><br>
                                                    <li>{{__('messages.By the end of each level Students will be tested through a rubric to keep their speaking record and understand the strength of their spoken English level.')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light" style="padding: 10px;">{{__('messages.- Beginner Level :')}}</li><br>
                                                    <li>{{__('messages.• Make conversations in familiar situations (e.g. café, chatting about family, weekend)')}}</li>
                                                    <li>{{__('messages.• Ask and respond to simple questions with modelling')}}</li>
                                                    <li>{{__('messages.• Describe things')}}</li>
                                                    <li>{{__('messages.• Talk about past and future events')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light" style="padding: 10px;">{{__('messages.- Elementary Level :')}}</li><br>
                                                    <li>{{__('messages.• Greetings and introductions')}}</li>
                                                    <li>{{__('messages.• Make conversations in familiar situations (e.g. café, chatting about family, weekend)')}}</li>
                                                    <li>{{__('messages.• Make conversations in familiar situations (e.g. café, chatting about family, weekend)')}}</li>
                                                    <li>{{__('messages.• Describe things')}}</li>
                                                    <li>{{__('messages.• Talk about past and future events')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light" style="padding: 10px;">{{__('messages.- Pre Intermediate Level :')}}</li><br>
                                                    <li>{{__('messages.• Tell a story')}}</li>
                                                    <li>{{__('messages.• Talk about personal activities and engage in social chit-chat')}}</li>
                                                    <li>{{__('messages.• Describe people and places')}}</li>
                                                    <li>{{__('messages.• Talk about the future and plans')}}</li>
                                                    <li>{{__('messages.• Make choices and explain the reasons for those choices')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light" style="padding: 10px;">{{__('messages.- Intermediate Level :')}}</li><br>
                                                    <li>{{__('messages.• Talk about a variety of familiar topics')}}</li>
                                                    <li>{{__('messages.• Describe people and places in detail')}}</li>
                                                    <li>{{__('messages.• Give advice and make suggestions')}}</li>
                                                    <li>{{__('messages.• Make arrangements over the phone')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light" style="padding: 10px;">{{__('messages.- Upper Intermediate Level :')}}</li><br>
                                                    <li>{{__('messages.• Talk about a wide variety of topics')}}</li>
                                                    <li>{{__('messages.• Present information clearly to others')}}</li>
                                                    <li>{{__('messages.• Describe events and achievements')}}</li>
                                                    <li>{{__('messages.• Explain opinions and decisions')}}</li>
                                                    <li>{{__('messages.• Speak accurately in various contexts')}}</li><br>
                                                    <li class="bg-gradient bg-dark text-light"style="padding: 10px;">{{__('messages.- Advanced Level :')}}</li><br>
                                                    <li>{{__('messages.• Interact with native speakers with little or no problem')}}</li>
                                                    <li>{{__('messages.• Take an active part in discussions on familiar topics')}}</li>
                                                    <li>{{__('messages.• Present information and descriptions on a wide range of topics')}}</li>
                                                    <li>{{__('messages.• Explain a viewpoint on a topical issue giving reasons for that viewpoint')}}</li>
                                                    <li>{{__('messages.• Use stress, rhythm and intonation to convey meaning')}}</li>
                                                    <li>{{__('messages.• Explain the reasons for decisions they have made')}}</li>
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

<!-- Start footer -->
@include('front.inc.footer');
