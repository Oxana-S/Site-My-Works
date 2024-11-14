// Ajax отправка формы для Popup
// popup-mail/contact.js

jQuery(document).ready(function ($) {
  $("#quetions").submit(function () {
    var str = $(this).serialize();
    // alert('Что То Есть !!!');
    $.ajax({
      type: "POST",
      url: "popup-email/mail.php",
      data: str,
      dataType: "html",
      beforeSend: function () {
        $('#popup__form-loader').removeClass('hidden')
      },
      success: function (msg) {
        if (msg == 'OK') {
          // alert('Отправленна !!!');
        }
        else { 
          // alert('НЕ Отправленна !!!');
          result2 = msg; 
        }

      },
      complete: function () {
        $('#popup__form-loader').addClass('hidden');

        $('.cost__form-msg-sent').show(500, function () {
          setTimeout(function () {
            $('.cost__form-msg-sent').hide(500);
          }, 2000);
        });
      },
    });

    $('#quetions').trigger("reset");

    return false;
  });
});