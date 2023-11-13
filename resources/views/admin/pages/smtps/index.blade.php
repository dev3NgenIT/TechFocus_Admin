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
                                        <h2 class="">SMTPS</h2>
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
                                        data-bs-target="#colorsAddModal">
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
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th class="" width="5%">Sl</th>
                                    <th class="" width="15%">Country Name</th>
                                    <th class="" width="10%">Host</th>
                                    <th class="" width="10%">Port</th>
                                    <th class="" width="10%">User Name</th>
                                    <th class="" width="10%">Sender Email</th>
                                    <th class="" width="10%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                <tr class="odd">
                                    <td>
                                        1
                                    </td>
                                    <td>Bangladesh
                                    </td>
                                    <td>Ngen It
                                    </td>
                                    <td>16.185.60.12
                                    </td>
                                    <td>@miya</td>
                                    <td>user@mail.com</td>
                                    <td><span class="badge badge-primary">Active</span></td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#colorsViewModal">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                            fill="currentColor"></rect>
                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3"></rect>
                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3"></rect>
                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3"></rect>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--View-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#colorsEditModal">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--Edit-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                                    height="100" viewBox="0,0,256,256">
                                                    <g fill="#a1a5b7" fill-rule="nonzero" stroke="none"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                                                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                        font-family="none" font-weight="none" font-size="none"
                                                        text-anchor="none" style="mix-blend-mode: normal">
                                                        <g transform="scale(5.33333,5.33333)">
                                                            <path
                                                                d="M20.5,4c-0.49034,-0.00628 -0.95279,0.22749 -1.23848,0.62606c-0.28569,0.39856 -0.35854,0.9116 -0.19511,1.37394h-4.42578c-1.83725,0 -3.5577,0.91945 -4.57617,2.44922l-2.36719,3.55078h-0.19727c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h0.76367c0.12867,0.01945 0.25932,0.02208 0.38867,0.00781l2.47266,23.07813c0.29835,2.78234 2.67084,4.91406 5.46875,4.91406h14.81055c2.79791,0 5.1704,-2.13172 5.46875,-4.91406l2.47461,-23.07813c0.12677,0.01359 0.25475,0.01097 0.38086,-0.00781h0.77148c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381h-0.19727l-2.36719,-3.55078c-1.01929,-1.52894 -2.73955,-2.44922 -4.57617,-2.44922h-4.42578c0.16343,-0.46234 0.09058,-0.97538 -0.19511,-1.37394c-0.28569,-0.39856 -0.74814,-0.63234 -1.23848,-0.62606zM14.64063,9h18.71875c0.83737,0 1.61537,0.41622 2.08008,1.11328l1.25781,1.88672h-25.39453l1.25781,-1.88672c0.00065,-0.00065 0.0013,-0.0013 0.00195,-0.00195c0.46348,-0.69619 1.23938,-1.11133 2.07813,-1.11133zM11.66992,15h24.66016l-2.43945,22.76563c-0.13765,1.28366 -1.19624,2.23438 -2.48633,2.23438h-14.81055c-1.29009,0 -2.34673,-0.95071 -2.48437,-2.23437z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--Delete-->
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td>
                                        2
                                    </td>
                                    <td>Bangladesh
                                    </td>
                                    <td>Ngen It
                                    </td>
                                    <td>16.185.60.12
                                    </td>
                                    <td>@miya</td>
                                    <td>user@mail.com</td>
                                    <td><span class="badge badge-info">Active</span></td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#colorsViewModal">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                            fill="currentColor"></rect>
                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3"></rect>
                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3"></rect>
                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3"></rect>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--View-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#colorsEditModal">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--Edit-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                                    height="100" viewBox="0,0,256,256">
                                                    <g fill="#a1a5b7" fill-rule="nonzero" stroke="none"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                                                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                        font-family="none" font-weight="none" font-size="none"
                                                        text-anchor="none" style="mix-blend-mode: normal">
                                                        <g transform="scale(5.33333,5.33333)">
                                                            <path
                                                                d="M20.5,4c-0.49034,-0.00628 -0.95279,0.22749 -1.23848,0.62606c-0.28569,0.39856 -0.35854,0.9116 -0.19511,1.37394h-4.42578c-1.83725,0 -3.5577,0.91945 -4.57617,2.44922l-2.36719,3.55078h-0.19727c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h0.76367c0.12867,0.01945 0.25932,0.02208 0.38867,0.00781l2.47266,23.07813c0.29835,2.78234 2.67084,4.91406 5.46875,4.91406h14.81055c2.79791,0 5.1704,-2.13172 5.46875,-4.91406l2.47461,-23.07813c0.12677,0.01359 0.25475,0.01097 0.38086,-0.00781h0.77148c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381h-0.19727l-2.36719,-3.55078c-1.01929,-1.52894 -2.73955,-2.44922 -4.57617,-2.44922h-4.42578c0.16343,-0.46234 0.09058,-0.97538 -0.19511,-1.37394c-0.28569,-0.39856 -0.74814,-0.63234 -1.23848,-0.62606zM14.64063,9h18.71875c0.83737,0 1.61537,0.41622 2.08008,1.11328l1.25781,1.88672h-25.39453l1.25781,-1.88672c0.00065,-0.00065 0.0013,-0.0013 0.00195,-0.00195c0.46348,-0.69619 1.23938,-1.11133 2.07813,-1.11133zM11.66992,15h24.66016l-2.43945,22.76563c-0.13765,1.28366 -1.19624,2.23438 -2.48633,2.23438h-14.81055c-1.29009,0 -2.34673,-0.95071 -2.48437,-2.23437z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
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
    <div class="modal fade" id="colorsAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add SMTPS</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                                    <div class="card border rounded-0 mt-3">
                                        <p class="badge badge-info custom-badge">Info</span>
                                        <div class="card-body p-1 px-2">
                                            <div class="row modal_body_badge">
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label required">Country
                                                        Name</label>
                                                    <select class="form-select form-select-sm form-select-solid" name="country_id"
                                                        data-dropdown-parent="#colorsAddModal" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                    <div class="valid-feedback""> Looks good! </div>
                                                    <div class="invalid-feedback"> Please provide a Country Name. </div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Host</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="host" id="validationCustom01" placeholder="Enter Host" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Host</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Port</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="port" id="validationCustom01" placeholder="Enter Port" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Port</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01"
                                                        class="form-label required ">Encryption</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="encryption" id="validationCustom01" placeholder="Enter Encryption"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Encryption</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">User Name</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="username" id="validationCustom01" placeholder="Enter User Name"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter User Name</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Password</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="password" id="validationCustom01" placeholder="Enter Password"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Password</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">From
                                                        Address</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="from_address" id="validationCustom01"
                                                        placeholder="Enter From Address" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter From Address</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">From Name</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="from_name" id="validationCustom01" placeholder="Enter From Name"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter From Name</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Sender
                                                        Email</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="sender_email" id="validationCustom01"
                                                        placeholder="Enter Sender Email" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Sender Email</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Sender
                                                        Name</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="sender_name" id="validationCustom01"
                                                        placeholder="Enter Sender Name" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Sender Name</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required">Values</label>
                                                    <input type="text" pattern="#[0-9a-fA-F]{6}"
                                                        class="form-control form-control-solid form-control-sm" name="colorCode"
                                                        step="0.01" id="validationCustom01" placeholder="Enter Color Code"
                                                        required>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Please Enter a Valid Color Code (e.g., #RRGGBB)
                                                        Must 6 Ch </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label required">Status</label>
                                                    <select class="form-select form-select-sm form-select-solid" name="country_id"
                                                        data-dropdown-parent="#colorsAddModal" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select an status"
                                                        data-allow-clear="true" required>
                                                        <option></option>
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                    <div class="valid-feedback""> Looks good! </div>
                                                    <div class="invalid-feedback"> Please provide a Status. </div>
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
    <div class="modal fade" id="colorsEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Edit SMTPS</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                            <div class="row modal_body_badge">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="card border rounded-0 mt-3">
                                        <p class="badge badge-info custom-badge">Info</span>
                                        <div class="card-body p-1 px-2">
                                            <div class="row modal_body_badge">
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label required">Country
                                                        Name</label>
                                                    <select class="form-select form-select-sm form-select-solid" name="country_id"
                                                        data-dropdown-parent="#colorsAddModal" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true" required>
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                    <div class="valid-feedback""> Looks good! </div>
                                                    <div class="invalid-feedback"> Please provide a Country Name. </div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Host</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="host" id="validationCustom01" placeholder="Enter Host" value="Me" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Host</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Port</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="port" id="validationCustom01" placeholder="Enter Port" value="10.125.25" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Port</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01"
                                                        class="form-label required ">Encryption</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="encryption" id="validationCustom01" placeholder="Enter Encryption" value="5asd468a"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Encryption</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">User Name</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="username" id="validationCustom01" placeholder="Enter User Name" value="Ngen It"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter User Name</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Password</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="password" id="validationCustom01" placeholder="Enter Password" value="password"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Password</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">From
                                                        Address</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="from_address" id="validationCustom01"
                                                        placeholder="Enter From Address" value="Dhaka,Bangladesh" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter From Address</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">From Name</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="from_name" id="validationCustom01" placeholder="Enter From Name" value="Smtps Form"
                                                        required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter From Name</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Sender
                                                        Email</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="sender_email" id="validationCustom01"
                                                        placeholder="Enter Sender Email" value="sender@gmail.com" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Sender Email</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Sender
                                                        Name</label>
                                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                                        name="sender_name" id="validationCustom01"
                                                        placeholder="Enter Sender Name" value="Ngen It" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Sender Name</div>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <label for="validationCustom01" class="form-label required">Values</label>
                                                    <input type="text" pattern="#[0-9a-fA-F]{6}"
                                                        class="form-control form-control-solid form-control-sm" name="colorCode"
                                                        step="0.01" id="validationCustom01" value="56" placeholder="Enter Color Code"
                                                        required>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Please Enter a Valid Color Code (e.g., #RRGGBB)
                                                        Must 6 Ch </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label required">Status</label>
                                                    <select class="form-select form-select-sm form-select-solid" name="country_id"
                                                        data-dropdown-parent="#colorsAddModal" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select an status"
                                                        data-allow-clear="true" required>
                                                        <option></option>
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                    <div class="valid-feedback""> Looks good! </div>
                                                    <div class="invalid-feedback"> Please provide a Status. </div>
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
    <div class="modal fade" id="colorsViewModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">View </h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container px-0">
                        <div class="row modal_body_badge">
                            <div class="col-lg-12">
                                <div class="card border rounded-0 mt-3">
                                    <p class="badge badge-info custom-badge">Info</span>
                                    <div class="card-body p-1 px-2">
                                        <div class="row modal_body_badge">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold" title="Country Name">Coun. Name :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Bangladesh</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Host :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Ngen It</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Port :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>10.168.198</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Encryption :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>asd5646s58</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Username :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Ngen It</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Password :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>asd5646s58</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold" title="Form Address">For Address :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Dhaka</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold" title="Form Name">For Name :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>SMTPS</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Status :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Active</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold" title="Sender Name">Sen Name :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>SMTPS</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5">
                                                <p class="fw-bold" title="Sender Title">Sen Email :</p>
                                            </div>
                                            <div class="col-lg-8 col-sm-6">
                                                <p>sender@gmail.com</p>
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