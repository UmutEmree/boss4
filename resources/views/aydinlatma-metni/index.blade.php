@extends('../main')

@section('content')

            <div class="content">

                <div class="content-entry-image"></div>

                <div class="page-inner">

                    <section class="section about-info">

                        <div class="container">

                            <div class="row">

                                

                                <div class="col-md-12">

                                    <div class="text-display-1">

                                    {!! $aydinlatma->getTranslatedAttribute('body', $locale,'fallbackLocale') !!}

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                 

                  

                </div>

            </div>



      

@endsection