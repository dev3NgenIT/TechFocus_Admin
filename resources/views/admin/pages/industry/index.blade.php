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
                                    <!--begin::Search-->
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
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_datatable_example_1_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2 class="text-center">Industry Info</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->
                                    <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        {{-- <span class="svg-icon svg-icon-1 position-absolute ms-4"></span> --}}
                                        Export Report
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#IndustryAddModal">
                                        Add New
                                    </button>
                                    <!--begin::Menu-->
                                    <div id="kt_datatable_example_1_export_menu"
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="copy">
                                                Copy to clipboard
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="excel">
                                                Export as Excel
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="csv">
                                                Export as CSV
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                                Export as PDF
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example_1">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr>
                                    <th width="5%">Id</th>
                                    <th width="15%" >Logo</th>
                                    <th width="40%" >Parent Industry Name</th>
                                    <th width="25%">Name</th>
                                    <th width="15%" >Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600">
                                <tr class="odd">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <img class="img-fluid rounded-circle" width="35px"
                                            src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                                            alt="">
                                    </td>
                                    <td>Parent
                                    </td>
                                    <td>Company
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#IndustryViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                            <!--View-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#IndustryEditModal">
                                            <i class="fa-solid fa-pen"></i>
                                            <!--Edit-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                            <!--Delete-->
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <img class="img-fluid rounded-circle" width="35px"
                                            src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                                            alt="">
                                    </td>
                                    <td>Parent
                                    </td>
                                    <td>Company
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#IndustryViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                            <!--View-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#IndustryEditModal">
                                            <i class="fa-solid fa-pen"></i>
                                            <!--Edit-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                            <!--Delete-->
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
    <div class="modal fade" id="IndustryAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Industry</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <!-- End Close button in the header -->
                </div>
                <form action="" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Parent
                                                Industry Name</label>
                                            <select class="form-select form-select-sm form-select-solid" name="parent_id"
                                                data-dropdown-parent="#IndustryAddModal" data-control="select2"
                                                data-placeholder="Select an Options" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="0">No Parent</option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="3">Pakistan</option>
                                            </select>
                                            <div class="valid-feedback""> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Parent
                                                Industry Name</div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Category</label>
                                            <select class="form-select form-select-solid" name="category"
                                                data-dropdown-parent="#IndustryAddModal" data-control="select2"
                                                data-placeholder="Select an Category" data-hide-search="true" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="valid-feedback""> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div> --}}

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" placeholder="Enter Name" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label ">Url
                                            </label>
                                            <input type="url" class="form-control form-control-solid form-control-sm" placeholder="Enter A Url"
                                                name="website_url" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label">Description</label>
                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description" ></textarea>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <div class="row align-items-center">
                                                <div class="col-md-10">
                                                    <label for="validationCustom01" class="form-label">Image
                                                    </label>
                                                    <input type="file" class="form-control form-control-solid form-control-sm"
                                                        name="image">
                                                </div>
                                                <div class="col-md-2 p-0">
                                                    <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg" class="mt-10 border border-info shadow-sm" width="30px" height="30px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <div class="row align-items-center">
                                                <div class="col-md-10">
                                                    <label for="validationCustom01" class="form-label required ">Logo
                                                    </label>
                                                    <input type="file" class="form-control form-control-solid form-control-sm"
                                                        name="logo" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Image </div>
                                                </div>
                                                <div class="col-md-2 p-0">
                                                    <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg" class="mt-10 border border-info shadow-sm" width="30px" height="30px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <!-- Button to close the modal in the footer -->
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="IndustryEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Edit Industry</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <!-- End Close button in the header -->
                </div>
                <form action="" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Parent
                                                Industry Name</label>
                                            <select class="form-select form-select-sm form-select-solid" name="parent_id"
                                                data-dropdown-parent="#IndustryAddModal" data-control="select2"
                                                data-placeholder="Select an Options" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="0">No Parent</option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="3">Pakistan</option>
                                            </select>
                                            <div class="valid-feedback""> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Parent
                                                Industry Name</div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Category</label>
                                            <select class="form-select form-select-solid" name="category"
                                                data-dropdown-parent="#IndustryAddModal" data-control="select2"
                                                data-placeholder="Select an Category" data-hide-search="true" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="valid-feedback""> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div> --}}

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" placeholder="Enter Name" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label ">Url
                                            </label>
                                            <input type="url" class="form-control form-control-solid form-control-sm"  placeholder="Enter A Url"
                                                name="website_url" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label">Description</label>
                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description" ></textarea>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <div class="row align-items-center">
                                                <div class="col-md-10">
                                                    <label for="validationCustom01" class="form-label">Image
                                                    </label>
                                                    <input type="file" class="form-control form-control-solid form-control-sm"
                                                        name="image">
                                                </div>
                                                <div class="col-md-2 p-0">
                                                    <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg" class="mt-10 border border-info shadow-sm" width="30px" height="30px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <div class="row align-items-center">
                                                <div class="col-md-10">
                                                    <label for="validationCustom01" class="form-label required ">Logo
                                                    </label>
                                                    <input type="file" class="form-control form-control-solid form-control-sm"
                                                        name="logo" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Image </div>
                                                </div>
                                                <div class="col-md-2 p-0">
                                                    <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg" class="mt-10 border border-info shadow-sm" width="30px" height="30px" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <!-- Button to close the modal in the footer -->
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- View Modal --}}
    <div class="modal fade" id="IndustryViewModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">View </h5>
                    <!-- Close button in the header -->
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
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold" title="Country Name">Parent Industry Name</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Bangladesh</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Name</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Intern</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Url</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Intern</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Image</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>
                                                            <img class="img-fluid rounded-circle" width="35px"
                                                                src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                                                                alt="">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Logo</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>
                                                            <img class="img-fluid rounded-circle" width="35px"
                                                                src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                                                                alt="">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-5">
                                                        <p class="fw-bold">Description</p>
                                                    </div>
                                                    <div class="col-lg-9 col-sm-6">
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

