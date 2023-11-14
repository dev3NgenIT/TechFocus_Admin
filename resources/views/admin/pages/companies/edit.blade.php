@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm px-0">
                <div class="card card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5 shadow-lg bg-light-primary px-0"
                        style="min-height: 45px;">
                        <div class="container px-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center">
                                    <div class="card-title ps-3">
                                        <h2 class="text-start">Company Edit From</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 text-lg-end text-sm-center">
                                    <a href="{{ route('companies.index') }}" class="btn btn-icon btn-primary w-auto px-3 rounded-0">
                                        <i class="las la-arrow-left fs-2 me-2"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required mb-0">Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name"
                                                    id="validationCustom01" placeholder="E.g : Your Name" required>
                                                <div class="invalid-feedback"> Please Enter Name </div>
                                            </div>




                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Industry</label>
                                                <select class="form-select form-select-solid form-select-sm" name="industry"
                                                data-control="select2"  multiple="multiple" data-placeholder="Select an option" 
                                                data-allow-clear="true"  required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                                <div class="invalid-feedback"> Please provide a Industry. </div>
                                            </div>




                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Country</label>
                                                <select class="form-select form-select-solid form-select-sm" name="country"
                                                data-control="select2"  multiple="multiple" data-placeholder="Select an option" data-allow-clear="true" required>
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                                <div class="invalid-feedback"> Please provide a Country. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Location</label>
                                                <select class="form-select form-select-solid form-select-sm"   name="location"
                                                data-control="select2"  multiple="multiple" data-hide-search="false" data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                                <div class="invalid-feedback"> Please provide a Location. </div>
                                            </div>








                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Phone</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="phone"
                                                    id="validationCustom01" placeholder="E.g: 017 **** ****">
                                                <div class="invalid-feedback"> Please provide a Phone. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Email</label>
                                                <input type="email"
                                                    class="form-control form-control-solid form-control-sm" name="Email"
                                                    id="validationCustom01" placeholder="E.g: yourmail@mail.com">
                                                <div class="invalid-feedback"> Please provide a Email. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Website</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="Email"
                                                    id="validationCustom01" placeholder="E.g: yourwebsite.com">
                                                <div class="invalid-feedback"> Please provide a Website. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Logo
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="logo"
                                                    id="validationCustom01">
                                                <div class="invalid-feedback"> Please Enter Logo </div>
                                            </div>

                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Postal Code</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="postal_code"
                                                    id="validationCustom01" placeholder="E.g: 1265">
                                                <div class="invalid-feedback"> Please provide a Postal Code. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact Name</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="contact_name"
                                                    id="validationCustom01" placeholder="E.g: Your Contact Name">
                                                <div class="invalid-feedback"> Please provide a Contact Name. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact Email</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="contact_email"
                                                    id="validationCustom01" placeholder="E.g: demo@mail.com">
                                                <div class="invalid-feedback"> Please provide a Contact Email. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact Phone</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="contact_phone"
                                                    id="validationCustom01" placeholder="E.g: 015 **** ****">
                                                <div class="invalid-feedback"> Please provide a Contact Phone. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Headquarter Country
                                                    Name</label>
                                                <select class="form-select form-select-sm form-select-solid" name="headquarter_country_id" data-control="select2" 
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                                <div class="invalid-feedback"> Please provide a Headquater Country Name. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Founder</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="founder"
                                                    id="validationCustom01" placeholder="E.g: Founder">
                                                <div class="invalid-feedback"> Please provide a Founder. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">CEO</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="ceo"
                                                    id="validationCustom01" placeholder="E.g: CEO">
                                                <div class="invalid-feedback"> Please provide a CEO. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Year Founded</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="year_founded"
                                                    id="validationCustom01" placeholder="E.g: 1920">
                                                <div class="invalid-feedback"> Please provide a Year Founded. </div>
                                            </div>

                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Mission</label>
                                                <textarea rows="1" name="textarea_input" name="mission" class="form-control form-control-sm form-control-solid"></textarea>
                                                <div class="invalid-feedback"> Please provide a Year Founded. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Vision</label>
                                                <textarea rows="1" name="textarea_input" name="vision" class="form-control form-control-sm form-control-solid"></textarea>
                                                <div class="invalid-feedback"> Please provide a Vision. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">History</label>
                                                <textarea rows="1" name="textarea_input" name="history" class="form-control form-control-sm form-control-solid"></textarea>
                                                <div class="invalid-feedback"> Please provide a History. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">About</label>
                                                <textarea rows="1" name="textarea_input" name="about" class="form-control form-control-sm form-control-solid"></textarea>
                                                <div class="invalid-feedback"> Please provide a About. </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Headquarter</label>
                                                <textarea rows="1" name="textarea_input" name="headquarter" class="form-control form-control-sm form-control-solid"></textarea>
                                                <div class="invalid-feedback"> Please provide a Headquarter. </div>
                                            </div>

                                            <div class="col-lg-12 mt-5">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

