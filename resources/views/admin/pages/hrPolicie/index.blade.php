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
                                        <h2 class="text-center">HR Polices</h2>
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
                                        data-bs-target="#hrPoliciesAddModal">
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
                                    <th class="" width="15%">Country Name</th>
                                    <th class="" width="35%">Title</th>
                                    <th class="" width="15%">Effective Date</th>
                                    <th class="" width="10%">Version</th>
                                    <th class="" width="10%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                <tr class="odd">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Bangladesh
                                    </td>
                                    <td>
                                        This Is The Title
                                    </td>
                                    <td>
                                        11/01/2023
                                    </td>
                                    <td>
                                        V-0.2
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#hrPoliciesViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#hrPoliciesEditModal">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Nepal
                                    </td>
                                    <td>
                                        This Is The Title
                                    </td>
                                    <td>
                                        15/01/2023
                                    </td>
                                    <td>
                                        V-0.5
                                    </td>
                                    <td>
                                        <span class="badge bg-info">Inactive</span>
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#hrPoliciesViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#hrPoliciesEditModal">
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
    <div class="modal fade" id="hrPoliciesAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add HR Policies</h5>
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
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Country
                                        Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="country_id"
                                        data-dropdown-parent="#hrPoliciesAddModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                        <option></option>
                                        <option value="1">Bangaldesh</option>
                                        <option value="2">India</option>
                                        <option value="2">Pakistan</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Select Country Name. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Company Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="company_id"
                                        data-dropdown-parent="#hrPoliciesAddModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                        <option></option>
                                        <option value="1">Bangaldesh</option>
                                        <option value="2">India</option>
                                        <option value="2">Pakistan</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Select Company Name. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Dynamic Category Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="dynamic_category_id"
                                        data-dropdown-parent="#hrPoliciesAddModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                        <option></option>
                                        <option value="1">Bangaldesh</option>
                                        <option value="2">India</option>
                                        <option value="2">Pakistan</option>
                                    </select>
                                    <div class="invalid-feedback"> Enter Dynamic Category Name. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Status</label>
                                    <select class="form-select form-select-solid form-select-sm" name="status"
                                        data-dropdown-parent="#hrPoliciesAddModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" data-hide-search="true" required>
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                    <div class="invalid-feedback">Please Choose Status. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Title</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Title" name="title"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Title. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Effective Date</label>
                                    <input type="date" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Effective Date" name="effective_date"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Effective Date. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Expiration Date</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Expiration Date" name="expiration_date"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Expiration Date. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Version</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Version" name="version"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Version. </div>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Description</label>
                                    <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description" required></textarea>
                                    <div class="invalid-feedback"> Please Enter Version. </div>
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
    <div class="modal fade" id="hrPoliciesEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Edit HR Policies</h5>
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
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Country
                                        Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="country_id"
                                        data-dropdown-parent="#hrPoliciesEditModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                        <option></option>
                                        <option value="1">Bangaldesh</option>
                                        <option value="2">India</option>
                                        <option value="2">Pakistan</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Select Country Name. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Company Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="company_id"
                                        data-dropdown-parent="#hrPoliciesEditModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                        <option></option>
                                        <option value="1">Bangaldesh</option>
                                        <option value="2">India</option>
                                        <option value="2">Pakistan</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Select Company Name. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Dynamic Category Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="dynamic_category_id"
                                        data-dropdown-parent="#hrPoliciesEditModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                        <option></option>
                                        <option value="1">Bangaldesh</option>
                                        <option value="2">India</option>
                                        <option value="2">Pakistan</option>
                                    </select>
                                    <div class="invalid-feedback"> Enter Dynamic Category Name. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Status</label>
                                    <select class="form-select form-select-solid form-select-sm" name="status"
                                        data-dropdown-parent="#hrPoliciesEditModal" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" data-hide-search="true" required>
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                    <div class="invalid-feedback">Please Choose Status. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Title</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Title" name="title"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Title. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Effective Date</label>
                                    <input type="date" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Effective Date" name="effective_date"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Effective Date. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Expiration Date</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Expiration Date" name="expiration_date"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Expiration Date. </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Version</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Version" name="version"
                                                required>
                                    <div class="invalid-feedback"> Please Enter Version. </div>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="validationCustom04" class="form-label required mb-0">Description</label>
                                    <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description" required></textarea>
                                    <div class="invalid-feedback"> Please Enter Version. </div>
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
    <div class="modal fade" id="hrPoliciesViewModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">View HR Policies</h5>
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
                                                    <div class="col-lg-5 col-sm-5">
                                                        <p class="fw-bold" title="Country Name">Country Name :</p>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <p>Bangladesh</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-5">
                                                        <p class="fw-bold">Title :</p>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <p>This is Title</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-5">
                                                        <p class="fw-bold">Effective Date :</p>
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <p>
                                                           11/12/2023
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-5">
                                                        <p class="fw-bold">Version :</p>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <p>
                                                           v-0.2
                                                         </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-5">
                                                        <p class="fw-bold">Status :</p>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <span class="badge bg-info">Inactive</span>
                                                        <span class="badge bg-success">Active</span>
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

