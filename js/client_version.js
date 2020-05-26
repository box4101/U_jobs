window.onload = function () {
    var version = navigator.userAgent;
    console.log(version);

    //ie11이하
    if (/trident/i.test(version)) {
        this.document.body.classList.add('oldIE');

        var swiper2 = new Swiper('#ad_swiper', {
            scrollbar: '.swiper-scrollbar',
            scrollbarHide: true,
            autospeed: 2000,
            speed: 1000,
            centeredSlides: true,
            spaceBetween: 20,
            grabCursor: true,
            autoplay: true,
            loop: true,
            slidesPerView: '5', //한화면에 보이는 슬라이드갯수
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                1180: {
                    slidesPerView: 'auto',
                },
            },

        });
    }

    //ie dege
    if (/edge/i.test(version)) {
        this.document.body.classList.add('edge');
    }

    //chrome
    if (/chrome/i.test(version) && !/edge/i.test(version)) {
        this.document.body.classList.add('chrome');
       
  

    }

    //firefox
    if (/firefox/i.test(version)) {
        this.document.body.classList.add('moz');
    }

    //opera
    if (/firefox/i.test(version)) {
        this.document.body.classList.add('opera');
    }

    //mobile
    if (/mobile/i.test(version)) {
        this.document.body.classList.add('mobile');
        this.location.href = "http://www.naver.com";
    }
}

