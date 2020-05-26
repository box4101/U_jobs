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


  // 맞춤검색 직무선택시
  $(function () {
    $(".fisrtFloor_on").hide();
    $(".fisrtFloor_area").hide();

    $(".search_btn").on("click", function () {
      $(".firstFloor").find("dd").show();
      $(".fisrtFloor_on").hide();
    });

    $(".firstFloor").find("dt").on("click", function () {
      $(".firstFloor").find("dd").show();
      $(".fisrtFloor_on").hide();
      $(".fisrtFloor_area").hide();

    });

    // 직무클릭시
    $(".floor_click").on("click", function () {
      $(".firstFloor").find("dd").hide();
      $(".fisrtFloor_on").show();
      $(".fisrtFloor_area").hide();
    });
    
    // 지역클릭시
    $(".floor_area_chk").on("click", function () {
      $(".firstFloor").find("dd").hide();
      $(".fisrtFloor_area").show();
    });

  });



}
