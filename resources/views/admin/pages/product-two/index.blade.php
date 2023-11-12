@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row gx-0">
            <div class="col-lg-3">
                <div class="card p-0 rounded-0">
                    <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6 card-body p-0">
                        <li class="nav-item me-0">
                            <a class="nav-link active rounded-0" data-bs-toggle="tab" href="#basic_information">Basic
                                Informtaion</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="nav-link rounded-0" data-bs-toggle="tab" href="#offer_price">Offer & price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" data-bs-toggle="tab" href="#attachment">Attachment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" data-bs-toggle="tab" href="#source_details">Source Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card rounded-0">
                    <div class="tab-content card-body" id="myTabContent">
                        <div class="tab-pane fade show active" id="basic_information" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                   asda Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                    minim occaecat veniam.
                                    Fugiat asveniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                                    Velit non irure adipisicing aliqua
                                    ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
                                    Amet duis do nisi duis veniam non est eiusmod
                                    tempor incididunt tempor dolor ipsum in qui sit.
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-light-info next-btns" data-next="#offer_price">Next</button>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="offer_price" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                   gsaa Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                    minim occaecat veniam.
                                    Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                                    Velit non irure adipisicing aliqua
                                    ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
                                    Amet duis do nisi duis veniam non est eiusmod
                                    tempor incididunt tempor dolor ipsum in qui sit.
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-light-info next-btns" data-next="#attachment">Next</button>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="attachment" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                   qwe Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                    minim occaecat veniam.
                                    Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                                    Velit non irure adipisicing aliqua
                                    ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
                                    Amet duis do nisi duis veniam non est eiusmod
                                    tempor incididunt tempor dolor ipsum in qui sit.
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-light-info next-btns" data-next="#source_details">Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="source_details" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                   tewt Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                    minim occaecat veniam.
                                    Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                                    Velit non irure adipisicing aliqua
                                    ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
                                    Amet duis do nisi duis veniam non est eiusmod
                                    tempor incididunt tempor dolor ipsum in qui sit.
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-light-info next-btns">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $('.nav-tabs a').click(function () {
            $(this).tab('show');
        });
    });
</script>
@endpush
