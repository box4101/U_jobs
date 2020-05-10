var $naviBar;

/*인덱스 main JavaScript*/

$(document).ready(function () {
  initDOM();
  bindingEvent();

});

//DOM 초기화
function initDOM() {
  $naviBar = $(".headerWrap");
  ct = $("#contents");
  gnb = $("#gnb");
  gnb_li_a = $("#gnb>div>li>a");
  td = $(".sub_menu");
  bg = $(".bg");
  speed = 400;
  logo = $(".logo");
  header = $("#header")
  header_inner = $(".main_wrap")
  speed = 400;
}

//이벤트 바인딩
function bindingEvent() {
  new WOW().init();

  // gnb

  gnb_li_a.on("mouseenter", function () {
    gnb_on();
    console.log(123);
  });
  ct.on("mouseenter", function () {
    gnb_out();
  });
  header_inner.on("mouseenter", function () {
    gnb_out();
  });
  $(".sub_content").on("mouseenter", function () {
    gnb_out();
  });


  function gnb_on() {
    td.stop(true, true).slideDown(speed);
    bg.stop(true, true).slideDown(speed);
  }

  function gnb_out() {
    td.stop(true, true).slideUp(speed);
    bg.stop(true, true).slideUp(speed);
  }

  // gnb

  // main_slide slick
  $(".Modern-Slider").slick({
    autoplay: true,
    autoplaySpeed: 10000,
    speed: 600,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnHover: false,
    dots: true,
    pauseOnDotsHover: true,
    cssEase: 'linear',
    // fade:true,
    draggable: false,
    prevArrow: '<button class="PrevArrow"></button>',
    nextArrow: '<button class="NextArrow"></button>',
  });


  $('.videos').slick({
    slidesToShow: 3,
    autoplaySpeed: 10000,
    speed: 600,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    dots: false,
    prevArrow: '<button class="PrevArrow"></button>',
    nextArrow: '<button class="NextArrow"></button>',
    responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
      }
    },

    {
      breakpoint: 300,
      settings: "unslick"
    }
    ]

  });

  // main_slide slick


  // img 갤러리 팝업
  $('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true
    },

    zoom: {
      enabled: true,

      duration: 300, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function

      opener: function (openerElement) {

        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
    // img 갤러리 팝업

  });
}
