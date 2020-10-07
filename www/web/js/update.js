$(function () {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
  });

  $("body").on("click", ".click_update", function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    $("#modal-lg").modal("show");
    $("#modal-lg")
      .find(".modal-content")
      .load("/currency/past?id=" + id);
  });

  $("body").on("click", "#submitUpdate", function (e) {
    e.preventDefault();
    var url = $("#FormUpdate").attr("action");
    var param = $("#FormUpdate").serializeArray();
    $.ajax({
      type: "POST",
      url: url,
      data: param,
      dataType: "json",
      success: function (data) {
        if (data.success) {
          Toast.fire({
            icon: "success",
            title:
              "Данный были обновлено к базу данных посматрите списки текст !!!",
          });
          $("#modal-lg").modal("toggle");
          $(".past_up > tbody").html(data.html);
        } else {
          Toast.fire({
            icon: "error",
            title: "Ошибка данный не быльо обновлено к базу данных !!!",
          });
        }
      },
    });
  });
});
