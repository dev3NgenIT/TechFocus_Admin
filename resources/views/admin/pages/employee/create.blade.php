@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5 rounded-0">
                    <div class="main_bg card-header py-2 main_bg align-items-center">
                        <div class="col-lg-5 col-sm-12">
                            <div>
                                <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ URL::previous() }}">
                                    <i class="fa-solid fa-arrow-left text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12 d-flex justify-content-end">
                            <h4 class="text-white p-0 m-0 fw-bold">Employee Add</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Name</label>
                                    <input name="name" class="form-control form-control-sm form-control-solid"
                                        placeholder="Enter Brand Logo" type="text" required />
                                    <div class="invalid-feedback"> Please Enter Brand Logo.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Email</label>
                                    <input name="email" class="form-control form-control-sm form-control-solid"
                                        placeholder="Enter Brand Logo" type="email" required />
                                    <div class="invalid-feedback"> Please Enter Brand Logo.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Passowrd</label>
                                    <input name="password" class="form-control form-control-sm form-control-solid"
                                        placeholder="Enter Brand Logo" type="password" required />
                                    <div class="invalid-feedback"> Please Enter Brand Logo.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Select Role</label>
                                    <select class="form-select form-select-solid form-select-sm"
                                        name="field2" id="field2" multiple
                                        multiselect-search="true" multiselect-select-all="true"
                                        multiselect-max-items="3"
                                         data-placeholder="Select A Option"
                                        onchange="console.log(this.selectedOptions)">
                                        <option value="admin">Admin</option>
                                        <option value="modarator">Modarator</option>
                                        <option value="User">User</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Select Role.</div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
