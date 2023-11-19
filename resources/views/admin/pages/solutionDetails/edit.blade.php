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
                        <h4 class="text-white p-0 m-0 fw-bold">Brand Page Edit</h4>
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
                                        href="#kt_vtab_pane_3" aria-selected="false" role="tab"
                                        tabindex="-1">Row Two</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_4" aria-selected="false" role="tab" tabindex="-1">Row Three</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_5" aria-selected="false" role="tab" tabindex="-1">Card Row</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_6" aria-selected="false" role="tab" tabindex="-1">Row Four</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_7" aria-selected="false" role="tab" tabindex="-1">Row Five</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_8" aria-selected="false" role="tab" tabindex="-1">Row Six</a>
                                </li>
                                <li class="nav-item w-md-290px my-1 mb-0 me-2" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_9" aria-selected="false" role="tab" tabindex="-1">Map Row Six</a>
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
                                                                placeholder="Enter Banner Image" type="file" required />
                                                            <div class="invalid-feedback"> Please Enter Banner Image.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Banner Header</label>
                                                            <textarea rows="1" name="source_contact" class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Banner Header" required></textarea>
                                                            <div class="invalid-feedback"> Please Enter Banner Header.</div>
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
                                                                placeholder="Enter Row One Title" type="text" required />
                                                            <div class="invalid-feedback"> Please Enter Row One Title.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Row One Header</label>
                                                            <textarea rows="1" name="row_six_header" class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Row One Header" required></textarea>
                                                            <div class="invalid-feedback"> Please Enter Row One Header.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#kt_vtab_pane_1" aria-selected="false" role="tab" tabindex="-1">
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
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01" placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01" placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01" placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01" placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 10%">Row Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01" class="form-label required ">Description
                                                                        </label>
                                                                        <textarea  name="description" class="tox-target kt_docs_tinymce_plugins">
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
                                                        data-bs-target="#kt_vtab_pane_2" aria-selected="false" role="tab" tabindex="-1">
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
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01" placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01" placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01" placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01" placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 10%">Row Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01" class="form-label required ">Description
                                                                        </label>
                                                                        <textarea  name="description" class="tox-target kt_docs_tinymce_plugins">
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
                                                        data-bs-target="#kt_vtab_pane_3" aria-selected="false" role="tab" tabindex="-1">
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
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 11%">Card One</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01" placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01" placeholder="Enter Button Name"
                                                                            required>
                                                                        <div class="invalid-feedback"> Please Enter Button Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Short Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                         </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 11%">Card Two</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                            <div class="col-md-6 mb-2">
                                                                <label for="validationCustom01" class="form-label required mb-0">Title
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                <div class="invalid-feedback"> Please Enter Title </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label for="validationCustom01" class="form-label required mb-0">Image
                                                                </label>
                                                                <input type="file" class="form-control form-control-solid form-control-sm"
                                                                    name="image" id="validationCustom01" placeholder="Enter Image" required>
                                                                <div class="invalid-feedback"> Please Enter Image </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label for="validationCustom01" class="form-label required mb-0">Button Name
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="button_name" id="validationCustom01" placeholder="Enter Button Name"
                                                                    required>
                                                                <div class="invalid-feedback"> Please Enter Button Name </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label for="validationCustom01" class="form-label required mb-0">Link
                                                                </label>
                                                                <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Link" required></textarea>
                                                                <div class="invalid-feedback"> Please Enter Link </div>
                                                            </div>
                                                            <div class="col-md-12 mb-2">
                                                                <label for="validationCustom01" class="form-label required mb-0">Short Des</label>
                                                                <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                <h1>Enter Your Text Here</h1>
                                                                </textarea>
                                                                <div class="invalid-feedback"> Please Enter Short Des </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 12%">Card Three</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01" placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01" placeholder="Enter Button Name"
                                                                            required>
                                                                        <div class="invalid-feedback"> Please Enter Button Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Short Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                        </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#kt_vtab_pane_4" aria-selected="false" role="tab" tabindex="-1">
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
                                                        <label for="validationCustom01" class="form-label required mb-0">Row Four Background Img
                                                        </label>
                                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                                            name="row_six_image" id="validationCustom01" placeholder="Enter Row Four Background Img"
                                                            required>
                                                        <div class="invalid-feedback"> Please Enter Row Four Background Img </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#kt_vtab_pane_5" aria-selected="false" role="tab" tabindex="-1">
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
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01" placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01" placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01" placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01" placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 10%">Row Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01" class="form-label required ">Description
                                                                        </label>
                                                                        <textarea  name="description" class="tox-target kt_docs_tinymce_plugins">
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
                                                        data-bs-target="#kt_vtab_pane_6" aria-selected="false" role="tab" tabindex="-1">
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
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01" placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01" placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01" placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01" class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01" placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 10%">Row Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01" class="form-label required ">Description
                                                                        </label>
                                                                        <textarea  name="description" class="tox-target kt_docs_tinymce_plugins">
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
                                                        data-bs-target="#kt_vtab_pane_7" aria-selected="false" role="tab" tabindex="-1">
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
                                                        data-bs-target="#kt_vtab_pane_8" aria-selected="false" role="tab" tabindex="-1">
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.nav-tabs a').click(function() {
                $(this).tab('show');
            });
        });
    </script>
    <script>
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_clickable");


        // Initialize Stepper
        var stepper = new KTStepper(element);


        // Handle navigation click
        stepper.on("kt.stepper.click", function(stepper) {
            stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        });


        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });


        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
    </script>
    <script>
        //---------Sidebar list Show Hide----------
        $(document).ready(function() {


            $('#dealId').click(function() {
                $("#dealExpand").toggle(this.checked);
            });


            $('#rfqId').click(function() {


                $("#rfqExpand").toggle('slow');


            });

        });
    </script>
    <script>
        $('.stock_select').on('change', function() {


            var stock_value = $(this).find(":selected").val();


            if (stock_value == 'available') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else if (stock_value == 'limited') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else {
                $(".qty_display").addClass("d-none");
                $(".qty_required").prop('required', false);
            }


        });


        $('.price_select').on('change', function() {


            var price_value = $(this).find(":selected").val();
            if (price_value == 'rfq') {
                // alert(price_value);
                $(".rfq_price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else if (price_value == 'offer_price') {
                $(".offer_price").removeClass("d-none");
                $(".rfq_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else {
                $(".price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".rfq_price").addClass("d-none");
            }


        });
    </script>
    <script>
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
    </script>
    <script>
        // The DOM elements you wish to replace with Tagify
        var input1 = document.querySelector("#kt_tagify_1");
        var input2 = document.querySelector("#kt_tagify_2");

        // Initialize Tagify components on the above inputs
        new Tagify(input1);
        new Tagify(input2);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the checkbox and colors input container
            var checkbox = document.getElementById('dealCheckbox');
            var dealsInputContainer = document.getElementById('dealsInputContainer');

            // Add change event listener to the checkbox
            checkbox.addEventListener('change', function() {
                // Toggle the visibility of the colors input field based on checkbox state
                dealsInputContainer.style.display = checkbox.checked ? 'block' : 'none';
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Function to validate and switch tabs
            function validateAndSwitchTab(targetTabId) {
                let isValid = true;


                // Get the index of the tab to be shown
                const activeTabHref = $('.tab-trigger.active').attr('href');
                $(activeTabHref).find('input, textarea, select').each(function() {
                    var $field = $(this);


                    // Check if it's a Select2 element
                    var isSelect2 = $field.hasClass('select2-hidden-accessible');


                    if ($field.prop('required') && $field.val() === '') {
                        isValid = false;


                        if (isSelect2) {
                            // Apply CSS based on the element type
                            $field.next('.select2-container').addClass('is-invalid');
                        } else {
                            $field.addClass('is-invalid');
                        }
                    }
                });


                if (!isValid) {
                    // Fields are not valid, prevent the tab switch
                    return false;
                } else {
                    // Fields are valid, switch to the next tab
                    switchTab(targetTabId);
                    return true;
                }
            }


            // Function to switch tabs
            function switchTab(targetTabId) {
                $('.nav-link[href="' + targetTabId + '"]').tab('show');
            }


            // Event handler for tab switch
            $('.tab-trigger').on('show.bs.tab', function(event) {
                return validateAndSwitchTab($(this).data('bs-target'));
            });


            // Event handler for input change
            $('.tab-content').on('input change', 'input, textarea, select', function() {
                var $field = $(this);
                var isSelect2 = $field.hasClass('select2-hidden-accessible');


                // Remove red border when user interacts with the field
                if (isSelect2) {
                    $field.next('.select2-container').removeClass('is-invalid');
                } else {
                    $field.removeClass('is-invalid');
                }
            });


            // Event handler for multi-select change
            $('.multiple-select').on('change', function() {
                // Remove validation error only from the changed multi-select field
                var $multiSelect = $(this);
                $multiSelect.removeClass('is-invalid');
            });


            // Event handler for the "Continue" button
            $('.tab-trigger-next').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');


                // Validate and switch to the next tab
                validateAndSwitchTab(targetTabId);
            });


            // Event handler for the "Previous" button
            $('.tab-trigger-previous').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');


                // Validate and switch to the previous tab
                validateAndSwitchTab(targetTabId);
            });
        });
    </script>
@endpush
