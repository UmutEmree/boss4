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
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/banner.jpg">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- Blog  -->
        <section class="bauen-blog section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"><span>@lang('main.news')</span></h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($news as $news)
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ Voyager::image( $news->image ) }}" alt=""> </div>
                            <div class="con"> 
                                <span class="category">
                                {{ date('d-m-y', strtotime($news->date)) }}
                                </span>
                                <h5><a href="{{ url('haberler/'.$news->slug) }}">{{ $news->getTranslatedAttribute('title',$locale,'fallbackLocale') }}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
@endsection