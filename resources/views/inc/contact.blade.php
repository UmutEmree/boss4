<section class="section-message section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-info">
                                        <div class="title-hr"></div>
                                        <div class="info-title">@lang('main.contact-form')</div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                <form method="post"  enctype="multipart/form-data" action="{{ route('iletisim') }}">

                                {{ csrf_field () }}
                                        <input type="hidden" name="utm_medium" value="Site İletişim Formu">
                                        <div class="row">
                                            <div class="form-group col-sm-6 col-lg-4">
                                                <input class="input-gray" type="text" name="name" required
                                                    placeholder="@lang('main.name')*">
                                            </div>
                                            <div class="form-group col-sm-6 col-lg-4">
                                                <input class="input-gray" type="email" name="email" placeholder="E-Mail">
                                            </div>
                                            <div class="form-group col-sm-12 col-lg-4">
                                                <input class="input-gray" type="text" name="phone"
                                                    placeholder="@lang('main.phone')">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <textarea class="input-gray" name="mesaj" required
                                                    placeholder="@lang('main.message')*"></textarea>
                                            </div>
                                            <div class="col-sm-12"><button type="submit"
                                                    class="btn-upper btn-yellow btn">@lang('main.send')</button></div>
                                        </div>
                                        <div class="success-message"><i class="fa fa-check text-primary"></i> @lang('main.success') </div>
                                        <div class="error-message">We're sorry, but something went wrong</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>