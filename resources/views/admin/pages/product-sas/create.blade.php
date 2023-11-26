@extends('admin.master')
@section('content')
    <div class="post d-flex flex-column-fluid mb-3" id="kt_post">
        <div id="kt_content_container" class="container-fluid mb-3">
            <div class="card">
                <div class="main_bg card-header py-2 main_bg align-items-center">
                    <div class="col-lg-5 col-sm-12">
                        <div>
                            <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                href="{{ URL::previous() }}">
                                <i class="fa-solid fa-arrow-left text-white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 d-flex justify-content-end">
                        <h4 class="text-white p-0 m-0 fw-bold">PRODUCT SAS EDIT</h4>
                    </div>
                </div>
                <div class="card-body p-0 pt-1">
                    <div class="row gx-0">
                        <div class="col-lg-2">
                            <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6"
                                role="tablist">
                                <li class="nav-item w-md-290px my-1 mt-0" role="presentation">
                                    <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_1" aria-selected="true" role="tab">General Info</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_2" aria-selected="false" role="tab">Row One</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_3" aria-selected="false" role="tab" tabindex="-1">Row
                                        Two</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_4" aria-selected="false" role="tab" tabindex="-1">Row
                                        Three</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_5" aria-selected="false" role="tab" tabindex="-1">Card
                                        Row</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_6" aria-selected="false" role="tab" tabindex="-1">Row
                                        Four</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_7" aria-selected="false" role="tab" tabindex="-1">Row
                                        Five</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_8" aria-selected="false" role="tab" tabindex="-1">Row
                                        Six</a>
                                </li>
                                <li class="nav-item w-md-290px my-1 mb-0 me-2" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_9" aria-selected="false" role="tab" tabindex="-1">Map Row
                                        Six</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-10 px-4 p-2">
                            <form id="productForm" method="post" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-5 pb-lg-5">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    General Info
                                                </h2>
                                                <p class="text-center p-0 m-0"><small
                                                        class="ms-4 text-danger fw-normal fs-sm-9">All The Red Star Mark
                                                        Field Is Required.</small></p>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Select Brand</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="field2" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="3"
                                                                 data-placeholder="Select A Option"
                                                                onchange="console.log(this.selectedOptions)">
                                                                <option>Abarth</option>
                                                                <option>Alfa Romeo</option>
                                                                <option>Aston Martin</option>
                                                                <option>Audi</option>
                                                                <option>Bentley</option>
                                                                <option>BMW</option>
                                                                <option>Bugatti</option>
                                                                <option>Cadillac</option>
                                                                <option>Chevrolet</option>
                                                                <option>Chrysler</option>
                                                                <option>Citroën</option>
                                                                <option>Dacia</option>
                                                                <option>Daewoo</option>
                                                                <option>Daihatsu</option>
                                                                <option>Dodge</option>
                                                                <option>Donkervoort</option>
                                                                <option>DS</option>
                                                            </select>
                                                            {{-- <input class="form-control form-control-solid" id="kt_tagify_2"/> --}}
                                                            <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Select Brand</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="field2" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="3"
                                                                 data-placeholder="Select A Option"
                                                                onchange="console.log(this.selectedOptions)">
                                                                <option>Abarth</option>
                                                                <option>Alfa Romeo</option>
                                                                <option>Aston Martin</option>
                                                                <option>Audi</option>
                                                                <option>Bentley</option>
                                                                <option>BMW</option>
                                                                <option>Bugatti</option>
                                                                <option>Cadillac</option>
                                                                <option>Chevrolet</option>
                                                                <option>Chrysler</option>
                                                                <option>Citroën</option>
                                                                <option>Dacia</option>
                                                                <option>Daewoo</option>
                                                                <option>Daihatsu</option>
                                                                <option>Dodge</option>
                                                                <option>Donkervoort</option>
                                                                <option>DS</option>
                                                            </select>
                                                            {{-- <input class="form-control form-control-solid" id="kt_tagify_2"/> --}}
                                                            <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Select Brand</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="brand_id" data-control="select2"
                                                                data-hide-search="false"
                                                                data-placeholder="Select an Product Type"
                                                                data-allow-clear="true" required>
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                            {{-- <input class="form-control form-control-solid" id="kt_tagify_2"/> --}}
                                                            <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Brand Logo</label>
                                                            <input name="brand_logo"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Brand Logo" type="file" required />
                                                            <div class="invalid-feedback"> Please Enter Brand Logo.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Banner Image</label>
                                                            <input name="banner_image"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Image" type="file"
                                                                required />
                                                            <div class="invalid-feedback"> Please Enter Banner Image.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Banner Header</label>
                                                            <textarea rows="1" name="source_contact" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Header" required></textarea>
                                                            <div class="invalid-feedback"> Please Enter Banner Header.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_2"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row One
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Row One Title</label>
                                                            <input name="row_six_title"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Row One Title" type="text"
                                                                required />
                                                            <div class="invalid-feedback"> Please Enter Row One Title.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Row One Header</label>
                                                            <textarea rows="1" name="row_six_header" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Row One Header" required></textarea>
                                                            <div class="invalid-feedback"> Please Enter Row One Header.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_1" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_3"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Two
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_2" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_4"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Three
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                            
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_3" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_5"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Card Row
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 11%">Card One</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name" required>
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                         </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short
                                                                            Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 11%">Card Two</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name" required>
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                <h1>Enter Your Text Here</h1>
                                                                </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short
                                                                            Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 12%">Card Three</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name" required>
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                        </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short
                                                                            Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_4" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_6"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Four
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="validationCustom01"
                                                            class="form-label required mb-0">Row Four Background Img
                                                        </label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_six_image" id="validationCustom01"
                                                            placeholder="Enter Row Four Background Img" required>
                                                        <div class="invalid-feedback"> Please Enter Row Four Background Img
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_5" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_7"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Five
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                            
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_6" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_8"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_8" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Six
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                            
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_7" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_9"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Map Row Six
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                asdasdasdas
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_8" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <button class="btn btn-lg btn-info rounded-0" type="submit">
                                                            Submit
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
