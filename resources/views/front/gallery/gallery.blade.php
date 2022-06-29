
@include('front.inc.header');
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
<!-- End header  -->

<!-- Start gallery  -->
<section id="mu-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-gallery-area">
                    <!-- start title -->
                    <div class="mu-title">
                        <h2>Some Moments</h2>
                    </div>
                    <!-- end title -->
                    <!-- start gallery content -->
                    <div class="mu-gallery-content">
                        <!-- Start gallery menu -->
                        <!-- End gallery menu -->
                        <div class="mu-gallery-body">
                            <ul id="mixit-container" class="row">
                                <!-- start single gallery image -->
                                @foreach($galleries as $gallery)
                                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                    <div class="mu-single-gallery">
                                        <div class="mu-single-gallery-item">
                                            <div class="mu-single-gallery-img">
                                                <a href="#"><img alt="img" src="{{asset('uploads/gallery/'.$gallery->img)}}"></a>
                                            </div>
                                            <div class="mu-single-gallery-info">
                                                <div class="mu-single-gallery-info-inner">
                                                    <h4>{{$gallery->title}}</h4>
                                                    <p>{{$gallery->spec}}</p>
                                                    <a href="{{asset('uploads/gallery/'.$gallery->img)}}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                    <a href="{{asset('uploads/gallery/'.$gallery->img)}}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                    <!-- start single gallery image -->

                            </ul>
                            <div class="d-flex justify-content-center w-100 mb-5">
                            {!! $galleries->render() !!}
                            </div>
                        </div>
                    </div>
                    <!-- end gallery content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End gallery  -->

@include('front.inc.footer')
