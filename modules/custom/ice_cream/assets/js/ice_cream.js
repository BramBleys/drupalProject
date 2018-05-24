(function ($) {
    $('#ice_cream_form').hide();
    $('#waffle_form').hide();
  $('.ice_cream-links a').click(function () {
    $('#ice_cream_form').show();
    $('#waffle_form').show();
  })
})(jQuery);
