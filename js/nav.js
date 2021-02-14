$(window).scroll(function(){
   $("nav").toggleClass("scrolled", $(this).scrollTop() > 50);
   $('#header').hide();
});
$(window).scroll(function() {
    if ($(this).scrollTop() < 50) {
      $('#header').show();
    }
  });
  