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
                                        <h2 class="text-center">SEO</h2>
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
                                        data-bs-target="#seoAddModal">
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
                                    <th class="" width="20%">Page Name</th>
                                    <th class="" width="25%">Meta Title</th>
                                    <th class="" width="20%">Page Link</th>
                                    <th class="" width="20%">Google Verification Code</th>
                                    <th class="text-center" width="10%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                <tr class="odd">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Home Page
                                    </td>
                                    <td>Tech Foucs Leading Page
                                    </td>
                                    <td>https://demopage.com
                                    </td>
                                    <td>
                                        #adsad5684698
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#seoViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                            <!--View-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#seoEditModal">
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
                                <tr class="Even">
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Main Page
                                    </td>
                                    <td>Tech Foucs Leading Page
                                    </td>
                                    <td>https://demopage.com
                                    </td>
                                    <td>
                                        #adsad5684698
                                    </td>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#seoViewModal">
                                            <i class="fa-solid fa-expand"></i>
                                            <!--View-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#SeoEditModal">
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
    <div class="modal fade" id="seoAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add SEO</h5>
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
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#seoAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="valid-feedback""> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Page Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="page_name" id="validationCustom01" placeholder="e.g : Home Page" required>
                                            <div class="invalid-feedback"> Please Page Name </div>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Page Link
                                            </label>
                                            <input type="url" class="form-control form-control-solid form-control-sm"
                                                name="page_link" id="validationCustom01" placeholder="e.g: http://demo.com" required>
                                            <div class="invalid-feedback"> Please Enter Image </div>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Meta Title
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="meta_title" id="validationCustom01" placeholder="e.g: Your Meta Title" required>
                                            <div class="invalid-feedback"> Please Enter Meta Title </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Meta Keyword
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="meta_keywords" id="validationCustom01" placeholder="e.g: Meta Keywords" required>
                                            <div class="invalid-feedback"> Please Enter Meta Keywords </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom01" class="form-label">Meta Keyword</label>
                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" 
                                            data-allow-clear="true" multiple="multiple" name="meta_keywords" required>
                                            <option></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            </select>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">Meta Description</label>
                                            <textarea rows="1" name="meta_description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Meta Description" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Meta Description</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">Google Analytics Code</label>
                                            <textarea rows="1" name="google_analytics_code" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Google Analytics Code" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Google Analytics Code</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">google Verification Code</label>
                                            <textarea rows="1" name="google_verification_code" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Google Verification Code" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Google Verification Code</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">Google Adsense Code</label>
                                            <textarea rows="1" name="google_adsense_code" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Google Adsense Code" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Google Adsense Code</div>
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
    <div class="modal fade" id="seoEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Edit seo</h5>
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
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#seoEditModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                            </select>
                                            <div class="valid-feedback""> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Page Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="page_name" id="validationCustom01" placeholder="e.g : Home Page" required>
                                            <div class="invalid-feedback"> Please Page Name </div>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Page Link
                                            </label>
                                            <input type="url" class="form-control form-control-solid form-control-sm"
                                                name="page_link" id="validationCustom01" placeholder="e.g: http://demo.com" required>
                                            <div class="invalid-feedback"> Please Enter Image </div>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Meta Title
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="meta_title" id="validationCustom01" placeholder="e.g: Your Meta Title" required>
                                            <div class="invalid-feedback"> Please Enter Meta Title </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Meta Keyword
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="meta_keywords" id="validationCustom01" placeholder="e.g: Meta Keywords" required>
                                            <div class="invalid-feedback"> Please Enter Meta Keywords </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom01" class="form-label">Meta Keyword</label>
                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" 
                                            data-allow-clear="true" multiple="multiple" name="meta_keywords" required>
                                            <option></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            </select>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">Meta Description</label>
                                            <textarea rows="1" name="meta_description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Meta Description" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Meta Description</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">Google Analytics Code</label>
                                            <textarea rows="1" name="google_analytics_code" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Google Analytics Code" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Google Analytics Code</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">google Verification Code</label>
                                            <textarea rows="1" name="google_verification_code" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Google Verification Code" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Google Verification Code</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010"
                                                class="form-label required">Google Adsense Code</label>
                                            <textarea rows="1" name="google_adsense_code" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Google Adsense Code" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Google Adsense Code</div>
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
    <div class="modal fade" id="seoViewModal" data-backdrop="static">
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
                                                        <p class="fw-bold" title="Page Name">Page Name :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Home Page</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Meta Title :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Intern</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Page Link :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <a href="#">
                                                            https://img.freepik.com/free-vector/
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold">Google Verification Code :</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>
                                                            #asdasdas56
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div>
                                                    <p class="fw-bold">Meta Description :</p>
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
@endsection

@push('scripts')
    {{-- Hide the Parent Name Input Field On Checkbox Click Start  --}}
    <script>
        $(document).ready(function() {
            // Toggle visibility on checkbox change
            $('#flexRadioLg').change(function() {
                if (this.checked) {
                    $('#parentInputContainer').hide();
                } else {
                    $('#parentInputContainer').show();
                }
            });
        });
    </script>
    {{-- Hide the Parent Name Input Field On Checkbox Click End  --}}
    <script>
        "use strict";

        // Class definition
        var KTDatatablesButtons = function() {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            var initDatatable = function() {
                // Set date data order
                const tableRows = table.querySelectorAll('tbody tr');

                tableRows.forEach(row => {
                    const dateRow = row.querySelectorAll('td');
                    const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                        .format(); // select date from 4th column in table
                    dateRow[3].setAttribute('data-order', realDate);
                });

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 10,
                });
            }

            // Hook export buttons
            var exportButtons = () => {
                const documentTitle = 'Customer Orders Report';
                var buttons = new $.fn.dataTable.Buttons(table, {
                    buttons: [{
                            extend: 'copyHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'excelHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'csvHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'pdfHtml5',
                            title: documentTitle
                        }
                    ]
                }).container().appendTo($('#kt_datatable_example_1_export'));

                // Hook dropdown menu click event to datatable export buttons
                const exportButtons = document.querySelectorAll(
                    '#kt_datatable_example_1_export_menu [data-kt-export]');
                exportButtons.forEach(exportButton => {
                    exportButton.addEventListener('click', e => {
                        e.preventDefault();

                        // Get clicked export value
                        const exportValue = e.target.getAttribute('data-kt-export');
                        const target = document.querySelector('.dt-buttons .buttons-' +
                            exportValue);

                        // Trigger click event on hidden datatable export buttons
                        target.click();
                    });
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                filterSearch.addEventListener('keyup', function(e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Public methods
            return {
                init: function() {
                    table = document.querySelector('#kt_datatable_example_1');

                    if (!table) {
                        return;
                    }

                    initDatatable();
                    exportButtons();
                    handleSearchDatatable();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTDatatablesButtons.init();
        });
    </script>
    <script>
        // const button = document.getElementById('kt_docs_sweetalert_state_error');

        $(document).on("click", ".delete", function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        });
    </script>
@endpush
