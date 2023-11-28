@extends('admin.master')
@section('content')
    <style>
        .hidden {
            display: none;
        }
    </style>
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5 rounded-0">
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
                            <h4 class="text-white p-0 m-0 fw-bold">Catalogue Edit Form</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="needs-validation"
                            novalidate>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Select Category</label>
                                        <select class="form-select form-select-solid form-select-sm" name="category"
                                            id="category" data-control="select2" data-hide-search="false"
                                            data-placeholder="Select an Product Type" data-allow-clear="true"
                                            onchange="showSelectBox()">
                                            <option selected>Select The Category</option>
                                            <option value="brand">Brand</option>
                                            <option value="product">Product</option>
                                            <option value="industry">Industry</option>
                                            <option value="solution">Solution</option>
                                            <option value="company">Company</option>
                                        </select>
                                        <div class="invalid-feedback"> Please Select Category.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 brand-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label requireD">Brand Name</label>
                                        <select class="form-select form-select-solid" name="brand_id" id="field2"
                                            multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                                            <option value="">Abarth</option>
                                            <option value="">Alfa Romeo</option>
                                            <option value="">Aston Martin</option>
                                            <option value="">Audi</option>
                                            <option value="">Bentley</option>
                                            <option value="">BMW</option>
                                            <option value="">Bugatti</option>
                                            <option value="">Cadillac</option>
                                        </select>
                                        <div class="invalid-feedback"> Please Enter Product Name.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 product-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Product Name</label>
                                        <select class="form-select form-select-solid" name="product_id" id="field2"
                                            multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                                            <option value="">Abarth</option>
                                            <option value="">Alfa Romeo</option>
                                            <option value="">Aston Martin</option>
                                            <option value="">Audi</option>
                                            <option value="">Bentley</option>
                                            <option value="">BMW</option>
                                            <option value="">Bugatti</option>
                                            <option value="">Cadillac</option>
                                        </select>
                                        <div class="invalid-feedback"> Please Enter Product Name.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 industry-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Industry Name</label>
                                        <select class="form-select form-select-solid" name="industry_id" id="field2"
                                            multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                                            <option value="">Abarth</option>
                                            <option value="">Alfa Romeo</option>
                                            <option value="">Aston Martin</option>
                                            <option value="">Audi</option>
                                            <option value="">Bentley</option>
                                            <option value="">BMW</option>
                                            <option value="">Bugatti</option>
                                            <option value="">Cadillac</option>
                                        </select>
                                        <div class="invalid-feedback"> Please Enter Product Name.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 solution-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Solution Name</label>
                                        <select class="form-select form-select-solid" name="solution_id" id="field2"
                                            multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                                            <option value="">Abarth</option>
                                            <option value="">Alfa Romeo</option>
                                            <option value="">Aston Martin</option>
                                            <option value="">Audi</option>
                                            <option value="">Bentley</option>
                                            <option value="">BMW</option>
                                            <option value="">Bugatti</option>
                                            <option value="">Cadillac</option>
                                        </select>
                                        <div class="invalid-feedback"> Please Enter Product Name.</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 company-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Company Name</label>
                                        <select class="form-select form-select-solid" name="company_id" id="field2"
                                            multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                                            <option value="">Abarth</option>
                                            <option value="">Alfa Romeo</option>
                                            <option value="">Aston Martin</option>
                                            <option value="">Audi</option>
                                            <option value="">Bentley</option>
                                            <option value="">BMW</option>
                                            <option value="">Bugatti</option>
                                            <option value="">Cadillac</option>
                                        </select>
                                        <div class="invalid-feedback"> Please Enter Product Name.</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 button-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Button Name</label>
                                        <input name="button_name" class="form-control form-control-sm form-control-solid"
                                            placeholder="Enter Button Name" type="text" required />
                                        <div class="invalid-feedback"> Please Enter Button Name.</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 link-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Button Link</label>
                                        <input name="button_link" class="form-control form-control-sm form-control-solid"
                                            placeholder="Enter Button Link" type="url" required />
                                        <div class="invalid-feedback"> Please Enter Button Link.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Title</label>
                                        <input name="name" class="form-control form-control-sm form-control-solid"
                                            placeholder="Enter Title" type="text" required />
                                        <div class="invalid-feedback"> Please Enter Title.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Thumbnail</label>
                                        <input name="thumbnail" class="form-control form-control-sm form-control-solid"
                                            placeholder="Choose Thumbnail" type="file" required />
                                        <div class="invalid-feedback"> Please Choose Thumbnail.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Page Number</label>
                                        <input name="page_number" class="form-control form-control-sm form-control-solid"
                                            placeholder="Enter Page Number" type="text" required />
                                        <div class="invalid-feedback"> Please Enter Page Number.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Document</label>
                                        <input name="document" class="form-control form-control-sm form-control-solid"
                                            placeholder="Enter Document" type="file" accept="pdf" required />
                                        <div class="invalid-feedback"> Please Enter Document.</div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Description</label>
                                        <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                            placeholder="Enter Description" required></textarea>
                                        <div class="invalid-feedback"> Please Enter Description.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-12">
                                        <div id="kt_docs_repeater_advanced">
                                            <div class="form-group">
                                                <div data-repeater-list="kt_docs_repeater_advanced">
                                                    <div data-repeater-item>
                                                        <div class="form-group row mb-5">
                                                            <div class="col-lg-10">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label class="form-label">Page Image</label>
                                                                        <input name="page_image" type="file"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="page_image"
                                                                            placeholder="Page Image" />
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label class="form-label">Page Link</label>
                                                                        <input name="page_link" type="url"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="page_link"
                                                                            placeholder="Enter Page Link" />
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label class="form-label">Button Name</label>
                                                                        <input name="button_name" type="text"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="button_name"
                                                                            placeholder="Button Name" />
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label class="form-label">Button Link</label>
                                                                        <input name="button_link" type="url"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="button_link"
                                                                            placeholder="Enter Button Link" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <a href="javascript:;" data-repeater-create
                                                                        class="btn btn-sm btn-light-primary mt-8">
                                                                        <i class="la la-plus"></i>Add
                                                                    </a>

                                                                    <a href="javascript:;" data-repeater-delete
                                                                        class="btn btn-sm btn-light-danger mt-8">
                                                                        <i class="la la-trash-o fs-3"></i>Delete
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-5">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function showSelectBox() {
            // Hide all select boxes and input boxes
            $(".brand-select-box, .product-select-box, .industry-select-box, .solution-select-box, .company-select-box, .button-select-box, .link-select-box")
                .addClass("hidden");

            // Get the selected option
            var selectedOption = $("#category").val();

            // Show the relevant select box or input boxes based on the selected option
            if (selectedOption === "brand") {
                $(".brand-select-box").removeClass("hidden");
            } else if (selectedOption === "product") {
                $(".product-select-box").removeClass("hidden");
            } else if (selectedOption === "industry") {
                $(".industry-select-box").removeClass("hidden");
            } else if (selectedOption === "solution") {
                $(".solution-select-box").removeClass("hidden");
            } else if (selectedOption === "company") {
                $(".company-select-box, .button-select-box, .link-select-box").removeClass("hidden");
            }
        }

        // Additional logic for handling the specific case when "Company" is selected
        $("#category").change(function() {
            var selectedOption = $("#category").val();

            if (selectedOption === "company") {
                $(".company-select-box, .button-select-box, .link-select-box").removeClass("hidden");
            } else {
                $(".button-select-box, .link-select-box").addClass("hidden");
            }
        });
    </script>
    <script>
        $('#kt_docs_repeater_advanced').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();

                // Re-init select2
                $(this).find('[data-kt-repeater="select2"]').select2();

                // Re-init flatpickr
                $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

                // Re-init tagify
                new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            },

            ready: function() {
                // Init select2
                $('[data-kt-repeater="select2"]').select2();

                // Init flatpickr
                $('[data-kt-repeater="datepicker"]').flatpickr();

                // Init Tagify
                new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
            }
        });
    </script>
@endpush
