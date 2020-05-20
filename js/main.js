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

    $(".search_btn").on("click", function () {
      $(".firstFloor").find("dd").show();
      $(".fisrtFloor_on").hide();
    });

    $(".firstFloor").find("dt").on("click", function () {
      $(".firstFloor").find("dd").show();
      $(".fisrtFloor_on").hide();
    });

    $(".floor_click").on("click", function () {
      $(".firstFloor").find("dd").hide();
      $(".fisrtFloor_on").show();
    });

  })

}
