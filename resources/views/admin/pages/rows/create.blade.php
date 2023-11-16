@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5 rounded-0">
                    <div class="card-header card-header-stretch">
                        <h2 class="card-title">Rows Create</h2>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#row-with-image">Row With Image</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#row-with-list">Row With List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="row-with-image" role="tabpanel">
                                <form action="" class="needs-validation" method="post" novalidate>
                                    @csrf
                                    <div class="container px-0">
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
                                                                    <h1>Quick and Simple TinyMCE 5 Integration</h1>
                                                                    <p>Here goes the&nbsp;<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&nbsp;<em>printing and typesetting</em>&nbsp;industry.</p>
                                                                    <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
                                                                    <h3 style="text-align: right;">Flexible &amp; Powerful</h3>
                                                                    <p style="text-align: right;"><strong>Lorem Ipsum has been the industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                                                    <ul>
                                                                        <li>List item 1</li>
                                                                        <li>List item 2</li>
                                                                        <li>List item 3</li>
                                                                        <li>List item 4</li>
                                                                    </ul>
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" id="common_submit" class="btn btn-lg common-btn-3 fw-bolder me-4 w-175px mb-5">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                
                            <div class="tab-pane fade" id="row-with-list" role="tabpanel">
                                <form action="" class="needs-validation" method="post" novalidate>
                                    @csrf
                                    <div class="container px-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row border p-4">
                                                    <p class="badge badge-info custom-badge" style="margin-top: -15px">Row</span>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-1">
                                                                <label for="validationCustom01" class="form-label ">Badge
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="badge" id="validationCustom01" placeholder="Enter Badge">
                                                                <div class="invalid-feedback"> Please Enter Badge </div>
                                                            </div>
                                                            <div class="col-md-6 mb-1">
                                                                <label for="validationCustom01" class="form-label required ">Title
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="title" id="validationCustom01" placeholder="Enter Title" required>
                                                                <div class="invalid-feedback"> Please Enter Title </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row border p-4 mt-8">
                                                    <p class="badge badge-info custom-badge" style="margin-top: -15px; width: 5%">Row List</span>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-4 mb-1">
                                                                <label for="validationCustom01" class="form-label required ">List Title
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="list_title" id="validationCustom01" placeholder="Enter Row Link" required>
                                                                <div class="invalid-feedback"> Please Enter Button Name </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01" class="form-label required ">List One
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="list_one" id="validationCustom01" placeholder="Enter Row Link" required>
                                                                <div class="invalid-feedback"> Please Enter Button Name </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01" class="form-label required ">List Two
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="list_two" id="validationCustom01" placeholder="Enter Row Link" required>
                                                                <div class="invalid-feedback"> Please Enter Button Name </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01" class="form-label required ">List Three
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="list_three" id="validationCustom01" placeholder="Enter Row Link" required>
                                                                <div class="invalid-feedback"> Please Enter Button Name </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01" class="form-label required ">List Four
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                                    name="list_four" id="validationCustom01" placeholder="Enter Row Link" required>
                                                                <div class="invalid-feedback"> Please Enter Button Name </div>
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
                                                                    <h1>Quick and Simple TinyMCE 5 Integration</h1>
                                                                    <p>Here goes the&nbsp;<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&nbsp;<em>printing and typesetting</em>&nbsp;industry.</p>
                                                                    <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
                                                                    <h3 style="text-align: right;">Flexible &amp; Powerful</h3>
                                                                    <p style="text-align: right;"><strong>Lorem Ipsum has been the industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                                                    <ul>
                                                                        <li>List item 1</li>
                                                                        <li>List item 2</li>
                                                                        <li>List item 3</li>
                                                                        <li>List item 4</li>
                                                                    </ul>
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" id="common_submit" class="btn btn-lg common-btn-3 fw-bolder me-4 w-175px mb-5">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
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
    </div>
@endsection
