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
        <!-- Projects -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2">{{ $project->getTranslatedAttribute('name',$locale,'fallbackLocale') }}</h2> </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    {!! $project->getTranslatedAttribute('body',$locale,'fallbackLocale') !!}
                    </div>
                    <div class="col-md-4">
                    @if($project->projectlogo !='')     <p><img src="{{ Voyager::image($project->projectlogo ) }}" alt="{{$project->name }}" class="img-fluid mx-auto d-block"> </p> @endif
                        <p><b>@lang('main.project-name') : </b> {{ $project->name }}</p>
                        <p><b>@lang('main.city') : </b> {{ $project->city }}</p>
                    @if($project->location !='')   <p><b>@lang('main.location') : </b> <a href="{{ url($project->location) }}" target="_blank">@lang('main.show-on-map')</a></p> @endif
                        <p><b>@lang('main.year') : </b> {{ $project->year }}</p>
                        @if($project->satisdurumu !='')   <p><b>Satış Durumu : </b> {{ $project->satisdurumu }}</p> @endif
                    </div>
                </div>
                <div class="row mt-30">
                @foreach($project->images as $image)  
                @php $arrayOfFiles = json_decode($image->image); @endphp
                @foreach($arrayOfFiles as $img)
                    <div class="col-md-6 gallery-item">
                        <a href="{{ Voyager::image($img) }}" title="Architecture" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ Voyager::image($img) }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @endforeach
                </div>
            </div>
        </section>
        <!-- Prev-Next Projects -->
    
@endsection