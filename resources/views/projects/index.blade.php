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
        <section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="{{asset('img/banner.jpg') }}" data-overlay-light="3">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- Projects -->
        <section class="projects section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp"> 
                        <h2 class="section-title"><span>{{ $category->getTranslatedAttribute('name',$locale,'fallbackLocale') }}</span></h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($projects as $project)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                                <div class="position-re o-hidden"> <img src="{{ Voyager::image( $project->image ) }}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="{{ url('proje/'.$project->slug) }}" style="background: #b69658c7;width: 200px;height: 35px;;color:#fff;padding-top:1px">{{ $project->getTranslatedAttribute('city',$locale,'fallbackLocale') }}</a></h6>
                                    <h5><a href="{{ url('proje/'.$project->slug) }}">{{ $project->getTranslatedAttribute('name',$locale,'fallbackLocale') }}</a></h5>
                                    <div class="line"></div> <a href="{{ url('proje/'.$project->slug) }}"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- Promo video - Testiominals -->
        
@endsection