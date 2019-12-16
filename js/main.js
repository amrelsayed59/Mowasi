/* globals $:false */
/* eslint-env browser */
/* Accordion */

// Sidebar Collapse Menu  
$(document).ready(function() {
  $('#sidebarCollapse').on('click', function() {
    $('#navbarSupportedContent, #content').toggleClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });
});

// Dropdown Menu -- Navbar
    $('.main-submenu').hover(function () {
        $(this).find('.dropDownMenu-submenu').stop(true, true).delay(100).fadeIn(500);
    }, function () {
        $(this).find('.dropDownMenu-submenu').stop(true, true).delay(100).fadeOut(500);
    });

    $('.dropdown-submenu').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
    });

    $('.dropdown-menu a.dropdown-toggle').on('click', function() {
      if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass('show');


      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function() {
        $('.dropdown-submenu .show').removeClass("show");
      });

      return false;
});


// Light Slider Start  
    // main slider in home page 
$(document).ready(function() {
    // main home page slider Slider Start  ==>  Home Page
    $("#main-home-page-slider").lightSlider({
        loop:true,
        auto:false,
        speed:1000,
        pauseOnHover:true,
        item:1,
        keyPress:true,
            responsive : [
            {
                breakpoint:800,
                settings: {
                    item:1,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });
//     Featured Products Slider Start  ==>  Home Page  
var slider = $('#featured-products-slider').lightSlider({
    loop:true,
    item:4,
    keyPress:true,
    pager:false,
    controls: false,
    responsive : [
        {
            breakpoint:800,
            settings: {
                item:2,
                slideMove:1,
                slideMargin:6,
              }
        },
        {
        breakpoint:769,
        settings: {
            item:3,
            slideMove:1,
            slideMargin:6,
          }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
              }
        }
    ]
});

    // Recommended Slider Start  ==>  Home Page   
    $('#goToPrevSlide').on('click', function () {
        slider.goToPrevSlide();
    });
    $('#goToNextSlide').on('click', function () {
        slider.goToNextSlide();
    });
    
    $("#recommended-slider").lightSlider({
        loop:true,
        item:4,
        keyPress:true,
        pager:false,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
            breakpoint:769,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:6,
              }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
    });
    // Brands Slider Start  ==>  Home Page  
    $("#brands-slider").lightSlider({
        loop:true,
        item:5,
        controls:false,
        keyPress:true,
        pager:false,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
    }); 
    // sub-subcategories Slider Start  ==>  sub-subcategory Page
    $("#sub-subcategories-slider").lightSlider({
        loop:true,
        item:6,
        controls:true,
        keyPress:true,
        pager:false,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:769,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
    });
});
// Light Slider End 

// Rating Start 
  $(document).ready(function() {
    $('.rating').rating();
  });
// Rating End 

// Product Details Start 
$(function() {
  $(".expand").on( "click", function() {
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});
// Product Details End 
  
/* Wait for images to load */
    $(window).load(function() {
        $('.sp-wrap').smoothproducts();
    });
    $(function() {
      $(".view").on( "click", function() {
        $(this).next().slideToggle(250);
        $fexpand = $(this).find(">:first-child");
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened');
        } else {
            $(this).addClass('opened');
        }
      });
    });

//  Easy Dropdown For dropdown style End

// International Telephone Input Start
    $(document).ready(function() {
        $('.input-phone').intlInputPhone();
    })
// International Telephone Input End

//function myFunction() {
//  window.print();
//}
document.title = "Need to print some specific area";
$(".print").click(function() {
    var title = document.title;
    document.title = "Going to print";
    window.print();
    document.title = title;
});

$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
    $('.popover-dismiss').popover({
      trigger: 'focus'
    });
});