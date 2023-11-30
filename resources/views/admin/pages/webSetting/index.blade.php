@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5 rounded-0">
                    <div class="card-header card-header-stretch">
                        <h2 class="card-title">Web Site Appearance</h2>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#seo">SEO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#smtp">SMTP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#site">SITE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="seo" role="tabpanel">
                                @include('admin.pages.webSetting.partials.seo')
                            </div>
                            <div class="tab-pane fade" id="smtp" role="tabpanel">
                                
                                @include('admin.pages.webSetting.partials.smtp')
                            </div>
                            <div class="tab-pane fade" id="site" role="tabpanel">
                                @include('admin.pages.webSetting.partials.site')
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
