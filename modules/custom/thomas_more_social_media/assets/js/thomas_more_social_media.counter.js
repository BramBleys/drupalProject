(function ($) {
  $('.js-social-media-links a').click(function (evt) {
    $.ajax({
      type: 'POST',
      url: '/ajax/thomas-more-social-media/counter',
      data:{
        'network': $(this).data('network'),
      },
      success: function(resp) {
        console.log('Great_Success');
      },
      error: function() {
        console.log('Error_log_')
      }
    });
  });
})(jQuery);
