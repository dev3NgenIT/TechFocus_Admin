@extends('admin.master')
@section('content')
<style>
    .img-thumb {
        border: 2px solid none;
        border-radius: 3px;
        padding: 1px;
        cursor: pointer;
        width: 70px;
        height: 60px;
        border-radius: 0.475rem;
    }

    .img-thumb-wrapper {
        display: inline-block;
        margin: 0px 10px 0 0;
    }

    .remove {
        display: block;
        background: #cf054f;
        border: 1px solid none;
        color: white;
        text-align: center;
        cursor: pointer;
        font-size: 12px;
        padding: 2px 5px;
    }

    .remove:hover {
        background: white;
        color: black;
    }

    .dropzone-field {
        border: 1px dashed #009ef7;
        display: flex;
        flex-wrap: wrap; /* Allow multiple images in a row */
        align-items: center;
        border-radius: 4px;
        padding: 10px 5px;
        justify-content: center;
    }

    #files {
        display: none;
    }

    .custom-file-upload {
        border: 0px solid #ccc;
        padding: 6px 12px;
        cursor: pointer;
        background-color: transparent;
    }

    .custom-file-upload i {
        margin-right: 5px;
    }
</style>
    <div class="container h-100">
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
                                    <div id="kt_datatable_example_1_export" class="d-none"></div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2 class="text-center">Solution Details</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        {{-- <span class="svg-icon svg-icon-1 position-absolute ms-4"></span> --}}
                                        Export Report
                                    </button>
                                    <a href="{{ route('solution-details.create') }}" type="button"
                                        class="btn btn-sm btn-light-success rounded-0">
                                        Add New
                                    </a>
                                    <div id="kt_datatable_example_1_export_menu"
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="copy">
                                                Copy to clipboard
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="excel">
                                                Export as Excel
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="csv">
                                                Export as CSV
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                                Export as PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body mb-4">
                        <form action="" method="" enctype="multipart/form-data">
                            <h3>Upload images</h3>
                            <div class="dropzone-field">
                                <label for="files" class="custom-file-upload">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0"><i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i></p>
                                        <h5 class="mb-0">Drop files here or click to upload. <br>
                                            <span class="text-muted" style="font-size: 10px">Upload 10 File</span>
                                        </h5>
                                    </div>
                                </label>
                                <input type="file" id="files" name="files[]" multiple class="form-control" style="display: none;" onchange="console.log(this.value)" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<div class=\"img-thumb-wrapper card shadow\">" +
                            "<img class=\"img-thumb\" src=\"" + e.target.result +
                            "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\">Remove</span>" +
                            "</div>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".img-thumb-wrapper").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    });
</script>

@endpush
