import $ from 'jquery';
import WOW from 'wow.js';
  $(document).ready(function() {
    // jQuery code here
    $('#scrollToTop').click(function() {
      $('html, body').animate({ scrollTop: 0 }, 'slow');
      return false;
    });
  });
  $(function(){
    //WOW plugin init
    new WOW().init();
    $(window).scroll(function() {
      var posY = $(window).scrollTop();
      $('#parallax').css('top', posY * 0.1 + 'px'); // Adjust the multiplier as needed
      if (posY > 100) {
          $('#scrollToTop').show();
      } else {
          $('#scrollToTop').hide();
      }
  });
});





// window.addEventListener('scroll', function() {
//     
//   });
  