@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-lg">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 text-lg-start text-sm-center">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span
                                            class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                    rx="1" transform="rotate(45 17.0365 15.1223)"
                                                    fill="currentColor">
                                                </rect>
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <input type="text" data-kt-filter="search"
                                            class="form-control form-control-sm form-control-solid w-150px ps-14 rounded-0"
                                            placeholder="Search" style="border: 1px solid #eee;" />
                                    </div>
                                    <div id="kt_datatable_example_1_export" class="d-none"></div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2 class="text-center">FAQ Table</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        {{-- <span class="svg-icon svg-icon-1 position-absolute ms-4"></span> --}}
                                        Export Report
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#faqAddModal">
                                        Add New
                                    </button>
                                    <div id="kt_datatable_example_1_export_menu"
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="copy">
                                                Copy to clipboard
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="excel">
                                                Export as Excel
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="csv">
                                                Export as CSV
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                                Export as PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example_1">
                            <thead class="table_header_bg">
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th class="" width="5%">Sl</th>
                                    <th class="" width="20%">Company Name</th>
                                    <th class="" width="45%">Question</th>
                                    <th class="" width="20%">Is Published</th>
                                    <th class="text-center" width="10%">Action</th>
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                <tr class="odd">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        NGen IT
                                    </td>
                                    <td>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, eaque?
                                    </td>
                                    <td>
                                        @php
                                            $value = 0; // Replace this with the actual value you want to check
                                        @endphp

                                        @if ($value == 0)
                                            <span class="badge bg-success">Yes</span>
                                        @else
                                            <span class="badge bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#faqViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#faqEditModal">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="Even">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        NGen IT
                                    </td>
                                    <td>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, eaque?
                                    </td>
                                    <td>
                                        @php
                                            $value = 1; // Replace this with the actual value you want to check
                                        @endphp

                                        @if ($value == 0)
                                            <span class="badge bg-success">Yes</span>
                                        @else
                                            <span class="badge bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#faqViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#faqEditModal">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal --}}
    <div class="modal fade" id="faqAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add Faq</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form action="" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Company
                                                Name</label>
                                            <select class="form-select-sm form-select form-select-solid" name="company_id"
                                                data-dropdown-parent="#faqAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Dynamic Category
                                                Name</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="dynamic_category_id" data-dropdown-parent="#faqAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Is
                                                Published</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="is_published" data-dropdown-parent="#faqAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" data-hide-search="true" required>
                                                <option></option>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Question
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="question" id="validationCustom01" placeholder="Enter Question"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Question </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Order
                                            </label>
                                            <input type="number" id="validationCustom01"
                                                class="form-control form-control-solid form-control-sm" name="order"
                                                minlength="0" maxlength="10" pattern="^-?[1-9]\d*$"  placeholder="Enter order" required>
                                            <div class="invalid-feedback"> Please Enter Order </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom010" class="form-label required mb-0">Answer</label>
                                            <textarea rows="1" name="answer" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Answer" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Answer</div>
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
    {{-- Edit Modal --}}
    <div class="modal fade" id="faqEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Edit Faq</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form action="" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Company
                                                Name</label>
                                            <select class="form-select-sm form-select form-select-solid" name="company_id"
                                                data-dropdown-parent="#faqAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Dynamic Category
                                                Name</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="dynamic_category_id" data-dropdown-parent="#faqAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Is
                                                Published</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="is_published" data-dropdown-parent="#faqAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" data-hide-search="true" required>
                                                <option></option>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Question
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="question" id="validationCustom01" placeholder="Enter Question"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Question </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Order
                                            </label>
                                            <input type="number" id="validationCustom01"
                                                class="form-control form-control-solid form-control-sm" name="order"
                                                minlength="0" maxlength="10" pattern="^-?[1-9]\d*$"  placeholder="Enter order" required>
                                            <div class="invalid-feedback"> Please Enter Order </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom010" class="form-label required mb-0">Answer</label>
                                            <textarea rows="1" name="answer" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Answer" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Answer</div>
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
    {{-- View Modal --}}
    <div class="modal fade" id="faqViewModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">View Faq</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container px-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border rounded-0">
                                    <p class="badge badge-info custom-badge">Info</span>
                                    <div class="card-body p-1 px-2">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-5">
                                                        <p class="fw-bold" title="Country Name">Company Name :</p>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-6">
                                                        <p>NGen IT</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-5">
                                                        <p class="fw-bold">Question :</p>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-6">
                                                        <p>Lorem ipsum dolor sit amet ?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-5">
                                                        <p class="fw-bold">Is Published :</p>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-6">
                                                        <p>
                                                            Yes
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-5">
                                                        <p class="fw-bold">Answer :</p>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-6">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint a
                                                            ipsam, doloremque maxime assumenda eaque adipisci eum in iste
                                                            quam, ipsa vitae, commodi voluptatem dicta. Sed hic officiis a
                                                            autem?
                                                        </p>
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
            </div>
        </div>
    </div>
@endsection
