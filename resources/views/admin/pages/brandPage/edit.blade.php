@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>All Rows</h1>
                            </div>
                            <div>
                                <h1>All Rows</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body"></div>
                </div> --}}
                <div class="card my-5 rounded-0">
                    <div class="card-header card-header-stretch">
                        <h2 class="card-title">All Rows</h2>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#row-with-image">Row With Image</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#row-with-list">Row With List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="row-with-image" role="tabpanel">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex suscipit, possimus atque, tenetur, similique hic optio quod recusandae at accusantium amet enim? Animi, earum repudiandae repellendus culpa ducimus molestiae nihil!
                            </div>
                
                            <div class="tab-pane fade" id="row-with-list" role="tabpanel">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur expedita quis, velit hic quas maxime perferendis iste atque incidunt officia eos provident magni, obcaecati nam optio molestiae voluptatibus recusandae delectus odio omnis dolores. Quibusdam reprehenderit voluptatem consequuntur dolorum impedit, corporis, amet quam dolores deleniti voluptatibus quaerat, omnis vitae! Architecto inventore quis unde accusantium suscipit vitae ullam odit! Molestiae, deserunt ea?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal --}}
    <div class="modal fade" id="categoryAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Category</h5>
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
                                                data-dropdown-parent="#categoryAddModal" data-control="select2"
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
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name" required>
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
                                                data-dropdown-parent="#categoryAddModal" data-control="select2"
                                                data-placeholder="Select an Parent" data-allow-clear="true" required>
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
                                            <div class="invalid-feedback"> Please Enter description</div>
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
    <div class="modal fade" id="categorymentEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
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
                                            <div class="valid-feedback""> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name" name="Ngen It" required>
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
    <div class="modal fade" id="categoryViewModal" data-backdrop="static">
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
