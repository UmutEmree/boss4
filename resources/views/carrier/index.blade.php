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
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="{{ asset('img/banner.jpg') }}">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- About -->
        <section class="about section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title"><span>{{ $insan->title }}</span></h2>
                       {!! $insan->body !!}
                    </div>
                    
                    </div>
                </div>
            </div>
        </section>
@endsection