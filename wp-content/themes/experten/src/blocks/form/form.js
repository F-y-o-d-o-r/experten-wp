

$( document ).ready(function() {

    $("#round-top").roundSlider({
        radius: 142,
        width: 2,
        handleSize: "+16",
        circleShape: "half-top",
        sliderType: "min-range",

        editableTooltip: false,
        mouseScrollAction: true,
        tooltipFormat: alter,
    });
    function alter(args) {
        return "<p class='alter'>Alter</p> " + args.value;
    }

    $("#round-bot").roundSlider({
        radius: 142,
        width: 2,
        handleSize: "+16",
        circleShape: "half-bottom",
        max: "0",
        min: "10000",
        step: "1000",

        editableTooltip: false,
        mouseScrollAction: true,
        tooltipFormat: summe,
    });
    function summe(args) {
        return "<p class='summe'>Monatliche Wunsch-Summe </p> " + args.value;
    }

    $("#cost-btn").click(function () {
        var select =  $( '[name="calculate-form-menu"]');
        var age = $('[name="round-top"]');
        var summe = $('[name="round-bot"]');

        //console.log(select['1']['value'] )

        $('#range-age').attr( "value", age['0']['defaultValue'] ),
        $('#range-summe').attr( "value", summe['0']['defaultValue'] ),
        $('#select-prof').attr( "value", select['1']['value'] )


       // console.log('select -->',select, 'age-->', age, 'price-->', summe )

    })

    $( "select#foo option:checked" ).val();

    $(".btn-link").on("click", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });





})

$(window).scroll(function() {

    var imagePos = $('.gallery-list__top').offset().top;
    var topOfWindow = $(window).scrollTop();

    console.log('img pos',imagePos);
    console.log('screen pos',topOfWindow);

    if (imagePos < topOfWindow+500) {
        $('.gallery-list__top').addClass("animate__top");
        $('.gallery-list__bottom').addClass("animate__bottom");
    }

})

