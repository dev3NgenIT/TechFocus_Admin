@extends('admin.master')
@section('content')
    <div class="container h-100">
        <h1 class="text-center bg-primary rounded-pill w-25 mx-auto text-white p-2">Employee Leave Details</h1>
        <div class="card mt-6 rounded-0 mb-6">
			<div class="d-flex justify-content-end mt-10 me-9">
				<a href="#" class="btn btn-danger fw-bold btn-sm rounded-0"
					data-bs-toggle="modal" data-bs-target="#MakeALeave"><i
						class="fa-solid fa-plus"></i> Make A Leave</a>
				<a href="#" class="btn btn-primary fw-bold btn-sm rounded-0"
					data-bs-toggle="modal" data-bs-target="#giveApproval"><i
						class="fa-solid fa-check"></i> Give Approval</a>
			</div>
            <div class="card-body rounded-0 pt-3">
                <div class="row g-5 g-xl-8 mb-2">
                    <div class="col-xl-6">
                        <div class="card card-xxl-stretch mb-5 mb-xl-8 rounded-0 rounded-0" style="background-color: #CBF0F4">
                            <div class="card-body d-flex flex-column rounded-0 rounded-0">
                                <div class="d-flex flex-column mb-7">
                                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Employe Status</a>
                                </div>
                                <div class="row g-0">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 me-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">Probation</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Job Status</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 ms-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z"
                                                                fill="currentColor"></path>
                                                            <path opacity="0.3"
                                                                d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">01 Dec 23</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Next Evulation</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">Fronted Developer</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Designation</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center ms-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z"
                                                                fill="currentColor"></path>
                                                            <path opacity="0.3"
                                                                d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">08 Nov 23</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Joinning</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-xxl-stretch mb-5 mb-xl-8 rounded-0" style="background-color: #CBF0F4">
                            <div class="card-body d-flex flex-column rounded-0">
                                <div class="d-flex justify-content-between align-items-center mb-7">
                                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Leave
                                        Description</a>
                                </div>
                                <div class="row g-0">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 me-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-7 text-gray-600 fw-bold">Yearly Leave</div>
                                                <div class="fs-7 text-gray-600 fw-bold">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 ms-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z"
                                                                fill="currentColor"></path>
                                                            <path opacity="0.3"
                                                                d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-7 text-gray-600 fw-bold">Leave Availed</div>
                                                <div class="fs-7 text-gray-600 fw-bold">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-7 text-gray-600 fw-bold">Leave Due</div>
                                                <div class="fs-7 text-gray-600 fw-bold">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center ms-2">
                                            <div class="symbol symbol-40px me-3 rounded-0">
                                                <div class="symbol-label bg-white bg-opacity-50 rounded-0">
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z"
                                                                fill="currentColor"></path>
                                                            <path opacity="0.3"
                                                                d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-7 text-gray-600 fw-bold">Total</div>
                                                <div class="fs-7 text-gray-600 fw-bold">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-xl-8 rounded-0 shadow-sm">
                            <div class="card-header border-0 bg-primary py-5 rounded-0">
                                <h3 class="card-title fw-bolder text-white text-center">Casual Leave</h3>
                                <div class="card-toolbar">
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <div class="separator my-2"></div>
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications">
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="card-p mt-n20 position-relative">
                                    <div class="row g-0 mt-7">
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 me-7 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                                        rx="1.5" fill="currentColor"></rect>
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                        fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Yearly Leave</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Leave Availed</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 me-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-danger fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Leave Due</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-0">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.3"
                                                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Total Leave</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-xl-8 rounded-0 shadow-sm">
                            <div class="card-header border-0 bg-primary py-5 rounded-0">
                                <h3 class="card-title fw-bolder text-white text-center">Earned Leave</h3>
                                <div class="card-toolbar">
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <div class="separator my-2"></div>
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications">
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="card-p mt-n20 position-relative">
                                    <div class="row g-0 mt-7">
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 me-7 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                                        rx="1.5" fill="currentColor"></rect>
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                        fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Yearly Leave</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Leave Availed</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 me-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-danger fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Leave Due</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-0">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.3"
                                                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Total Leave</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-5 mb-xl-8 rounded-0 shadow-sm">
                            <div class="card-header border-0 bg-primary py-5 rounded-0">
                                <h3 class="card-title fw-bolder text-white text-center">Medical Leave</h3>
                                <div class="card-toolbar">
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <div class="separator my-2"></div>
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications">
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="card-p mt-n20 position-relative">
                                    <div class="row g-0 mt-7">
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 me-7 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                                        rx="1.5" fill="currentColor"></rect>
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                        fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Yearly Leave</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Leave Availed</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col bg-light-primary px-6 py-8 rounded-0 me-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-danger fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Leave Due</span>
                                                <span>0</span>
                                            </a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-0">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.3"
                                                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <a href="#"
                                                class="text-primary fw-bold fs-6 d-flex justify-content-between align-items-center">
                                                <span>Total Leave</span>
                                                <span>0</span>
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
    {{-- Add Modal --}}
    <div class="modal fade" id="MakeALeave" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0 rounded-0 bg-primary">
                    <h5 class="modal-title text-white">Make A Leave Form</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark text-white"></i>
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
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" placeholder="E.g: Md. Your Name" required>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Type Of Leave
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="type_of_leave" placeholder="E.g: Casual" required>
                                            <div class="invalid-feedback"> Please Enter The Type </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Designation
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="designation" placeholder="E.g: Frontend Developer" required>
                                            <div class="invalid-feedback"> Please Position/ Designation </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Company
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="company" placeholder="E.g: NGen IT" required>
                                            <div class="invalid-feedback"> Please Enter Company </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Leave Start
                                                Date
                                            </label>
                                            <input type="date" class="form-control form-control-solid form-control-sm"
                                                name="leave_start_date" placeholder="E.g: 10/11/23" required>
                                            <div class="invalid-feedback"> Please Enter Leave Start Date </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Leave End
                                                Date
                                            </label>
                                            <input type="date" class="form-control form-control-solid form-control-sm"
                                                name="leave_end_date" placeholder="E.g: 11/11/23" required>
                                            <div class="invalid-feedback"> Please Enter Leave End Date </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Total Days
                                            </label>
                                            <input type="number" class="form-control form-control-solid form-control-sm"
                                                name="total_days" placeholder="E.g: 5 Day" required>
                                            <div class="invalid-feedback"> Please Enter Total Day </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Job Status
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="job_status" placeholder="E.g: Probation" required>
                                            <div class="invalid-feedback"> Please Enter Job Status </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Reporting On
                                            </label>
                                            <input type="number" class="form-control form-control-solid form-control-sm"
                                                name="reporting_on" placeholder="E.g: 10/10/23" required>
                                            <div class="invalid-feedback"> Please Enter Reporting On </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Leave
                                                Explanation
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="leave_explanation" placeholder="E.g: For Sick" required>
                                            <div class="invalid-feedback"> Please Enter Leave Explanation</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Substitute
                                                Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="substitute_during_leave" placeholder="E.g: Substitute Name"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Substitute Name</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Leave Address
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="leave_address" placeholder="E.g: Dhaka" required>
                                            <div class="invalid-feedback"> Please Enter Leave Address</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Is Between
                                                Holidays
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="is_between_holidays" placeholder="E.g: No/Yes" required>
                                            <div class="invalid-feedback"> Please Enter Is Holiday Or Not?</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Is Between
                                                Holidays
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="is_between_holidays" placeholder="E.g: No/Yes" required>
                                            <div class="invalid-feedback"> Please Enter Is Holiday Or Not?</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Leave Contact
                                                No
                                            </label>
                                            <input type="number" class="form-control form-control-solid form-control-sm"
                                                name="is_between_holidays" placeholder="E.g: 015 **** ****" required>
                                            <div class="invalid-feedback"> Please Enter Is Holiday Or Not?</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01" class="form-label mb-0">Included Open Saturday
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="included_open_saturday" placeholder="E.g: No/Yes">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Substitute
                                                Signature
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="substitute_signature" required>
                                            <div class="invalid-feedback"> Please Provide Substitute Signature?</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Applicant
                                                Signature
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="applicant_signature" required>
                                            <div class="invalid-feedback"> Please Provide Substitute Signature?</div>
                                        </div>
                                        {{-- <div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Leave Position
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="leave_position" placeholder="Frontend" required>
												<div class="invalid-feedback"> Please Provide Leave Position?</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Casual Leave Due
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="casual_leave_due_as_on" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Provide Casual Leave Due</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Casual Leave Availed
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="casual_leave_availed" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Casual Leave Availed</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Casual Balance Due
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="casual_balance_due" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Casual Balance Due</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Earned Leave Due
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="earned_leave_due_as_on" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Earned Leave Due</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Earned Leave Availed
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="earned_leave_availed" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Earned Leave Availed</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Earned Balance Due
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="earned_balance_due" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Earned Balance Due</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Medical Leave Due As
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="medical_leave_due_as_on" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Medical Leave Due As</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Medical Leave Availed
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="medical_leave_availed" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Medical Leave Availed</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Medical Balance Due
												</label>
												<input type="text" class="form-control form-control-solid form-control-sm"
													name="medical_balance_due" placeholder="5 Day" required>
												<div class="invalid-feedback"> Please Medical Balance Due</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Checked By
												</label>
												<input type="file" class="form-control form-control-solid form-control-sm"
													name="checked_by" placeholder="Checked By" required>
												<div class="invalid-feedback"> Please Checked By</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Recommended By
												</label>
												<input type="file" class="form-control form-control-solid form-control-sm"
													name="recommended_by" placeholder="Recommended By" required>
												<div class="invalid-feedback"> Please Recommended By</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Reviewed By
												</label>
												<input type="file" class="form-control form-control-solid form-control-sm"
													name="reviewed_by" placeholder="Reviewed By" required>
												<div class="invalid-feedback"> Please Reviewed By</div>
											</div>
											<div class="col-md-3 mb-1">
												<label for="validationCustom01" class="form-label required mb-0">Approved By
												</label>
												<input type="file" class="form-control form-control-solid form-control-sm"
													name="approved_by" placeholder="Approved By" required>
												<div class="invalid-feedback"> Please Approved By</div>
											</div>
											<div class="col-md-6">
												<label for="validationCustom04" class="form-label required">Application Status</label>
												<select class="form-select form-select-sm form-select-solid" name="application_status"
													data-dropdown-parent="#leaveAddModal" data-control="select2"
													data-placeholder="Select an Status" data-allow-clear="true" required>
													<option></option>
													<option value="approved">approved</option>
													<option value="rejected">rejected</option>
													<option value="pending">pending</option>
												</select>
												<div class="valid-feedback""> Looks good! </div>
												<div class="invalid-feedback"> Please Select Application Status</div>
											</div>
											<div class="col-md-6 mb-1">
												<label for="validationCustom01" class="form-label ">Url
												</label>
												<input type="url" class="form-control form-control-solid form-control-sm" placeholder="Enter A Url"
													name="website_url" >
											</div>
											<div class="col-md-12">
												<label for="validationCustom010"
													class="form-label">Note</label>
												<textarea rows="1" name="note" class="form-control form-control-sm form-control-solid"
													placeholder="Enter Note" ></textarea>
											</div> --}}
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
    <div class="modal fade" id="giveApproval" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0 rounded-0 bg-primary ">
                    <h5 class="modal-title ps-5 text-white">Give Approval</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark text-white"></i>
                    </div>
                    <!-- End Close button in the header -->
                </div>
                <form action="" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="row">
							<div class="col-lg-12">
								<div class="table-responsive rounded-0">
									<table class="table table-hover table-rounded table-striped border gy-7 gs-7 rounded-0">
										<thead class="bg-light-primary tex-white rounded-0">
											<tr class="fw-bold fs-6 text-s-800 border-bottom-2 border-sky-600-200">
												<th class="p-2 px-2">Leave Position</th>
												<th class="p-2 px-2">Leave Due As On</th>
												<th class="p-2 px-2">Leave Availed</th>
												<th class="p-2 px-2">Balance Due</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="Earned Leave" value="Earned Leave" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="Casual Leave" value="Casual Leave" required>
														<div class="invalid-feedback"> Please Enter Casual Leave </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="Medical Leave" value="Medical Leave" required>
														<div class="invalid-feedback"> Please Enter Medical Leave </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
												<td>
													<div class="">
														<input type="text"
															class="form-control form-control form-control-sm rounded-0"
															name="name" placeholder="E.g: Md. Your Name" required>
														<div class="invalid-feedback"> Please Enter Name </div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row gx-0 align-items-center">
							<div class="col-lg-6 bg-light-primary p-2">
								<span>Checked By: (HR & Admin)</span>
							</div>
							<div class="col-lg-6">
								<div class="">
									<input type="file"
										class="form-control form-control form-control-sm rounded-0"
										name="checked_by" placeholder="Earned Leave" value="Earned Leave" required>
									<div class="invalid-feedback"> Please Enter Name </div>
								</div>
							</div>
							<div class="col-lg-6 bg-light-primary p-2">
								<span>Recommended By: (CEO & Head)</span>
							</div>
							<div class="col-lg-6">
								<div class="">
									<input type="file"
										class="form-control form-control form-control-sm rounded-0"
										name="recommended_by" placeholder="Earned Leave" value="Earned Leave" required>
									<div class="invalid-feedback"> Please Enter Name </div>
								</div>
							</div>
							<div class="col-lg-6 bg-light-primary p-2">
								<span>Recived By: (OD)</span>
							</div>
							<div class="col-lg-6">
								<div class="">
									<input type="File"
										class="form-control form-control form-control-sm rounded-0"
										name="reviewed_by" placeholder="Earned Leave" value="Earned Leave" required>
									<div class="invalid-feedback"> Please Enter Name </div>
								</div>
							</div>
							<div class="col-lg-6 bg-light-primary p-2">
								<span>Approved By: (MD)</span>
							</div>
							<div class="col-lg-6">
								<div class="">
									<input type="file"
										class="form-control form-control form-control-sm rounded-0"
										name="approved_by" placeholder="Earned Leave" value="Earned Leave" required>
									<div class="invalid-feedback"> Please Enter Name </div>
								</div>
							</div>
							<div class="col-lg-6 p-2 pt-6">
								<span>Application Status</span>
							</div>
							<div class="col-lg-6">
								<div class="mt-6">
									<div class="d-flex flex-row fv-row align-items-center">
										<div class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input me-3" name="approved" type="radio" value="1" id="kt_docs_formvalidation_radio_option_1" />
											<label class="form-check-label" for="kt_docs_formvalidation_radio_option_1">
												<div class="fw-bolder text-gray-800">Approved</div>
											</label>
										</div>
										<div class="form-check form-check-custom form-check-solid ">
											<input class="form-check-input me-3" name="rejected" type="radio" value="2" id="kt_docs_formvalidation_radio_option_2" />
											<label class="form-check-label" for="kt_docs_formvalidation_radio_option_2">
												<div class="fw-bolder text-gray-800">Rejected</div>
											</label>
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
@endsection
