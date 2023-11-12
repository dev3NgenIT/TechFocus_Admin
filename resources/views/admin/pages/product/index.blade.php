@extends('admin.master')
@section('content')
    <div class="post d-flex flex-column-fluid mb-3" id="kt_post">
        <div id="kt_content_container" class="container-xxl mb-3">
            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                id="kt_create_account_stepper">
                <div
                    class="card bg-transparent d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-250px w-xxl-400px">
                    <div class="card-body p-0">
                        {{-- Stepper Nav --}}
                        <div class="stepper-nav p-5">
                            <div class="stepper-item current" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-line w-40px"></div>
                                <div class="stepper-icon w-40px h-40px rounded-0 shadow-lg step-counter">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Basic Informtaion</h3>
                                </div>
                            </div>
                            <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-line w-40px"></div>
                                <div class="stepper-icon w-40px h-40px rounded-0 shadow-lg step-counter">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Offer & price</h3>
                                </div>
                            </div>
                            <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-line w-40px"></div>
                                <div class="stepper-icon w-40px h-40px rounded-0 shadow-lg step-counter">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Attachment</h3>
                                </div>
                            </div>
                            <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-line w-40px"></div>
                                <div class="stepper-icon w-40px h-40px rounded-0 shadow-lg step-counter">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Source Details</h3>
                                </div>
                            </div>
                            <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-line w-40px"></div>
                                <div class="stepper-icon w-40px h-40px rounded-0 shadow-lg step-counter">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">6</span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Complete</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Form Start --}}
                <div class="card w-100 rounded-0">
                    {{-- Stepper Form --}}
                    <form class="card-body" novalidate="novalidate" id="kt_create_account_form">
                        {{-- Basci Informtaion Start --}}
                        <div class="current" data-kt-stepper-element="content" data-kt-stepper-element="step">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-10">
                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Basic Informtaion <i
                                            class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="All The Red Star Mark Fild Is Required"></i>
                                    </h2>
                                </div>
                                <div class="fv-row">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Product Name</label>
                                                <input name="name"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Product Name" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">SKU Code</label>
                                                <input name="sku_code"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter SKU Code" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">MF Code</label>
                                                <input name="mf_code"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter MF Code" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Product Code</label>
                                                <input name="product_code"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Product Code" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Tags</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-placeholder="Select an Product Tags"
                                                    name="tags" data-allow-clear="true" multiple="multiple">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Unit</label>
                                                <input name="unit"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Unit" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Weight</label>
                                                <input name="weight" pattern="\d+(\.\d+)?" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Weight" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Min Qty</label>
                                                <input name="min_qty" pattern="\d+" step="1"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Weight" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Barcode</label>
                                                <input name="barcode"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Barcode" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Current Stock</label>
                                                <input name="current_stock" pattern="\d+" step="1"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Current Stock" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Stock Status</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="stock_status" data-control="select2"
                                                    data-placeholder="Select an Stock Status" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Industry Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="industry_id" data-control="select2"
                                                    data-placeholder="Select an Industry Name" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Solution Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="solution_id" data-control="select2"
                                                    data-placeholder="Select an Solution Name" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Refurbished</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="refurbished" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Refurbished" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Product Type</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="product_type" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Product Type" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="software">Software</option>
                                                    <option value="hardware">Hardware</option>
                                                    <option value="book">Book</option>
                                                    <option value="training">Training</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Slug</label>
                                                <input name="slug"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Slug" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Refundable</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="refunadable" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Refundable" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="software">Software</option>
                                                    <option value="hardware">Hardware</option>
                                                    <option value="book">Book</option>
                                                    <option value="training">Training</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Status</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="status" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Status" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="software">Software</option>
                                                    <option value="hardware">Hardware</option>
                                                    <option value="book">Book</option>
                                                    <option value="training">Training</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Country Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="country_id" data-control="select2"
                                                    data-placeholder="Select an Country Name" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="software">Software</option>
                                                    <option value="hardware">Hardware</option>
                                                    <option value="book">Book</option>
                                                    <option value="training">Training</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Parent Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="parent__id" data-control="select2"
                                                    data-placeholder="Select an Parent Name" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="software">Software</option>
                                                    <option value="hardware">Hardware</option>
                                                    <option value="book">Book</option>
                                                    <option value="training">Training</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Brand Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="brand_id" data-control="select2"
                                                    data-placeholder="Select an Brand Name" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="software">Software</option>
                                                    <option value="hardware">Hardware</option>
                                                    <option value="book">Book</option>
                                                    <option value="training">Training</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Category Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="category_id" data-control="select2" data-hide-search="false"
                                                    data-placeholder="Select an Category Name" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="software">Software</option>
                                                    <option value="hardware">Hardware</option>
                                                    <option value="book">Book</option>
                                                    <option value="training">Training</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Basci Informtaion End --}}
                        {{-- Offer & Price Start --}}
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-15">
                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Offer & Price <i
                                            class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="All The Red Star Mark Fild Is Required"></i>
                                    </h2>
                                    </h2>
                                </div>
                                <div class="fv-row">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Unit Price</label>
                                                <input name="unit_price" pattern="\d+(\.\d+)?" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Unit Price" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Discount</label>
                                                <input name="discount" pattern="\d+(\.\d+)?" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Discount" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Discount Type</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="discount_type" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Discount Type" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="flat">Flat</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Earn Point</label>
                                                <input name="earn_point"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Earn Point" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Tax</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="discount_type" data-control="select2" data-hide-search="false"
                                                    data-placeholder="Select an Tax" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="flat">Flat</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Tax Type</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="tax_type" data-control="select2" data-hide-search="false"
                                                    data-placeholder="Select an Tax Type" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="flat">Flat</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Shipping Type</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="shipping_type" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Shipping Type" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="free">Free</option>
                                                    <option value="flat_rate">Flat Rate</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Flat Shipping Cost</label>
                                                <input name="flat_shipping_cost"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Flat Shipping Cost" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Is Quantity Multiplied</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="shipping_type" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Is Quantity Multiplied"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Low Stock Quantity</label>
                                                <input name="low_stock_quantity" step="1" pattern="\d+"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Low Stock Quantity" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Stock Visibility State</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="stock_visibility_state" data-control="select2"
                                                    data-hide-search="true"
                                                    data-placeholder="Select an Stock Visibility State"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="quantity">Quantity</option>
                                                    <option value="text">Text</option>
                                                    <option value="hide">Hide</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Cash On Delivery</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="cash_on_delivery" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select an Cash On Delivery"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Featured</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="cash_on_delivery" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select an Featured"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Todays Deal</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="todays_deal" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an Todays Deal" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Flash Deal Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="flash_deal_id" data-control="select2" data-hide-search="false"
                                                    data-placeholder="Select an Flash Deal Name" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Flash Discount</label>
                                                <input name="low_stock_quantity" step="0.01" pattern="\d+"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Flash Discount" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Estimate Shipping Days</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="flash_discount_type" data-control="select2"
                                                    data-hide-search="false"
                                                    data-placeholder="Select an Estimate Shipping Days"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Offer & Price End --}}
                        {{-- Attachment Details Start --}}
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-12">
                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Attachment Details <i
                                            class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="All The Red Star Mark Fild Is Required"></i>
                                    </h2>
                                </div>
                                <div class="fv-row">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="validationCustom010" class="form-label">Video Provider</label>
                                            <select class="form-select form-select-solid form-select-sm"
                                                name="video_provider" data-control="select2" data-hide-search="true"
                                                data-placeholder="Select an Video Provider" data-allow-clear="true">
                                                <option></option>
                                                <option value="youtube">Youtube</option>
                                                <option value="dailymotion">Dailymotion</option>
                                                <option value="vimeo">Vimeo</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="validationCustom010" class="form-label">Video Link</label>
                                            <textarea rows="1" name="video_link" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Video Link"></textarea>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="validationCustom010" class="form-label">External Link</label>
                                            <textarea rows="1" name="external_link" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter External Link"></textarea>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="validationCustom010" class="form-label">External Link Btn
                                                Name</label>
                                            <input name="external_link_btn"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter External Link Btn Name" type="text" />
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="validationCustom010" class="form-label">PDF</label>
                                            <input name="pdf" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter PDF" type="file" accept=".pdf" />
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="validationCustom010" class="form-label required">Thumbnail</label>
                                            <input name="thumbnail"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Thumbnail" type="text" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="validationCustom010" class="form-label">Multi Image</label>
                                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                                <div class="dz-message needsclick">
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fs-7 fw-bold text-gray-400">Upload up to 10
                                                            files</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Attachment Details End --}}
                        {{-- Source Details Start --}}
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-8 pb-lg-10">
                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Source Details <i
                                            class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="All The Red Star Mark Fild Is Required"></i>
                                    </h2>
                                </div>
                                <div class="fv-row">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Price Status</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-placeholder="Select an Price Status"
                                                    name="price_status" data-hide-search="true" data-allow-clear="true"
                                                    multiple="multiple">
                                                    <option></option>
                                                    <option value="rfq">RFQ</option>
                                                    <option value="offer_price">Offer Price</option>
                                                    <option value="starting_price">Starting Price</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">RFQ</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-placeholder="Select an RFQ"
                                                    name="rfq" data-hide-search="true" data-allow-clear="true"
                                                    multiple="multiple">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Sas Price</label>
                                                <input name="sas_price" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Sas Price" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Source One Price</label>
                                                <input name="source_one_price" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Price" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Price</label>
                                                <input name="source_two_price" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Price" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source One Name</label>
                                                <input name="source_two_price"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Name" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Name</label>
                                                <input name="source_two_name"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Name" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source One Link</label>
                                                <input name="source_two_name"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Link" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Link</label>
                                                <input name="source_two_link"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Link" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Competetor One Price</label>
                                                <input name="competetor_one_price" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Competetor One Price" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Competetor Two Price</label>
                                                <input name="competetor_one_price" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Competetor Two Price" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Competetor Two Price</label>
                                                <input name="competetor_one_price" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Competetor Two Price" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Competetor One Name</label>
                                                <input name="competetor_one_name"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Competetor One Name" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Competetor Two Name</label>
                                                <input name="competetor_two_name"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Competetor Two Name" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Competetor One Link</label>
                                                <input name="competetor_one_link"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Competetor One Link" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Competetor Two Link</label>
                                                <input name="competetor_one_link"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Competetor Two Link" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Source One Approval</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2"
                                                    data-placeholder="Select an Source One Approval"
                                                    name="source_one_approval" data-hide-search="true"
                                                    data-allow-clear="true" multiple="multiple">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Source Two Approval</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2"
                                                    data-placeholder="Select an Source Two Approval"
                                                    name="source_two_approval" data-hide-search="true"
                                                    data-allow-clear="true" multiple="multiple">
                                                    <option></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label required">Notification Days</label>
                                                <input name="notification_days"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Notification Days" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Create Date</label>
                                                <input name="create_date"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Create Date" type="datetime-local" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label ">Solid Source</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-placeholder="Select an Solid Source"
                                                    name="solid_source" data-hide-search="true" data-allow-clear="true"
                                                    multiple="multiple">
                                                    <option></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Direct Principal</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-placeholder="Select an Direct Principal"
                                                    name="direct_principal" data-hide-search="true"
                                                    data-allow-clear="true" multiple="multiple">
                                                    <option></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Agreement</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-placeholder="Select an Agreement"
                                                    name="agreement" data-hide-search="true" data-allow-clear="true"
                                                    multiple="multiple">
                                                    <option></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Type</label>
                                                <input name="source_type"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Type" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="validationCustom010" class="form-label">Source Contact</label>
                                            <textarea rows="1" name="source_contact" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Source Contact"></textarea>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Action Status</label>
                                                <input name="action_status"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Action Status" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source One Estimate Time</label>
                                                <input name="source_one_estimate_time" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Estimate Time" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source One Principal Time</label>
                                                <input name="source_one_principal_time" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Principal Time" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source One Shipping Time</label>
                                                <input name="source_one_shipping_time" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Shipping Time" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source One Location</label>
                                                <input name="source_one_location"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Location" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source One Country</label>
                                                <input name="source_one_location"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source One Country" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Estimate Time</label>
                                                <input name="source_two_estimate_time" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Estimate Time" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Principal Time</label>
                                                <input name="source_two_principal_time" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Principal Time" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Shipping Time</label>
                                                <input name="source_two_shipping_time" step="0.01"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Shipping Time" type="number" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Location</label>
                                                <input name="source_two_location"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Location" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Source Two Country</label>
                                                <input name="source_two_location"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Source Two Country" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Source Details End --}}
                        {{-- Product Complete Start --}}
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-8 pb-lg-10">
                                    <h2 class="fw-bolder text-dark">One Step Left!</h2>
                                    <h4 class="fw-bolder text-dark">Your Data Successfully Added Please Submit It!</h4>
                                </div>
                                <div class="mb-0 d-flex justify-content-center align-items-center">
                                    <img src="https://i.gifer.com/7efs.gif" alt="">
                                </div>
                            </div>
                        </div>
                        {{-- Product Complete End --}}
                        <div class="d-flex flex-stack pt-10">
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-primary me-3 rounded-0"
                                    data-kt-stepper-action="previous">
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="11" width="13" height="2"
                                                rx="1" fill="currentColor" />
                                            <path
                                                d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-lg btn-primary me-3 rounded-0"
                                    data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit
                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                    rx="1" transform="rotate(-180 18 13)"
                                                    fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-info rounded-0"
                                    data-kt-stepper-action="next">Continue
                                    <span class="svg-icon svg-icon-4 ms-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
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
@endpush
