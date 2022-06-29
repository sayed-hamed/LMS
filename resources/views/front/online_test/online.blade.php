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
                                    <span>(974) 3343 3354</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mu-header-top-right">
                                <nav>
                                    <ul class="mu-top-social-nav">
                                        <li>
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                            ><span class="fa fa-google-plus"></span
                                                ></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-youtube"></span></a>
                                        </li>
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


<section class="test-pad">
    <div class="Test-placement container-fluid rounded">
        <div class="row px-5">
            <div class="col-sm-6">
                <div class="text-test">
                    <img src="{{asset('front/assets/img/logo.png')}}" alt="" class="img-fluid">
                    <h3 class="text-dark fw-bold pt-2">Online Placement Test</h3>
                    <ul>
                        <li>choose the best answer for each question.
                        <li>Stop when questions get too difficult.
                        <li>The test will end automatically after 20 minutes.
                        <li>Please fill this form to be redirected to the exam.
                    </ul>


                </div>
            </div>
            <div class="col-sm-6 pad">
                <form class="rounded msg-form" method="post" action="{{route('front.online_start_test')}}">

                    @csrf
                    <div class="form-group"> <label for="name" class="h6">Your Name</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1">
                                <p class="fa fa-user text-warning"></p>
                            </div> <input placeholder="Full Name" name="name" type="text" class="form-control border-0">
                        </div>
                    </div>
                    <div class="form-group"> <label for="mail" class="h6">Email</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1"> <i class="fa fa-envelope text-warning"></i> </div> <input type="text" name="email" placeholder="info@edu-tec.net" class="form-control border-0">
                        </div>
                    </div>
                    <div class="form-group"> <label for="phone" class="h6">Phone</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1"> <i class="fa fa-phone text-warning"></i> </div> <input type="text" name="phone" placeholder="Your Phone" class="form-control border-0">
                        </div>
                    </div>
                    <div class="form-group"> <label for="phone" class="h6">Second Phone</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1"> <i class="fa fa-phone text-warning"></i> </div> <input type="text" name="s_phone" placeholder="Your second phone (optional)" class="form-control border-0">
                        </div>
                    </div>
                    <div class="form-group"> <label for="text" class="h6">Company/School</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1"> <i class="fa fa-building text-warning"></i> </div> <input type="text" name="company" placeholder="Your Company Or School" class="form-control border-0">
                        </div>
                    </div>


                    <div class="form-group"> <label for="text" class="h6">Position</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1"> <i class="fa fa-briefcase text-warning"></i> </div> <input type="text" name="position" placeholder="Your Position" class="form-control border-0">
                        </div>
                    </div>


                    <div class="form-group d-flex justify-content-end pt-3"> <input type="submit" class="btn btn-warning text-white" value="Start Exam"> </div>
                </form>
            </div>
        </div>
    </div>
</section>



@include('front.inc.footer')








