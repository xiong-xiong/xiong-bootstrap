


//Open main nav on mobile
   (function mobilMenu() {
      jQuery(".xiong-open-mobile-nav").click(function openMenu(){     
          jQuery('.xiong-main-nav ul li').slideToggle('slow');
          }); 
      })();



// Accordion sidebar menu

 jQuery(".xiong-sidebar-nav ul li ul").css("display", "none");
 jQuery(".xiong-sidebar-nav ul li").click(function () {
 	event.preventDefault();
     jQuery(this).closest('li').children('ul').delay( 400 ).slideToggle('slow');

 });

