<footer class="main-footer dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont">
                            
                          <p><a href="{{ route('home') }}">@lang('main.home')</a></p>
                          <p><a href="{{ route('about') }}">@lang('main.about')</a></p>
                          <p><a href="{{ route('baskanin-mesaji') }}">@lang('main.president-message')</a></p>
                          <p><a href="{{ route('yonetim-kurulu') }}">@lang('main.management')</a></p>
                          <p><a href="{{ url('kvkk.pdf') }}" target="_blank">KVKK</a></p>
                          <p><a href="{{ route('aydinlatma') }}" target="_blank">@lang('main.aydinlatma')</a></p>
                          <p><a href="{{ url('projeler/devam-eden-projeler') }}">@lang('main.continues-projects')</a></p>
                          <p><a href="{{ url('projeler/tamamlanan-projeler') }}">@lang('main.completed-projects')</a></p>
                          <p><a href="{{ url('projeler/gelecek-projeler') }}">@lang('main.future-projects')</a></p>

                          
                        </div>
                    </div>
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont">
                          <p><a href="{{ route('press') }}">@lang('main.press')</a></p>
                          <p><a href="{{ route('news') }}">@lang('main.news')</a></p>
                          <p><a href="{{ route('video') }}">@lang('main.advertises')</a></p>
                          <p><a href="{{ url('insan-kaynaklari-politikamiz') }}">@lang('main.ik-politika')</a></p>
                          <p><a href="https://www.kariyer.net/firma-profil/boss4-gayrimenkul-ins-san-ve-dis-tic-a-s-5208-30091" target="_blank">@lang('main.application')</a></p>
                          <p><a href="{{ route('contact') }}">@lang('main.contact')</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont">
                            <div class="fothead">
                                <h6>@lang('main.address')</h6>
                            </div>
                            <p>Ataköy 7-8-9-10. Kısım Mah. Çobançeşme E5 Yan Yol Cad.</p>
                            <p>Ataköy Towers 20/1 A Blok. Kat:12 Ofis No: 155-158-159-160-161</p>
                            <p>Bakırköy/İstanbul Türkiye</p>
                              <p><a href="mailto:info@boss4.com.tr">info@boss4.com.tr</a></p>
                             <h5><a href="tel:4442592">444 25 92</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-left">
                                <p>@lang('main.copyright')</p>
                            </div>
                        </div>
                        <div class="col-md-4 abot">
                            <div class="social-icon"> <a href="https://www.facebook.com/Boss4Gayrimenkul/" target="_blank"><i class="ti-facebook"></i></a> <a href="https://twitter.com/Boss4Gyrmenkul" target="_blank"><i class="ti-twitter"></i></a> <a href="https://www.instagram.com/boss4gayrimenkul/" target="_blank"><i class="ti-instagram"></i></a> <a href="https://www.linkedin.com/company/boss4gayrimenkul/" target="_blank"><i class="ti-linkedin"></i></a></div>
                        </div>
                        <div class="col-md-4">
                            <p class="right"><a href="{{ url('gizlilik-politikasi') }}">@lang('main.gizlilik')</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/pace.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/YouTubePopUp.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>