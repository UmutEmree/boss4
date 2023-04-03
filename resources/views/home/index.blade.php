@extends('../main')

@section('content')
<header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            @foreach($sliders as $slider)
            <div class="text-right item bg-img" data-overlay-dark="3" data-background="{{ Voyager::image( $slider->image ) }}">
                <div class="v-middle caption mt-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 offset-md-5">
                                <div class="o-hidden">
                                    <h1> {{ $slider->getTranslatedAttribute('title',$locale,'fallbackLocale') }}</h1>
                                    {!! $slider->getTranslatedAttribute('body',$locale,'fallbackLocale') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
        <!-- Corner -->
        <div class="hero-corner"></div>
        <div class="hero-corner3"></div>
        <!-- Left Panel -->
        <div class="left-panel">
            <ul class="social-left clearfix">
               
                <li><a href="https://www.instagram.com/boss4gayrimenkul/" target="_blank"><i class="ti-instagram"></i></a></li>
                <li><a href="https://twitter.com/Boss4Gyrmenkul" target="_blank"><i class=" ti-twitter-alt"></i></a></li>
                <li><a href="https://www.facebook.com/Boss4Gayrimenkul/" target="_blank"><i class="ti-facebook"></i></a></li>
                <li><a href="https://tr.linkedin.com/company/boss4gayrimenkul" target="_blank"><i class="ti-linkedin"></i></a></li>
            </ul>
        </div>
    </header>
    <!-- Content -->
     <!-- jQuery -->
     <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
       
@endsection