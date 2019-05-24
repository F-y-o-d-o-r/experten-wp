$( document ).ready(function() {
    var swiper = new Swiper('.review-list__wrap', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        breakpoints: {
            1024: {
                nextEl: '',
                prevEl: '',
                navigation: {
                    nextEl: '',
                    prevEl: '',
                },
            },

        }

    });

})
