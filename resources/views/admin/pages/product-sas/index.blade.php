@extends('admin.master')
@section('content')
<style>
    td{
        font-size: 12px !important;
    }
    </style>
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm p-0">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5 border-bottom bg-primary">
                        <div class="container-fluid px-4">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <p class="pe-2 m-0 text-white">SAS REF : <strong>SAS-251123-1</strong></p>
                                        <p class="m-0 text-white">Price Status : <strong>Rfq</strong></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-center">
                                        <h3 class="mb-0 text-white">Product SAS Creation</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="d-flex justify-content-end">
                                        <p class="m-0 text-white">Date : <strong>25/11/2023 16:39:41</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gx-1">
                            <div class="col-lg-4">
                                <div class="m-2" style="border-right: 1px solid #eeeeee;">
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div>
                                            <h4 class="text-info p-2 m-0"> Cost Of Goods</h4>
                                        </div>
                                        <div class="text-info p-2 m-0 d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#ProductSasEditModal"
                                                class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                                data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="fa-solid fa-expand"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="{{ route('solution-details.create') }}"
                                                class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="fa-solid fa-pen"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class=" p-2 m-0"><strong>Item:</strong> Vivotek NS9521 32-Channel VAST 2 Station
                                            Des NS9521 32-Channel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="m-2 p-3" style="border-right: 1px solid #eeeeee;">
                                    <div class="pb-2">
                                        <h4 class="text-info p-2 m-0 text-center"> Cost Of</h4>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="m-0 p-0 me-2">Goods</p>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="cog_price"
                                                    id="validationCustom01" placeholder="E.g: 000.00Tk">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="m-0 p-0 me-2">Sales</p>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="sales-value"
                                                    id="validationCustom01" placeholder="E.g: 000.00Tk" value="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="m-2 p-3">
                                    <div class="text-end pb-2">
                                        <h4 class="text-info p-2 m-0"> Competetitors & Comparison</h4>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="m-0 p-0 me-2">Lowest Source</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="m-0 p-0 me-2">Lowest Competetor</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <p class="m-0 p-0 me-2 text-end">TK: 2494.8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-1">
                            <div class="col-lg-4">
                                <div class="table-responsive p-2">
                                    <p class="text-center m-0 bg-light-primary p-2 fw-bold">Expenses Table</p>
                                    <table class="table table-rounded border gy-7 gs-7" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                        <tbody>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Bank & Remittance Charge - (1.5%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm bank_charge-value"
                                                            name="bank_charge" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="bank_charge-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Customs & Duty - (5.0%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm customs-value"
                                                            name="customs" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" >
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="customs-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">HR , Office & Utility Cost- (5.0%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm utility_cost-value"
                                                            name="utility_cost" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" >
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="utility_cost-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Sales / Consult. Comission - (5.0%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm sales_comission-value"
                                                            name="sales_comission" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="sales_comission-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Bank Loan / Liability / Debt - (5.0%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm liability-value"
                                                            name="liability" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="liability-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Loan / Capital / Partner Share - (5%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm capital_share-value"
                                                            name="capital_share" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="capital_share-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Management Cost - (5%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm management_cost-value"
                                                            name="management_cost" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="management_cost-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Tax / AIT / VAT - (10.0%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm tax-value"
                                                            name="tax" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="tax-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Shipping & Handling Cost- (5.0%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm shiping_cost-value"
                                                            name="shiping_cost" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="shiping_cost-value" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="table-responsive p-2">
                                    <p class="text-center m-0 bg-light-primary p-2 fw-bold">Offering Value Adding</p>
                                    <table class="table table-rounded border gy-7 gs-7" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                        <tbody>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Promo / Deal / Regular Discounts</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm "
                                                            name="regular_discounts" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="badge" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Deal Closing / Rebates</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm"
                                                            name="rebates" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="badge" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive p-2">
                                    <p class="text-center m-0 bg-light-primary p-2 fw-bold">Other Income</p>
                                    <table class="table table-rounded border gy-7 gs-7" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                        <tbody>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Net Profit - (5%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm"
                                                            name="net-profit" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="net-profit-percentage" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="d-flex align-items-center">
                                                <td width="60%">Gross Profit (%)</td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-outline form-control-sm"
                                                            name="gross-total" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk">
                                                    </div>
                                                </td>
                                                <td class="p-1">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="gross-percentage" id="validationCustom01"
                                                            placeholder="E.g: 000.00Tk" disable>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="table-responsive p-2 pb-0">
                                    <p class="text-center m-0 bg-light-primary p-2 fw-bold">Competetitors Details</p>
                                    <table class="table table-rounded table-striped border gy-7 gs-7" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                                <th>Name</th>
                                                <th>Compttr. Price</th>
                                                <th>Our Price</th>
                                                <th>Diff.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>a1securitycameras</td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>Vivotek</td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>Vivotek</td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                                <td><span class="text-muted">E.g: 000.00</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive p-2 pt-0">
                                    <p class="text-center m-0 bg-light-primary p-2 fw-bold">Sourcing Details</p>
                                    <table class="table table-rounded table-striped border gy-7 gs-7" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Estmt. Time</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Vivotek</td>
                                                <td><span>E.g: 000.00</span></td>
                                                <td><span>E.g: 000.00</span></td>
                                                <td><span>E.g: 000.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>Vivotek</td>
                                                <td><span>E.g: 000.00</span></td>
                                                <td><span>E.g: 000.00</span></td>
                                                <td><span>E.g: 000.00</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 pb-3">
                                <div class="d-flex justify-content-end me-2">
                                    <a href="" class="btn btn-sm btn-primary">Create</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="ProductSasEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 modal-dialog-lg  border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Edit Category</h5>
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
                                                data-dropdown-parent="#categorymentEditModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                                <option value="2">Nepal</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name"
                                                name="Ngen It" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Image
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="image" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Image </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Logo
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="logo" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Logo </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">
                                            </label>
                                            <div
                                                class="form-check form-check-custom form-check-warning form-check-solid form-check-sm mt-3 ms-4">
                                                <input class="form-check-input bg-primary" name="is_parent"
                                                    value="1" type="checkbox" id="flexRadioLg" />
                                                <label class="form-check-label" for="flexRadioLg">Is Parent</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-1 hide_parent_input" id="parentInputContainer">
                                            <label for="validationCustom01" class="form-label required">Parent
                                                Name</label>
                                            <select class="form-select form-select-solid" name="parent_id"
                                                data-dropdown-parent="#categorymentEditModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please Select Parent Name</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="validationCustom010"
                                                class="form-label required">Description</label>
                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description" required></textarea>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Description</div>
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
    <div class="modal fade" id="ProductSasModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 modal-dialog-lg border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">PRODUCT DETAILS </h5>
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
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold" title="Country Name">Name</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Bangladesh</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-5">
                                                        <p class="fw-bold">Parent Name</p>
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <p>Intern</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-5">
                                                        <p class="fw-bold">Image</p>
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
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
                                                    <div class="col-lg-7 col-sm-5">
                                                        <p class="fw-bold">Logo</p>
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
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
