$(document).ready(function(){
  $(function(){
      $(document).on('scroll', function(){
        if ($(window).scrollTop() > 100) {
        $('.scroll-top-wrapper').addClass('show');
      } else {
        $('.scroll-top-wrapper').removeClass('show');
      }
    });
    
    $('.scroll-top-wrapper').on('click', scrollToTop);
  });
    
  function scrollToTop() {

    
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    $("html, body").animate({scrollTop: $("#page-top")}, 200, 'linear');
  }
});