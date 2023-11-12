"use strict";
var KTDatatablesBasic = {
  init: function () {
    $("#kt_datatable_example_1").DataTable(),
      $("#kt_datatable_example_2").DataTable({
        scrollY: "500px",
        scrollCollapse: !0,
        paging: !1,
        dom: "<'table-responsive'tr>",
      }),
      $("#kt_datatable_example_3").DataTable({ scrollX: !0 }),
      $("#kt_datatable_example_4").DataTable({ scrollY: 300, scrollX: !0 });
  },
};
KTUtil.onDOMContentLoaded(function () {
  KTDatatablesBasic.init();
});
