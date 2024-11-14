//jQuery time
// Дополнения по проверке условия на заполнения Чекбоксов 
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches



// Чекбоксы:

// Вариант-3
// Шаг-1
$('#stage-1 .check').click(function () {
  if ($(this).is(':checked')) {
    $('.next-stage-1').removeAttr('disabled');
  } else {
    $('.next-stage-1').attr('disabled', 'disabled');
  }
});
// Шаг-2
$('#stage-3 .check').click(function () {
  if ($(this).is(':checked')) {
    $('.next-stage-2').removeAttr('disabled');
  } else {
    $('.next-stage-2').attr('disabled', 'disabled');
  }
});
// Шаг-3
$('#stage-4 .check').click(function () {
  if ($(this).is(':checked')) {
    $('.next-stage-3').removeAttr('disabled');
  } else {
    $('.next-stage-3').attr('disabled', 'disabled');
  }
});

// Вариант-2
// $('#stage-1 input[type=checkbox]').click(function (event) {
//   if ($('.chuis').is(':checked')) {
//     $('.next').prop("disabled", false);
//   } else {
//     $('.next').prop("disabled", true)
//   }
// })
//Вариант-2
// $('#stage-1 input:checkbox').on('change', function () {
//   var count = $(':checkbox:checked').length;
//   console.log(count);
//   if (count !== 0) {
//     $('.next').attr('disabled', false);
//   }
// });




$(".next").click(function () {
  // ...
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate({
    opacity: 0
  }, {
    step: function (now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50) + "%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale(' + scale + ')',
        'position': 'absolute'
      });
      next_fs.css({
        'left': left,
        'opacity': opacity
      });
    },
    duration: 800,
    complete: function () {
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});









$(".previous").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.animate({
    opacity: 0
  }, {
    step: function (now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1 - now) * 50) + "%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'left': left
      });
      previous_fs.css({
        'transform': 'scale(' + scale + ')',
        'opacity': opacity
      });
    },
    duration: 800,
    complete: function () {
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });


});

var elements = document.querySelectorAll('input, textarea');

for (i = 0; i < elements.length; i++) {
  (function (element) {
    var id = element.getAttribute('id');
    element.value = localStorage.getItem(id);
    element.oninput = function () {
      localStorage.setItem(id, element.value);
    };
  })(elements[i]);
}



// $.fn.myfoo = $(function () {
//   $('#msform').on('change', function () {
//     if ($('[type="checkbox"]').prop('checked')) {

//       $('.next').attr('disabled', false);
//     } else {
//       $('.next').attr('disabled', true);
//     }
//   });
// });

