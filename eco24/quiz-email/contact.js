// Ajax для отправки формы Quiz
 
jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();

		$.ajax({
			type: "POST",
			url: "quiz-email/mail.php",
			data: str,
			dataType: "html",
			// beforeSend: functionBefor,
			beforeSend: function () {
				$('#note__loader').removeClass('hidden')
			},
			success: function(msg) {
				if(msg == 'OK') {
					result1 = '<div class="ok-title test__title heartBeat-1">Спасибо за Ваше сообщение.<br>Скоро с Вами свяжется наш эксперт-эколог</div>';
					result2 = '<div class="ok heartBeat-1" style="font-size: 28px; color: #fff; z-index: 10; ">Сообщение отправлено</div>';
					result3 = '<div><a class="test  test_close close__test btn heartBeat-1" > Завершить Тест</a></div >';
					result4 = '<div> Здесь </div >';

					$(".test__title").hide();
					$("#fields").hide();
					$(".steps__btn--prev").hide();
				}
				else {result2 = msg;}

				$('#note__response-title').html(result1);
				$('#note__response-mes').html(result2);
				$('#note__response-close').html(result3);
				$('#note__response-test').html(result4);

			},
			complete: function () {
				$('#note__loader').addClass('hidden')
			},
		});

		return false;
	});
});