@extends('../main')
@section('content')
        <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="{{asset('img/banner.jpg') }}">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- About -->
        <section class="about section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title"><span>{{ $president->getTranslatedAttribute('title',$locale,'fallbackLocale') }}</span></h2>
                        {!! $president->getTranslatedAttribute('body',$locale,'fallbackLocale') !!}
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="about-img">
                            <div class="img"> <img src="{{ Voyager::image( $president->image ) }}" class="img-fluid" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection