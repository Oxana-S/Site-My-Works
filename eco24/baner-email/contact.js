// Ajax отправка для формы в Банере
// baner-mail/contact.js

jQuery(document).ready(function ($) {
  $(".baner_form").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "baner-email/mail.php",
      data: str,
      dataType: "html",
      beforeSend: function () {
        $('.baner__form-loader-1').removeClass('hidden')
      },
      success: function (msg) {
        if (msg == 'OK') {
          $('.reset').val('');
        }
        else {
          result2 = msg;
        }

      },
      complete: function () {
        $('.baner__form-loader-1').addClass('hidden');

        
        // $('.banner__form-msg-sent').removeClass('hidden');

        // var delay = 2000;
        // setTimeout(function () {
        //   $('.banner__form-msg-sent').addClass('hidden');
        // }, delay);
        
        $('.banner__form-msg-sent').show(500, function () {
          setTimeout(function () {
            $('.banner__form-msg-sent').hide(500);
          }, 1500);
        });
        

      },
    })
  
    
  $('.baner__form').trigger("reset");
    return false;
  
  });
});