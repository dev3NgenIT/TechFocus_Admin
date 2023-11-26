<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/create-account.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('backend/assets/js/boot-multi.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/documentation/editors/tinymce/plugins.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/js/fileinput.min.js"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"828601deb871bc2d","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
{{-- <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script> --}}
<!--end::Page Custom Javascript-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '.kt_docs_tinymce_plugins'
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '.overview'
        });
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
    $(document).ready(function() {
        $('.nav-tabs a').click(function() {
            $(this).tab('show');
        });
    });
</script>
<script>
    // Stepper lement
    var element = document.querySelector("#kt_stepper_example_clickable");


    // Initialize Stepper
    var stepper = new KTStepper(element);


    // Handle navigation click
    stepper.on("kt.stepper.click", function(stepper) {
        stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
    });


    // Handle next step
    stepper.on("kt.stepper.next", function(stepper) {
        stepper.goNext(); // go next step
    });


    // Handle previous step
    stepper.on("kt.stepper.previous", function(stepper) {
        stepper.goPrevious(); // go previous step
    });
</script>
<script>
    //---------Sidebar list Show Hide----------
    $(document).ready(function() {


        $('#dealId').click(function() {
            $("#dealExpand").toggle(this.checked);
        });


        $('#rfqId').click(function() {


            $("#rfqExpand").toggle('slow');


        });

    });
</script>
<script>
    $('.stock_select').on('change', function() {


        var stock_value = $(this).find(":selected").val();


        if (stock_value == 'available') {
            $(".qty_display").removeClass("d-none");
            $(".qty_required").prop('required', true);
        } else if (stock_value == 'limited') {
            $(".qty_display").removeClass("d-none");
            $(".qty_required").prop('required', true);
        } else {
            $(".qty_display").addClass("d-none");
            $(".qty_required").prop('required', false);
        }


    });


    $('.price_select').on('change', function() {


        var price_value = $(this).find(":selected").val();
        if (price_value == 'rfq') {
            // alert(price_value);
            $(".rfq_price").removeClass("d-none");
            $(".offer_price").addClass("d-none");
            $(".price").addClass("d-none");
        } else if (price_value == 'offer_price') {
            $(".offer_price").removeClass("d-none");
            $(".rfq_price").addClass("d-none");
            $(".price").addClass("d-none");
        } else {
            $(".price").removeClass("d-none");
            $(".offer_price").addClass("d-none");
            $(".rfq_price").addClass("d-none");
        }


    });
</script>
<script>
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
        url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 10,
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });
</script>
<script>
    // The DOM elements you wish to replace with Tagify
    var input1 = document.querySelector("#kt_tagify_1");
    var input2 = document.querySelector("#kt_tagify_2");

    // Initialize Tagify components on the above inputs
    new Tagify(input1);
    new Tagify(input2);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the checkbox and colors input container
        var checkbox = document.getElementById('dealCheckbox');
        var dealsInputContainer = document.getElementById('dealsInputContainer');

        // Add change event listener to the checkbox
        checkbox.addEventListener('change', function() {
            // Toggle the visibility of the colors input field based on checkbox state
            dealsInputContainer.style.display = checkbox.checked ? 'block' : 'none';
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Function to validate and switch tabs
        function validateAndSwitchTab(targetTabId) {
            let isValid = true;


            // Get the index of the tab to be shown
            const activeTabHref = $('.tab-trigger.active').attr('href');
            $(activeTabHref).find('input, textarea, select').each(function() {
                var $field = $(this);


                // Check if it's a Select2 element
                var isSelect2 = $field.hasClass('select2-hidden-accessible');


                if ($field.prop('required') && $field.val() === '') {
                    isValid = false;


                    if (isSelect2) {
                        // Apply CSS based on the element type
                        $field.next('.select2-container').addClass('is-invalid');
                    } else {
                        $field.addClass('is-invalid');
                    }
                }
            });


            if (!isValid) {
                // Fields are not valid, prevent the tab switch
                return false;
            } else {
                // Fields are valid, switch to the next tab
                switchTab(targetTabId);
                return true;
            }
        }


        // Function to switch tabs
        function switchTab(targetTabId) {
            $('.nav-link[href="' + targetTabId + '"]').tab('show');
        }


        // Event handler for tab switch
        $('.tab-trigger').on('show.bs.tab', function(event) {
            return validateAndSwitchTab($(this).data('bs-target'));
        });


        // Event handler for input change
        $('.tab-content').on('input change', 'input, textarea, select', function() {
            var $field = $(this);
            var isSelect2 = $field.hasClass('select2-hidden-accessible');


            // Remove red border when user interacts with the field
            if (isSelect2) {
                $field.next('.select2-container').removeClass('is-invalid');
            } else {
                $field.removeClass('is-invalid');
            }
        });


        // Event handler for multi-select change
        $('.multiple-select').on('change', function() {
            // Remove validation error only from the changed multi-select field
            var $multiSelect = $(this);
            $multiSelect.removeClass('is-invalid');
        });


        // Event handler for the "Continue" button
        $('.tab-trigger-next').on('click', function(event) {
            // Assuming the data-bs-target attribute contains the tab ID to switch to
            const targetTabId = $(this).data('bs-target');


            // Validate and switch to the next tab
            validateAndSwitchTab(targetTabId);
        });


        // Event handler for the "Previous" button
        $('.tab-trigger-previous').on('click', function(event) {
            // Assuming the data-bs-target attribute contains the tab ID to switch to
            const targetTabId = $(this).data('bs-target');


            // Validate and switch to the previous tab
            validateAndSwitchTab(targetTabId);
        });
    });
</script>
<script>
    (function($) {
        "use strict";

        $(document).ready(function() {
            $('#multiple-checkboxes').multiselect({
                includeSelectAllOption: true,
                enableFiltering: true, // Add this line to enable search/filtering
            });
        });

    })(jQuery);
</script>


<!-- Add this script after your HTML table -->
<script>
    // Function to calculate and update the total value
    function calculateAndUpdateTotal() {
        // Get the input values for cog_price, bank_charge, customs, utility_cost, etc.
        var cogPriceValue = parseFloat(document.querySelector('input[name="cog_price"]').value) || 0;
        var bankChargeValue = parseFloat(document.querySelector('.bank_charge-value').value) || 0;
        var customsValue = parseFloat(document.querySelector('.customs-value').value) || 0;
        var utilityCostValue = parseFloat(document.querySelector('.utility_cost-value').value) || 0;
        var salesComissionValue = parseFloat(document.querySelector('.sales_comission-value').value) || 0;
        var liabilityValue = parseFloat(document.querySelector('.liability-value').value) || 0;
        var capitalShareValue = parseFloat(document.querySelector('.capital_share-value').value) || 0;
        var managementCostValue = parseFloat(document.querySelector('.management_cost-value').value) || 0;
        var taxValue = parseFloat(document.querySelector('.tax-value').value) || 0;
        var shippingCostValue = parseFloat(document.querySelector('.shiping_cost-value').value) || 0;

        // Calculate the total value based on the provided formula
        var totalValue = cogPriceValue + (cogPriceValue * (
            bankChargeValue +
            customsValue +
            utilityCostValue +
            salesComissionValue +
            liabilityValue +
            capitalShareValue +
            managementCostValue +
            taxValue +
            (shippingCostValue / 100)
        ) / 100);

        // Update the total value in the disabled input field
        document.querySelector('input[name="sales-value"]').value = totalValue.toFixed(2);
    }

    // Attach the function to the input fields' onchange event
    document.querySelectorAll('.form-control-outline').forEach(function (input) {
        input.addEventListener('change', calculateAndUpdateTotal);
    });
</script>
<script>
    // Function to calculate and update the total value for specific items
    function calculateAndUpdateTotal() {
        // Get the input values for the specified expense items
        var bankChargeValue = parseFloat(document.querySelector('.bank_charge-value').value) || 0;
        var customsValue = parseFloat(document.querySelector('.customs-value').value) || 0;
        var utilityCostValue = parseFloat(document.querySelector('.utility_cost-value').value) || 0;
        var salesComissionValue = parseFloat(document.querySelector('.sales_comission-value').value) || 0;
        var liabilityValue = parseFloat(document.querySelector('.liability-value').value) || 0;
        var capitalShareValue = parseFloat(document.querySelector('.capital_share-value').value) || 0;
        var managementCostValue = parseFloat(document.querySelector('.management_cost-value').value) || 0;
        var taxValue = parseFloat(document.querySelector('.tax-value').value) || 0;
        var shippingCostValue = parseFloat(document.querySelector('.shiping_cost-value').value) || 0;

        // Calculate the total value for the specified items
        var totalValue = bankChargeValue + customsValue + utilityCostValue + salesComissionValue +
            liabilityValue + capitalShareValue + managementCostValue + taxValue + shippingCostValue;

        // Update the total value in the corresponding input field
        document.querySelector('input[name="gross-total"]').value = totalValue.toFixed(2);
    }

    // Attach the function to the input fields' onchange event
    document.querySelectorAll('.form-control-outline').forEach(function (input) {
        input.addEventListener('change', calculateAndUpdateTotal);
    });
</script>

@stack('scripts')
