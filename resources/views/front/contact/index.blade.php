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
<!-- Start contact  -->
<section class="contact-address-area">
    <div class="container">
        <div class="sec-title-style1 text-center max-width">
            <div class="title">Don't hesitiate to Contact Us</div>
            <div class="text"><div class="decor-left"><span></span></div><p>Quick Contact</p><div class="decor-right"><span></span></div></div>
            <div class="bottom-text">
                <p>Edu-Tec was established in 2007 to offer vocational training and award recognized qualifications. The company specializes in tailor made courses in English, Management, Skills for Life offered through a forum of workshops and seminars.

                    If you have questions about EduTec training services and offers, please do not hesitate to contact us. We will be happy to assist you in any way we can.</p>
            </div>
        </div>
        <div class="contact-address-box row">
            <!--Start Single Contact Address Box-->
            <div class="col-sm-4 single-contact-address-box text-center">
                <div class="icon-holder">
                            <span class="icon-clock-1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span>
                            </span>
                </div>
                <h3>Working time</h3>
                <h2>
                    {{$settings->work_day}} <br>
                    {{$settings->start_work_hours}} <br>
                    {{$settings->end_work_hours}}</h2>
            </div>
            <!--End Single Contact Address Box-->
            <!--Start Single Contact Address Box-->
            <div class="col-sm-4 single-contact-address-box main-branch">
                <h3>EduTec Language Center</h3>
                <div class="inner">
                    <ul>
                        <li>
                            <div class="title">
                                <h4>Address:</h4>
                            </div>
                            <div class="text">
                                <p>{{$settings->address}}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4>Phone:</h4>
                            </div>
                            <div class="text">
                                <p>{{$settings->phone}}<br>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4>E-Mail:</h4>
                            </div>
                            <div class="text">
                                <p>{{$settings->email}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End Single Contact Address Box-->
            <!--Start Single Contact Address Box-->
            <div class="col-sm-4 single-contact-address-box text-center">
                <div class="icon-holder">
                            <span class="icon-question-2">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </span>
                </div>
                <h3>Post Office Box</h3>
                <h2>17180
                    <br>{{$settings->city}}
                </h2>
            </div>

            <!--End Single Contact Address Box-->
        </div>
    </div>
</section>
<!--End Contact Address Area-->

<!--Start contact form area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="sec-title-style1 float-left">
                                <div class="title">Send Your Message</div>
                                <div class="text"><div class="decor-left"><span></span></div><p>Contact Form</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">

                        @if ($errors->any())
                            <div class="alert alert-danger list-unstyled">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form id="contact-form" name="contact_form" class="default-form" action="{{route('front.massege')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="name" value="" placeholder="Name">
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="phone" value="" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="email" name="email" value="" placeholder="Email" >
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="website" value="" placeholder="Company & School">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <input type="text" name="subject" value="" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Your Message..." ></textarea>
                                    </div>
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit" data-loading-text="Please wait...">Send Message<span class="flaticon-next"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End contact  -->


<!-- Start footer -->
@include('front.inc.footer')
