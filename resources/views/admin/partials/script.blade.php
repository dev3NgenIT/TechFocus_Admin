<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('backend/assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('backend/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/utilities/modals/create-account.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('backend/assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/utilities/modals/users-search.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script>
<script src="{{asset('backend/assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/documentation/editors/tinymce/plugins.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/js/fileinput.min.js"></script>
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
@stack('scripts')