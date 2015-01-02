
(function($) {

  $('#submit').click(function() {
    $.post('/expressions', {expr: "1 + 1"}).then(function(response) {
      console.log(response);
    });
  });

})(jQuery);
