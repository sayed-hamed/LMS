

<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <img
                                class="pb-2"
                                src="{{asset('front/assets/img/logo.png')}}"
                                width="200px"
                                alt=""
                            />
                            <address>
                                <p>{{__('messages.Address: Salwa Road, HBK Building No. 112, 1st Floor, Office 3')}}</p>
                                <p>Email: info@edu-tec.net</p>
                                <p>{{__('messages.B.O. Box: 17180, Doha, Qatar')}}</p>
                                <p>Phone: +974 44122454</p>

                            </address>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>{{__('messages.Our COURSES')}}</h4>
                            <ul>
                                <li><a href="{{route('general')}}">{{__('messages.General English')}}</a></li>
                                <li><a href="http://127.0.0.1:8000/en/cat/8">{{__('messages.Business English')}}</a></li>
                                <li><a href="{{route('conversation')}}">{{__('messages.Conversation')}}</a></li>
                                <h4>Our Events</h4>
                                <li><a href="{{route('front.fadic')}}">{{__('messages.FIDIC')}}</a></li>
                                <li><a href="{{route('front.pmp')}}">{{__('messages.PMP')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>{{__('messages.Exam Preparation')}}</h4>
                            <ul>
                                <li><a href="http://127.0.0.1:8000/en/cat/11">{{__('messages.TOFEL COURSE')}}</a></li>
                                <li><a href="http://127.0.0.1:8000/en/cat/11">{{__('messages.ILETS Preperation')}}</a></li>
                                <li><a href="http://127.0.0.1:8000/en/cat/11">{{__('messages.ACT INTERNATIONAL')}}</a></li>
                                <li><a href="http://127.0.0.1:8000/en/cat/11">{{__('messages.PTE COURSE')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>{{__('messages.ABOUT EDUTEC')}}</h4>
                            <ul>
                                <li><a href="{{route('front.online_test')}}">{{__('messages.Online Placement Test')}}</a></li>
                                <li><a href="{{route('front.courses')}}">{{__('messages.Enrollment Courses Request')}}</a></li>
                                <li><a href="{{route('front.contact')}}">{{__('messages.Contact Us')}}</a></li>
                                <li><a href="{{route('front.blog')}}">{{__('messages.About Edutec')}}</a></li>
                            </ul>
                        </div>
                    </div>



                </div>

            </div>

        </div>

    </div>
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; {{__('messages.All Right Reserved to Edu-Tec')}} <br>{{__('messages.Developed & Maintaned by')}}  <a style="color:#007333" href="https://www.facebook.com/profile.php?id=100004790595821" rel="nofollow">{{__('messages.Innovation')}}</a></p>        </div>
        </div>
    </div>
    <!-- end footer bottom -->
    <!-- end footer top -->
</footer>
<!-- End footer -->

<!-- jQuery library -->
<script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{asset('front/assets/js/slick.js')}}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{asset('front/assets/js/waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/js/jquery.counterup.js')}}"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="{{asset('front/assets/js/jquery.mixitup.js')}}"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('front/assets/js/jquery.fancybox.pack.js')}}"></script>


<!-- Custom js -->
<script src="{{asset('front/assets/js/custom.js')}}"></script>

</body>
</html>
