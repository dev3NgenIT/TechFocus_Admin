@extends('admin.master')
@section('content')
    <style>
        .collapsible-column-container {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .collapsed {
            max-height: 500px;
            /* Set a suitable height for the collapsed state */
        }
    </style>
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12 card rounded-0 shadow-sm">
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
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                            height="2" rx="1"
                                                            transform="rotate(45 17.0365 15.1223)" fill="currentColor">
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
                                                <h2 class="text-center">Management KPI</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                            <div class="d-inline">
                                                <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    onclick="toggleColumns()">
                                                    Hide/Show Column
                                                </button>
                                                <div id="kt_datatable_example_1_export_menu"
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-area" class="menu-checkbox"
                                                            data-column-index="0" checked>
                                                        <label for="column-area" class="menu-link px-3">Area</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-jan" class="menu-checkbox"
                                                            data-column-index="1" checked>
                                                        <label for="column-jan" class="menu-link px-3">Jan</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-feb" class="menu-checkbox"
                                                            data-column-index="2" checked>
                                                        <label for="column-feb" class="menu-link px-3">Feb</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-mar" class="menu-checkbox"
                                                            data-column-index="3" checked>
                                                        <label for="column-mar" class="menu-link px-3">Mar</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-apr" class="menu-checkbox"
                                                            data-column-index="4" checked>
                                                        <label for="column-apr" class="menu-link px-3">Apr</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-may" class="menu-checkbox"
                                                            data-column-index="5" checked>
                                                        <label for="column-may" class="menu-link px-3">May</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-jun" class="menu-checkbox"
                                                            data-column-index="6" checked>
                                                        <label for="column-jun" class="menu-link px-3">Jun</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-jul" class="menu-checkbox"
                                                            data-column-index="7" checked>
                                                        <label for="column-jul" class="menu-link px-3">Jul</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-aug" class="menu-checkbox"
                                                            data-column-index="8" checked>
                                                        <label for="column-aug" class="menu-link px-3">Aug</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-sep" class="menu-checkbox"
                                                            data-column-index="9" checked>
                                                        <label for="column-sep" class="menu-link px-3">Sep</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-oct" class="menu-checkbox"
                                                            data-column-index="10" checked>
                                                        <label for="column-oct" class="menu-link px-3">Oct</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-nov" class="menu-checkbox"
                                                            data-column-index="11" checked>
                                                        <label for="column-nov" class="menu-link px-3">Nov</label>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3 d-flex align-items-center">
                                                        <input type="checkbox" id="column-dec" class="menu-checkbox"
                                                            data-column-index="12" checked>
                                                        <label for="column-dec" class="menu-link px-3">Dec</label>
                                                    </div>
                                                    <!--end::Menu item-->
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
                                        <!--begin::Table row-->
                                        <tr>
                                            <th width=""
                                                class="collapsible-column d-flex align-items-center justify-content-between"
                                                data-toggle="column-area">
                                                <p class="p-0 m-0">Area</p>
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 rounded-circle"
                                                    data-bs-toggle="modal" data-bs-target="#IndustryViewModal">
                                                    <i class="fa-solid fa-plus text-info"></i>
                                                </a>
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-jan">Jan
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-feb">Feb
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-mar">Mar
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-apr">Apr
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-may">May
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-jun">Jun
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-jul">Jul
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-aug">Aug
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-sep">Sep
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-oct">Oct
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-nov">Nov
                                            </th>
                                            <th width="" class="collapsible-column" data-toggle="column-dec">Dec
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        <tr class="odd">
                                            <td>ACTIVITY</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                        </tr>
                                        <tr class="even">
                                            <td>COMMUNICATION</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>PROACTIVENESS</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                        </tr>
                                        <tr class="Even">
                                            <td>MARKETING</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                        </tr>
                                        <tr class="odd bg-info text-white">
                                            <td>TOTAL</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                            <td>47%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 pe-0">
                <div class="col-lg-12 card rounded shadow-sm">
                    <div class="card card-p-0 card-flush bg-light-primary rounded"
                        style="border-bottom-left-radius: 0px !important; border-bottom-right-radius: 0px !important;">
                        <div class="card-header rounded align-items-center py-5 gap-2 gap-md-5 pb-0 bg-info">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-title table_title">
                                            <h2 class="text-center text-white">PERFORMANCE METER</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center h-325px rounded-0 mt-5">
                            <div class="card-title table_title">
                                <h1 class="text-center text-info" style="font-size: 36px">68%</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 card rounded-0 shadow-sm">
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
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                    height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                    fill="currentColor">
                                                </rect>
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <input type="text" data-kt-filter="search-2"
                                            class="form-control form-control-sm form-control-solid w-150px ps-14 rounded-0"
                                            placeholder="Search" style="border: 1px solid #eee;" />
                                    </div>
                                    <div id="demon2" class="d-none"></div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2 class="text-center">Management KPI</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <div class="d-inline">
                                        {{-- <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            onclick="toggleColumns()">
                                            Hide/Show Column
                                        </button> --}}
                                        <div id="demon2_menu"
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 d-flex align-items-center">
                                                <input type="checkbox" id="second-column-area" class="menu-checkbox2"
                                                    data-column-index2="0" checked>
                                                <label for="second-column-area" class="menu-link px-3">Area</label>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 d-flex align-items-center">
                                                <input type="checkbox" id="second-column-week1" class="menu-checkbox2"
                                                    data-column-index2="1" checked>
                                                <label for="second-column-week1" class="menu-link px-3">Week One</label>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 d-flex align-items-center">
                                                <input type="checkbox" id="second-column-week2" class="menu-checkbox2"
                                                    data-column-index2="2" checked>
                                                <label for="second-column-week2" class="menu-link px-3">Week Two</label>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 d-flex align-items-center">
                                                <input type="checkbox" id="second-column-week3" class="menu-checkbox2"
                                                    data-column-index2="3" checked>
                                                <label for="second-column-week3" class="menu-link px-3">Week Three</label>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 d-flex align-items-center">
                                                <input type="checkbox" id="second-column-week4" class="menu-checkbox2"
                                                    data-column-index2="4" checked>
                                                <label for="second-column-week4" class="menu-link px-3">Week Four</label>
                                            </div>
                                            <!--end::Menu item-->
                                            <div class="menu-item px-3 d-flex align-items-center">
                                                <input type="checkbox" id="second-column-week5" class="menu-checkbox2"
                                                    data-column-index2="5" checked>
                                                <label for="second-column-week5" class="menu-link px-3">Week Five</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="#kt_datatable_example_1_export2">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr>
                                    <th width="" class="collapsible-column" data-toggle="second-column-area">Area
                                    </th>
                                    <th width="" class="collapsible-column" data-toggle="second-column-week1">Week
                                        1
                                    </th>
                                    <th width="" class="collapsible-column" data-toggle="second-column-week2">Week
                                        2
                                    </th>
                                    <th width="" class="collapsible-column" data-toggle="second-column-week3">Week
                                        3
                                    </th>
                                    <th width="" class="collapsible-column" data-toggle="second-column-week4">Week
                                        4
                                    </th>
                                    <th width="" class="collapsible-column" data-toggle="second-column-week5">Week
                                        5
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600">
                                <tr class="odd">
                                    <td width="15%">ACTIVITY</td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td width="15%">ACTIVITY</td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td width="15%">ACTIVITY</td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="email" class="form-control mb-2 mb-md-0 form-control-sm"
                                                placeholder="Enter Amount" />
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="IndustryViewModal" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Add Management KPI Area</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!-- End Close button in the header -->
                    </div>
                    <form action="" class="needs-validation" method="post" novalidate>
                        @csrf
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <label for="validationCustom01" class="form-label required ">Name
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-solid form-control-sm" name="name"
                                            id="validationCustom01" placeholder="Enter Name" required>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please Enter Name </div>
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
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table1 = $('#kt_datatable_example_1').DataTable();

            // Handle checkbox change event
            $('.menu-checkbox').change(function() {
                var columnIndex = $(this).data('column-index');
                table1.column(columnIndex).visible($(this).prop('checked'));
            });

            // Initialize another DataTable
            var table2 = $('#kt_datatable_example_menus2').DataTable();

            // Handle checkbox change event for the second DataTable
            $('.menu-checkbox2').change(function() {
                var columnIndex = $(this).data('column-index2');
                table2.column(columnIndex).visible($(this).prop('checked'));
            });
        });
    </script>
    <script>
       "use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example_1');

            if ( !table ) {
                return;
            }

            initDatatable();
            handleSearchDatatable();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
    </script>
@endpush
