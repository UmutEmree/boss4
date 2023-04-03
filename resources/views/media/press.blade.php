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
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="{{asset('img/banner.jpg') }}">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!--  Gallery -->
        <section class="section-padding2">
            <div class="container">
            <div class="row">
                    <div class="col-md-12">
                         <h2 class="section-title"><span>@lang('main.press')</span></h2>
                    </div>
                </div>
               
               
                <div class="row">
                    <!-- 2 columns -->
                    @foreach($video as $video)
                    <div class="col-md-6 gallery-item">
                        {!!$video->body !!}
                        <h6 style="text-align:center">{{$video->name }}</h6>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-padding2">
            <div class="container">
                
                <div class="row">
                    <!-- 2 columns -->
                    @foreach($press as $press)
                    <div class="col-md-4 gallery-item">
                        <a href="{{ Voyager::image( $press->image ) }}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ Voyager::image( $press->image ) }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                <div class="team">
                                <div class="info">
                                <h6>{{$press->mecra}}</h6>
                                <p>{{ date('d-m-y', strtotime($press->date)) }}</p>
                            </div>
                            </div>
                             
                               
                           
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-padding2">
            <div class="container">
            <div class="row">
                    <div class="col-md-12">
                         <h2 class="section-title"><span>@lang('main.press')</span></h2>
                    </div>
                </div>
               
                
                <div class="row">
                    <!-- 2 columns -->
                    @foreach($links as $link2)
                    <div class="col-md-12 gallery-item">
                        <h5>{{ date('d-m-y', strtotime($link2->date)) }} - <a href="{!!$link2->adres!!}" target="_blank"> {{$link2->title }}</a></h5>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection