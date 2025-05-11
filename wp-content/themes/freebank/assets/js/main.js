
//открытие FAQ (добавление класса и js анимаци  fadeIn fadeOut)

// jQuery(document).ready(function () {
//   jQuery(".faq__questions--visible").click(function () {
//     jQuery(this).parents(".faq__questions--item").toggleClass("_js-show-hide-content");
//     jQuery(this).parents(".faq__questions--item").children(".faq__questions--hide").fadeToggle(100);

//     jQuery(".faq__questions--hide").not(jQuery(this).parents(".faq__questions--item").children(".faq__questions--hide")).fadeOut(10);
//     jQuery(".faq__questions--item").not($(this).parents(".faq__questions--item")).removeClass("_js-show-hide-content");
//   });
// });

////////////////////////app slider//////////////////////////////
// jQuery(document).ready(function() {
//   jQuery(window).on('load',function() {
//     if (!window.sessionStorage.getItem('preloaderIsShown')) {
//       setTimeout(function() {
//         jQuery(".animation__wrapper").addClass("close");
//         window.sessionStorage.setItem('preloaderIsShown', true);
//       }, 4000);
//     } else {
//         jQuery(".animation__wrapper").addClass("close");
//     }
//   });
// });

jQuery(document).ready(function() {
  // Animasyonu hemen kapat
  jQuery(".animation__wrapper").addClass("close");
  jQuery('body').removeClass('noscroll');
});
// добавление класса для анимаци при скроле // ._anim-items///

const animItems = document.querySelectorAll("._anim-items");
if (animItems.length > 0) {
  window.addEventListener("scroll", animOnScroll);
  function animOnScroll() {
    for (let index = 0; index < animItems.length; index++) {
      const animItem = animItems[index];
      const animItemHeight = animItem.offsetHeight;
      const animItemOffset = offset(animItem).top;
      const animStart = 100;

      let animItemPoint = window.innerHeight - animItemHeight / animStart;
      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart;
      }

      if (
        pageYOffset > animItemOffset - animItemPoint &&
        pageYOffset < animItemOffset + animItemHeight
      ) {
        animItem.classList.add("_js_active");
      } else {
        if (!animItem.classList.contains("_anim-no-hide")) {
          animItem.classList.remove("_js_active");
        }
      }
    }
  }
  function offset(el) {
    const rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft };
  }
  setTimeout(() => {
    animOnScroll();
  }, 200);
}


/////////////////////////////////////////////////////////////////////////////
///////////////////плавный скролл//////////////////////////////

jQuery(document).ready(function () {
  jQuery("._js-link").on("click", function (event) {
    event.preventDefault();
    var id = jQuery(this).attr("href"),
      top = jQuery(id).offset().top;
    jQuery("body,html").animate({ scrollTop: top }, 800);
  });
  jQuery("._js-scroll-link").on("click", function (event) {
    event.preventDefault();
    var id = jQuery(this).attr("href"),
      top = jQuery(id).offset().top;
    jQuery("body,html").animate({ scrollTop: top }, 800);
  });
});
// //Active Menu When Scroll-----------------------------------


///////////////////////////////////////////////////
jQuery(document).ready(function ( jQuery) {
  var widthPage = jQuery(document).width();
  if (widthPage >= 600) {
    var g_top = 0;
    jQuery(window).scroll(function () {
      if (window.scrollY > window.innerHeight/10) {
       var top =  jQuery(this).scrollTop();
       if (top > g_top) {
            jQuery('.header').addClass('fadeOut');
       } else {
            jQuery('.header').removeClass('fadeOut');
       }
       g_top = top;
      };
   });
  }


  jQuery(window).scroll(function () {
    if (window.scrollY > window.innerHeight/10) {
      jQuery('.header').addClass('_js-scroll');    
     } else {
          jQuery('.header').removeClass('_js-scroll');
     }

 });

});


// menu (добавление класса при клике)

jQuery(document).ready(function () {
  jQuery('.menu-burger__header').click(function () {
      jQuery('.menu-burger__header').toggleClass('_js--open-menu');
      jQuery('.header__menu--wrapper').toggleClass('_js--open-menu');
      jQuery('.header').toggleClass('_js--open-menu');
     jQuery('body').toggleClass('noscroll');
     jQuery('.header').removeClass('fadeOut');
  });
  jQuery(".header__menu").on('click', 'a',function (event){
      jQuery('.menu-burger__header').removeClass('_js--open-menu');
      jQuery('.header__menu--wrapper').removeClass('_js--open-menu');
      jQuery('.header').removeClass('_js--open-menu');
     jQuery('body').removeClass('noscroll');
  });



  if (jQuery(".home-page").length < 1) {
    jQuery("body").addClass("_not-home-page");
  }
  if (jQuery("._page-without-footer").length > 0) {
    jQuery("body").addClass("_not-footer");
  }
  if (jQuery(".rdd-page").length > 0) {
    jQuery("body").addClass("_rdd-page");
  }
  if (jQuery(".template-page").length > 0) {
    jQuery("body").addClass("_template-page-body");
  }



});
///////////////////////////////////////////////////////




///////////////////////////////
jQuery(document).ready(function () {
  if (jQuery(".partners__list")) {
    jQuery(".partners__list").addClass("owl-carousel owl-theme");
    jQuery(".partners__list").owlCarousel({
      dots: false,
      loop: true,
      // center: true,
      nav: false,
      // rtl: true,
      // startPosition: l - 1,
      autoHeight: false,
      // margin: 60,
      autoplay:true,
      autoplayTimeout:5000,
      autoplaySpeed:10000,
      // fluidSpeed:10000,
      autoplayHoverPause:false,
      responsive: {
        0: {
          items: 3,
          autoHeight: true,
        },
        600: {
          items: 9,
        },
      },
    });
  }
});
///////////////////////////////
jQuery(document).ready(function () {
  if (jQuery(".animWords__title-slider")) {


    jQuery(".animWords__title-slider").addClass("owl-carousel owl-theme");
    jQuery(".animWords__title-slider").owlCarousel({
      dots: false,
      loop: true,
      // animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      nav: false,
      autoplay:true,
      // autoWidth:true,
      autoplayTimeout:3000,
      autoplaySpeed:3000,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
      },
    });

    
  }
});
///////////////////////////////
jQuery(document).ready(function () {
  if (jQuery(".baner__slider")) {


    jQuery(".baner__slider").addClass("owl-carousel owl-theme");
    jQuery(".baner__slider").owlCarousel({
      dots: true,
      loop: true,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      nav: false,
      margin: 5,
      center: true,
      autoplay:true,
      // autoWidth:true,
      autoplayTimeout:8000,
      autoplaySpeed:8000,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
      },
    });

    
  }
});
///////////////////////////////
jQuery(document).ready(function () {
  if (jQuery(".community__slider")) {
    jQuery(".community__slider").addClass("owl-carousel owl-theme");
    jQuery(".community__slider").owlCarousel({
      dots: true,
      loop: true,
      center: true,
      nav: true,
      autoHeight: true,
      responsive: {
        0: {
          items: 1,
          autoHeight: true,
        },
        600: {
          items: 1,
        },
      },
    });
  }
});

//////////////////////////////////
jQuery(document).ready(function ( jQuery) {
  var widthPage = jQuery(document).width();
    jQuery(document).ready(function () {
      if (jQuery(".testmonials__list")) {
        jQuery(".testmonials__list").addClass("owl-carousel owl-theme");
        jQuery(".testmonials__list").owlCarousel({
          dots: true,
          loop: true,
          // center: true,
          autoplay:true,
          // autoWidth:true,
          autoplayTimeout:8000,
          autoplaySpeed:3000,
          nav: false,
          // autoHeight: true,
          responsive: {
            0: {
              center: true,
              items: 1.1,
              // autoHeight: true,
            },
            600: {
              items: 4,
            },
          },
        });
      }
    });
  

});
jQuery(document).ready(function ( jQuery) {
  var widthPage = jQuery(document).width();
  if (widthPage <= 800) {
    jQuery(document).ready(function () {
      if (jQuery(".team__list")) {
        jQuery(".team__list").addClass("owl-carousel owl-theme");
        jQuery(".team__list").owlCarousel({
          dots: true,
          loop: true,
          center: true,
          nav: false,
          // autoHeight: true,
          responsive: {
            0: {
              items: 1.2,
              // autoHeight: true,
            },
            600: {
              items: 1,
            },
          },
        });
      }
    });
  }

});
////////////////////////////////
document.addEventListener("DOMContentLoaded", function () {
 
  if (document.querySelectorAll("._js-wrapper").length > 0) {
    const wrapperList = document.querySelectorAll("._js-wrapper");
    wrapperList.forEach((wrapper) => {
      const btnBlock = wrapper.querySelector("._js-block-btn");
      const btns = wrapper.querySelectorAll("._js-btn");
      const contents = wrapper.querySelectorAll("._js-content");
     
      /////////////////////////

      if (wrapper.classList.contains("card-points-plans")) {
    
      }
    // add first child class
    console.log(btns)
    contents[0].classList.add("_active");
    btns[0].classList.add("_active");

    btnBlock.addEventListener("click", function (e) {
      const target = e.target.closest("._js-btn");
      console.log(target);

      if (target) {
        const id = target.getAttribute("id");
        // console.log("id", id);
        btns.forEach((btn, index) => {
          btn.classList.remove("_active");
        });

        target.classList.add("_active");

        contents.forEach((content) => {
          content.classList.remove("_active");
          if (content.classList.contains(id)) {
            content.classList.add("_active");
          }
        });

      }
    });








    });
  }
});




//////////////////////////////////////

jQuery(document).ready(function () {
  if (jQuery(".joinUs__content-amount--num").length > 0) {
    function count(className) {
      var countBlockTop = $("." + className).offset().top;
      var windowHeight = window.innerHeight;
      var show = true;

      jQuery(window).scroll(function () {
        if (show && countBlockTop < $(window).scrollTop() + windowHeight) {
          show = false;

          jQuery("." + className).spincrement({
            from: 0,
            duration: 5000,
            thousandSeparator: ",",
          });
        }
      });

      jQuery(document).ready(function () {
        if (jQuery(this).width() <= 600) {
          show = false;

          jQuery("." + className).spincrement({
            from: 0,
            duration: 5000,
            thousandSeparator: ",",
          });
        }
      });
    }

    count("joinUs__content-amount--num");
  }
  /////////////////////////
});



///////////////////////////////////popup//////////////////////////////////////////

document.addEventListener("DOMContentLoaded", function () {
  const popupWrappers = document.querySelectorAll("._popups-wrapper");
  const customPopupArr = document.querySelectorAll("._popup-block");
  /////////////////
  if (popupWrappers) {
    popupWrappers.forEach((popupWrapper) => {
      popupWrapper.addEventListener("click", function (e) {
        if (e.target.closest("._popup-open-btn")) {
          // console.log("aaaaaaaaaaaaaa")
          customPopupArr.forEach((popup) => {
            if (
              popup.classList.contains(
                e.target.closest("._popup-open-btn").classList[0]
              )
            ) {
              document.querySelector("body").classList.add("noscroll");
              popup.classList.add("open-popup");
              popup.addEventListener("click", function (event) {
                if (event.target.closest("._popup-close-btn")) {
                  document.querySelector("body").classList.remove("noscroll");
                  popup.classList.remove("open-popup");
                }
              });
            }
          });
        }
      });
    });
  }

  if (customPopupArr) {
    customPopupArr.forEach((popup) => {
      document.querySelector("body").append(popup);
    });
  }

  /////////////////
});

//////////////////////////////////

jQuery(document).ready(function () {
  jQuery("._js-faq__btn").click(function () {
    if (jQuery(this).parents(".faq__item").hasClass("_active")) {
      jQuery(this).parents(".faq__item").removeClass("_active");
    } else {
      jQuery(".faq__item").removeClass("_active");
      jQuery(this).parents(".faq__item").addClass("_active");
    }
  });
});
//////////////////////////////////

jQuery(document).ready(function () {
  jQuery(".roadmap__item--visible").click(function () {
    if (jQuery(this).parents(".roadmap__item").hasClass("_active-item")) {
      jQuery(this).parents(".roadmap__item").removeClass("_active-item");
    } else {
      jQuery(".roadmap__item").removeClass("_active-item");
      jQuery(this).parents(".roadmap__item").addClass("_active-item");
    }
  });
});