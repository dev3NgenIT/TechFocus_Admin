"use strict";
var KTCreateAccount = (function () {
  var e,
    t,
    i,
    o,
    s,
    r,
    a = [];
  return {
    init: function () {
      (e = document.querySelector("#kt_modal_create_account")) &&
        new bootstrap.Modal(e),
        (t = document.querySelector("#kt_create_account_stepper")),
        (i = t.querySelector("#kt_create_account_form")),
        // (o = t.querySelector('[data-kt-stepper-action="submit"]')),
        (s = t.querySelector('[data-kt-stepper-action="next"]')),
        (r = new KTStepper(t)).on("kt.stepper.changed", function (e) {
          4 === r.getCurrentStepIndex()
            ? (o.classList.remove("d-none"),
              o.classList.add("d-inline-block"),
              s.classList.add("d-none"))
            : 5 === r.getCurrentStepIndex()
            ? (o.classList.add("d-none"), s.classList.add("d-none"))
            : (o.classList.remove("d-inline-block"),
              o.classList.remove("d-none"),
              s.classList.remove("d-none"));
        }),
        r.on("kt.stepper.next", function (e) {
          console.log("stepper.next");
          var t = a[e.getCurrentStepIndex() - 1];
          t
            ? t.validate().then(function (t) {
                console.log("validated!"),
                  "Valid" == t
                    ? (e.goNext(), KTUtil.scrollTop())
                    : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: { confirmButton: "btn btn-light" },
                      }).then(function () {
                        KTUtil.scrollTop();
                      });
              })
            : (e.goNext(), KTUtil.scrollTop());
        }),
        r.on("kt.stepper.previous", function (e) {
          console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop();
        }),
        // For Basic Info
        a.push(
          FormValidation.formValidation(i, {
            fields: {
              name: {
                validators: {
                  notEmpty: { message: "Name is required" },
                },
              },
              sku_code: {
                validators: {
                  notEmpty: { message: "SKU Code is required" },
                },
              },
              brand_id: {
                validators: {
                  notEmpty: { message: "Brand Name is required" },
                },
              },
              category_id: {
                validators: {
                  notEmpty: { message: "Category Name is required" },
                },
              },
              product_type: {
                validators: {
                  notEmpty: { message: "Product Name is required" },
                },
              },
              stock_status: {
                validators: {
                  notEmpty: { message: "Product Status is required" },
                },
              },
              solution_id: {
                validators: {
                  notEmpty: { message: "Solution is required" },
                },
              },
              industry_id: {
                validators: {
                  notEmpty: { message: "Industry Name is required" },
                },
              },
            },
            plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: "",
              }),
            },
          })
        ),
        // For Offer & Price
        a.push(
          FormValidation.formValidation(i, {
            fields: {
              unit_price: {
                validators: { notEmpty: { message: "Unit Price is required" } },
              },
            },
            plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: "",
              }),
            },
          })
        ),
        // For Attachment
        a.push(
          FormValidation.formValidation(i, {
            fields: {
              thumbnail: {
                validators: {
                  notEmpty: { message: "Thumbnail name is required" },
                },
              },
            },
            plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: "",
              }),
            },
          })
        ),
        // For Source
        a.push(
          FormValidation.formValidation(i, {
            fields: {
              source_one_price: {
                validators: {
                  notEmpty: { message: "Source One Price is required" },
                },
              },
              notification_days: {
                validators: {
                  notEmpty: { message: "Notification Day is required" },
                },
              },
              price_status: {
                validators: {
                  notEmpty: { message: "Price Status Day is required" },
                },
              },
            },
            plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: "",
              }),
            },
          })
        ),
        o.addEventListener("click", function (e) {
          a[3].validate().then(function (t) {
            console.log("validated!"),
              "Valid" == t
                ? (e.preventDefault(),
                  (o.disabled = !0),
                  o.setAttribute("data-kt-indicator", "on"),
                  setTimeout(function () {
                    o.removeAttribute("data-kt-indicator"),
                      (o.disabled = !1),
                      r.goNext();
                  }, 2e3))
                : Swal.fire({
                    text: "Sorry, looks like there are some required input is empty, please fill up try again.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: { confirmButton: "btn btn-light" },
                  }).then(function () {
                    KTUtil.scrollTop();
                  });
          });
        }),
        $(i.querySelector('[name="card_expiry_month"]')).on(
          "change",
          function () {
            a[3].revalidateField("card_expiry_month");
          }
        ),
        $(i.querySelector('[name="card_expiry_year"]')).on(
          "change",
          function () {
            a[3].revalidateField("card_expiry_year");
          }
        ),
        $(i.querySelector('[name="business_type"]')).on("change", function () {
          a[2].revalidateField("business_type");
        });
        r = new KTStepper(document.getElementById('kt_create_account_form'));
    },
    
  };
  
})();
KTUtil.onDOMContentLoaded(function () {
  KTCreateAccount.init();
});
