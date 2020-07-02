var $naviBar;

/*인덱스 main JavaScript*/

$(document).ready(function () {
  initDOM();
  bindingEvent();

});

//DOM 초기화
function initDOM() {
}

//이벤트 바인딩
function bindingEvent() {

  // 탭공통

  $(function () {
    const menu = $(".custom_tabs");
    const menu_li = $(".custom_tabs li");
    const menu_li_a = $(".custom_tabs li a");
    const hidden = $(".hidden");

    $("#tab1").show();

    menu_li.on("click", function (e) {
      e.preventDefault();

      menu_li_a.removeClass("on");
      $(this).find("a").addClass("on");

      let target = $(this).find("a").attr("href");
      hidden.fadeOut();
      $(target).fadeIn(400);
    });
  });

  // 탭공통



  // 맞춤검색 직무선택시
  $(function () {
    $(".fisrtFloor_on").hide();
    $(".fisrtFloor_area").hide();

    $(".freelance .search_btn").on("click", function () {
      $(".freelance .firstFloor").find("dd").show();
      $(".freelance .fisrtFloor_on").hide();
    });

    $(".firstFloor").find("dt").on("click", function () {
      $(".firstFloor").find("dd").show();
      $(".fisrtFloor_on").hide();
      $(".fisrtFloor_area").hide();

    });

    // 직무클릭시
    $(".freelance .floor_click").on("click", function () {
      $(".freelance .firstFloor").find("dd").hide();
      $(".freelance .fisrtFloor_on").show();
      $(".freelance .fisrtFloor_area").hide();
    });

    // 지역클릭시
    $(".floor_area_chk").on("click", function () {
      $(".firstFloor").find("dd").hide();
      $(".fisrtFloor_area").show();
    });


  });



}
