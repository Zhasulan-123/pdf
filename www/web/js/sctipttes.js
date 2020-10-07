$(document).ready(function () {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
  });

  $(".click_value_form").on("click", function (e) {
    e.preventDefault();
    var text = $("#log > pre").text();
    var lang = $("#langs").val();

    let data = [];
    data.push(
      {
        name: "_csrf",
        value: yii.getCsrfToken(),
      },
      {
        name: "Pdf[language]",
        value: lang,
      },
      {
        name: "Pdf[text]",
        value: text,
      }
    );

    $.ajax({
      type: "POST",
      url: "/currency/create",
      data: data,
      dataType: "json",
      success: function (data) {
        if (data.success) {
          Toast.fire({
            icon: "success",
            title:
              "Данный были добавлено к базу данных посматрите списки текст !!!",
          });
        } else {
          Toast.fire({
            icon: "error",
            title: "Ошибка данный не быльо добавлено к базу данных !!!",
          });
        }
      },
    });
  });
});
