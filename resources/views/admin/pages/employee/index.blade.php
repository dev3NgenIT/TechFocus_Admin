@extends('admin.master')
@section('content')
<div class="container h-100">
    <div class="row">
        <div class="col-lg-12 card rounded-0 shadow-sm">
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
                                    <h2 class="text-center">Employee Table</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                <!--begin::Export dropdown-->
                                <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    {{-- <span class="svg-icon svg-icon-1 position-absolute ms-4"></span> --}}
                                    Export Report
                                </button>
                                <a href="{{ route('employee.create') }}" type="button" class="btn btn-sm btn-light-success rounded-0">
                                    Add Employee
                                </a>
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
                            <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                <th class="" width="5%">Sl</th>
                                <th class="" width="35%">Name</th>
                                <th class="" width="30%">Email</th>
                                <th class="" width="20%">Role</th>
                                <th class="text-center" width="10%">Action</th>
                                <!--end::Table row-->
                        </thead>
                        <tbody class="fw-bold text-gray-600 text-center">
                            <tr class="odd">
                                <td>
                                    1
                                </td>
                                <td>
                                    Sazeduzzaman Saju
                                </td>
                                <td>
                                    szamansaju@gmail.com
                                </td>
                                <td>
                                    <span class="badge badge-primary">Admin</span>
                                </td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#categoryViewModal">
                                        <i class="fa-solid fa-expand"></i>
                                        <!--View-->
                                    </a>
                                    <a href="{{ route('employee.create') }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
                            <tr class="odd">
                                <td>
                                    2
                                </td>
                                <td>
                                    Sazeduzzaman Saju
                                </td>
                                <td>
                                    szamansaju@gmail.com
                                </td>
                                <td>
                                    <span class="badge badge-info">Modarator</span>
                                </td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#categoryViewModal">
                                        <i class="fa-solid fa-expand"></i>
                                        <!--View-->
                                    </a>
                                    <a href="{{ route('rows.create') }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
                            <tr class="odd">
                                <td>
                                    3
                                </td>
                                <td>
                                    Sazeduzzaman Saju
                                </td>
                                <td>
                                    szamansaju@gmail.com
                                </td>
                                <td>
                                    <span class="badge badge-success">User</span>
                                </td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#categoryViewModal">
                                        <i class="fa-solid fa-expand"></i>
                                        <!--View-->
                                    </a>
                                    <a href="{{ route('rows.create') }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
@endsection
