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
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="{{ asset('img/banner.jpg')}}">
        <!-- Left Panel -->
        <div class="left-panel"></div></section>
        <!-- Post -->
        <section class="pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ Voyager::image( $news->image ) }}" class="mb-30" alt="">
                    
                   <h2 class="section-title2">{{$news->title}}</h2>
                   <h6>{{ date('d-m-y', strtotime($news->date)) }}</h6>
                

                   {!! $news->body !!}
                </div>
            </div>
            
                </div>
            </div>
        </div>
    </section>
@endsection