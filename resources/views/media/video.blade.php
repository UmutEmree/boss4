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
                         <h2 class="section-title"><span>@lang('main.advertises')</span></h2>
                    </div>
                </div>
               
                <div class="row">
                    <!-- 2 columns -->
                    @foreach($video as $video)
                    <div class="col-md-6 gallery-item">
                        {!!$video->body !!}
                        <h6>{{$video->name }}</h6>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection