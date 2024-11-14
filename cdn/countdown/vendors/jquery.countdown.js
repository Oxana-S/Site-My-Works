(function($) {
  'use strict';

  $(document).ready(function() {
    $('.js-timer').countdown('2020/07/22', function(event) {
      var $this = $(this).html(event.strftime(''
        + '<div class="u-timer__section"><strong class="u-timer__amount">%D</strong> <em class="u-timer__period">дней</em></div>'
        + '<div class="u-timer__section"><strong class="u-timer__amount">%H</strong> <em class="u-timer__period">час</em></div>'
        + '<div class="u-timer__section"><strong class="u-timer__amount">%M</strong> <em class="u-timer__period">мин</em></div>'
        + '<div class="u-timer__section"><strong class="u-timer__amount">%S</strong> <em class="u-timer__period">сек</em></div>'));
    });
  })

}(jQuery));
