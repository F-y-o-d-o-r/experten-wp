
$( document ).ready(function() {
    var swiper = new Swiper('.partners-logo__wrap', {
        slidesPerView: 6,

        // autoplay: {
        //     delay: 3000,
        // },
        breakpoints: {
            1024: {
                slidesPerView: 4,
            },
        }
    });

})