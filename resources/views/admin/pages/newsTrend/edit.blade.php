@extends('admin.master')
@section('content')
<div class="container h-100">
    <div class="row">
        <div class="col-lg-12 card rounded-0 shadow-sm px-0">
            <div class="card card-flush">
                <div class="card-header align-items-center gap-2 gap-md-5 shadow-lg bg-light-primary px-0"
                    style="min-height: 45px;">
                    <div class="container px-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center">
                                <div class="card-title ps-3">
                                    <h2 class="text-start ps-5">News & Trends Edit From</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 text-lg-end text-sm-center">
                                <a href="{{ route('news-trend.index') }}" class="btn btn-icon btn-primary w-auto px-3 rounded-0">
                                    <i class="las la-arrow-left fs-2 me-2"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Category
                                                    Name</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="category_id" multiple="multiple" required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Category Name. </div>
                                            </div>

    
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Brand
                                                    Name</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="brand_id" multiple="multiple" required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Brand Name. </div>
                                            </div>



                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Industry
                                                    Name</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="industry_id" multiple="multiple" required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Industry Name. </div>
                                            </div>
                                            
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Solution
                                                    Name</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="solution_id" multiple="multiple" required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Solution Name. </div>
                                            </div>





                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Product
                                                    Name</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="product_id" multiple="multiple" required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Product Name. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Tags</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="tags" multiple="multiple" required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Tags. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Featured</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="featured" data-hide-search="true" required>
                                                    <option></option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Featured. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom010" class="form-label required mb-0">Type</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    name="type" data-hide-search="true" required>
                                                    <option></option>
                                                    <option value="news">News</option>
                                                    <option value="trends">Trends</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Type. </div>
                                            </div>
    
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required ">Badge
                                                </label>
                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                    id="validationCustom01" placeholder="Enter Badge" name="badge"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Badge </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required ">Title</label>
                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                    id="validationCustom01" placeholder="Enter Title" name="title"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Title </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required ">Author</label>
                                                <input type="text" class="form-control form-control-solid form-control-sm"
                                                    id="validationCustom01" placeholder="Enter Author" name="author"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Author </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required ">Banner Image</label>
                                                <input type="file" class="form-control form-control-solid form-control-sm"
                                                    id="validationCustom01" placeholder="Enter Banner Image" name="banner_image"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Banner Image </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required ">Thumbnail Image</label>
                                                <input type="file" class="form-control form-control-solid form-control-sm"
                                                    id="validationCustom01" placeholder="Enter Thumbnail Image" name="thumbnail_image"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Thumbnail Image </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required ">Aditional URL</label>
                                                <input type="url" class="form-control form-control-solid form-control-sm"
                                                    id="validationCustom01" placeholder="Enter Additional  URL" name="additional_url"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Additional URL</div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom010" class="form-label required mb-0">Header</label>
                                                <textarea rows="1" name="header" class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Header" required></textarea>
                                                <div class="invalid-feedback"> Please Enter Header</div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom010" class="form-label required mb-0">Address</label>
                                                <textarea rows="1" name="address" class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Address" required></textarea>
                                                <div class="invalid-feedback"> Please Enter Address</div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom010" class="form-label required mb-0">Footer</label>
                                                <textarea rows="1" name="footer" class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Footer" required></textarea>
                                                <div class="invalid-feedback"> Please Enter Footer</div>
                                            </div>
                                            <div class="col-md-12 mb-1 mt-3">
                                                <label for="validationCustom01" class="form-label required mb-0">Short Description</label>
                                                <textarea id="kt_docs_tinymce_basic" name="short_des" class="tox-target">
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
                                                <div class="invalid-feedback"> Please Enter Title </div>
                                            </div>
                                            <div class="col-md-12 mb-1 mt-3">
                                                <label for="validationCustom01" class="form-label required mb-0">Long Description</label>
                                                <textarea id="kt_docs_tinymce_plugins" name="long_des" class="tox-target">
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
                                                <div class="invalid-feedback"> Please Enter Title </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-2">
                            <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        var options = {
            selector: "#kt_docs_tinymce_basic"
        };

        if (KTApp.isDarkMode()) {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    </script>
    <script>
        var options = {
            selector: "#kt_docs_tinymce_basic2"
        };

        if (KTApp.isDarkMode()) {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    </script>
@endsection
