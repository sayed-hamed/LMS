@include('front.inc.header')

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
<!-- End header  -->

<div class="how-section1">
    <div class="row">
        <div class="col-md-6">
            <h4>Global Studies</h4>
            <h4 class="subheading">
                Global Studies programs encourage the customers to achieve their
                promising professional future. Global Studies Training and Education
                programs are offered at GS Training, GS ELearning and GS Education.

                <br /><br /><a href="https://www.GStudies.org">GStudies</a>
            </h4>
        </div>
        <div class="col-md-6 how-img">
            <img
                src="{{asset('front/assets/img/GStudies.jpg')}}"
                class="rounded img-fluid"
                alt=""
            />
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 how-img">
            <img src="{{asset('front/assets/img/ibc.jpg')}}" class="rounded img-fluid" alt="" />
        </div>
        <div class="col-md-6">
            <h4>IBC</h4>
            <h4 class="subheading">
                International Board for Coaches, working tirelessly and
                professionally to train the trainers and are making them competitive
                for facing this overly advancing world.

                <br /><br /><a href="https://www.ibcoaches.com">IBC</a>
            </h4>
        </div>
    </div>

    <div class="row  py-5">
        <div class="col-md-6">
            <h4>LONDON ACADEMY OF MANAGEMENT</h4>
            <h4 class="subheading text-start">
                Has been established with the participation of the best experts and
                academics who are promoters of knowledge and education in order for
                the academy to be a window for teaching professional and academic
                education programs inside and outside the United Kingdom.
                <br /><br /><a href="https://lec.qa/"
                >Londen Academy Of Management</a
                >
            </h4>
        </div>
        <img class="image-box bi-card-image note-icon-magic float-end w-50 h-25 " src="{{asset('front/assets/img/London-Education-Centre.png')}}">

    </div>

    <div class="row">
        <div class="col-md-6 how-img">
            <img
                src="{{asset('front/assets/img/Benglish.jpg')}}"
                class="rounded img-fluid"
                alt=""
            />
        </div>
        <div class="col-md-6">
            <h4>Benglish</h4>
            <h4 class="subheading">
                Benglish is an organization which offers many online courses for
                those people who want to learn English to use in professional as
                well as in personal life. The Benglish has built the trust across
                the world with its high quality English learning courses. An
                American university in United States is running this organization.
                The main objective of the Benglish organization is to provide the
                high quality learning to its students. This leaning will help the
                students in availing employment and many other job opportunities.
                <br /><br /><a href="https://www.askpc-qa.com">Benglish</a>
            </h4>
            <p class="text-muted"></p>
        </div>
    </div>
</div>

@include('front.inc.footer')
