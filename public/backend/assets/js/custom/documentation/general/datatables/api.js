"use strict";
var KTDatatablesApi = {
  init: function () {
    var a, t, e;
    (a = $("#kt_datatable_example_1").DataTable()),
      (t = 1),
      $("#kt_datatable_example_1_addrow").on("click", function () {
        a.row.add([t + ".1", t + ".2", t + ".3", t + ".4", t + ".5"]).draw(!1),
          t++;
      }),
      $("#kt_datatable_example_1_addrow").click(),
      (e = $("#kt_datatable_example_2").DataTable({
        columnDefs: [{ orderable: !1, targets: [1, 2, 3] }],
      })),
      $("#kt_datatable_example_2_submit").click(function () {
        var a = e.$("input, select").serialize();
        return (
          alert(
            "The following data would have been submitted to the server: \n\n" +
              a.substr(0, 120) +
              "..."
          ),
          !1
        );
      });
  },
};
KTUtil.onDOMContentLoaded(function () {
  KTDatatablesApi.init();
});
