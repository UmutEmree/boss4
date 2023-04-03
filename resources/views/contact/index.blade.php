@extends('../main')
@section('content')
<div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="{{ asset('img/banner.jpg') }}">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- Contact -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title"><span>@lang('main.contact')</span></h2>
                    </div>
                </div>
                <div class="row mb-90">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>@lang('main.office-phone') :</b><a href="tel:4442592"> 444 25 92</a></p>
                        <p><b>@lang('main.head-phone') :</b> <a href="tel:0212 400 16 16">0212 400 16 16</a></p>
                        <p><b>Email :</b> <a href="mailto:info@boss4.com.tr">info@boss4.com.tr</a></p>
                        <p><b>@lang('main.address') :</b> Ataköy 7-8-9-10. Kısım Mah. Çobançeşme E5 Yan Yol Cad.
Ataköy Towers 20/1 A Blok. Kat:12 Ofis No: 155-158-159-160-161
Bakırköy/İstanbul Türkiye</p>
                    </div>
                    
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <p><b>@lang('main.contact-form')</b></p>
                        <form method="post" action="{{ route('iletisim') }}" class="row">
                               <input type="hidden" name="utm_medium" value="Site İletişim Formu">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" placeholder="@lang('main.name')" required>
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" placeholder="E-Mail" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="phone" id="phone" placeholder="@lang('main.phone')" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="mesaj" id="message" cols="40" rows="4" placeholder="@lang('main.message')"></textarea>
                            </div>
                             
                            <div class="input-group animated fadeInLeft">
                        <div class="col-md-12">
                            <input type="checkbox" checked="" name="Kvkk" required="required" id="kvkk" required="Sizinle iletişime geçebilmemiz için aydınlanma metnini okuyup, ilgili alanı işaretlemeniz gerekmektedir.">
                            <span></span>
                            <label for="kvkk">
                                <a href="{{route('aydinlatma')}}" target="_blank">KVK & Aydınlatma metnini</a> okudum.
                            </label>
                        </div>
                        <div class="col-md-12">
                            <input type="checkbox" checked="" name="ElectronicMessagePermissionHeaderForm"  id="ElectronicMessagePermissionHeaderForm" required="Sizinle iletişime geçebilmemiz için aydınlanma metnini okuyup, ilgili alanı işaretlemeniz gerekmektedir.">
                            <span></span>
                            <label for="ElectronicMessagePermissionHeaderForm">
                               <a data-toggle="modal" data-target="#kayit" href="#"> Kampanyalardan haberdar olmak için elektronik ileti almak istiyorum.</a>
                            </label>
                        </div>
                    </div>
                   
                            <div class="col-md-12">
                                <button class="butn-dark mt-15"><span>@lang('main.send')</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map Section-->
                <div class="row">
                    <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.528621255914!2d28.829331115596307!3d40.99180162930247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa3672c8c4aeb%3A0xa4cf51dced9f3230!2sAtak%C3%B6y%20Towers!5e0!3m2!1str!2str!4v1615302449150!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="kayit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Web Sitesi’ne kayıt işlemlerim sırasında verdiğim kişisel verilerimin BOSS4 GAYRIMENKUL tarafından Kişisel Verilerin Korunması Kanunu kapsamında ve işbu Web Sitesi’nde yayınlanan Aydınlatma Metni’nde belirtilen amaçlarla sınırlı olarak işlenmesine, muhafaza edilmesine ve ürün ve faaliyetlerini yürütebilmek için işbirliği içerisinde olduğu üçüncü kişiler ile paylaşmasına açık rızam ile onay veriyorum.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
        <!-- Promo video - Testiominals -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2q1gFSd75jKUnTDPq0nZWaMlEu6vL30"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    
@endsection