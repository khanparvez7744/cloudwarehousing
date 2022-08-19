$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 40,
        autoplay: true,
        autoplayTimeout: 800,
        autoplayHoverPause: true,
        nav:true,
        responsive: {
            0: {
                items: 4,
                margin: 5
            },
            600: {
                items: 3,
                margin: 20
            },
            1000: {
                items: 4,
                margin: 30
            },
            1200: {
                items: 4
            }
        }
    });
});
$(document).ready(function () {
    $('.sidenav').sidenav(); 
}); 
$(document).ready(function () {
    $(window).scroll(function () {
        var million = $(document).scrollTop();
        if ((million > 6400) && (million < 7200)) {
            $('#clientVisit').addClass('animateCircle');
            $('#shipmentHndl').addClass('animateCircle');
            $('#shipmentHour').addClass('animateCircle');
        }
    });
});
$(document).ready(function () {
    $(window).scroll(function () {
        var count = $(document).scrollTop();
        if ((count > 6400) && (count < 7200)) {
            // $('.parvez').each(function () {
            //     parvez$(this).prop('Counter', 0).animate({
            //         Counter: $(this).text()
            //     },
            //     {
            //         duration: 100,
            //         easing: 'swing',
            //         step: function (now) {
            //             $(this).text(Math.ceil(now));
            //         }
            //     });
            // });
        }
    });
});
$(document).ready(function () {
    $('#hideFeature').hide();
    $('#feaHideBtn').hide();
    $('#featureBtn').click(function () {
        $('#hideFeature').show('slow');
        $(this).hide();
        $('#feaHideBtn').show();
    });
    $('#feaHideBtn').click(function () {
        $('#hideFeature').hide('slow');
        $(this).hide();
        $('#featureBtn').show();
    });
});


$(document).ready(function () {
    if(($(window).width()>'1200') && ($(window).width()<'1400')){
        $(window).scroll(function () {
            var million = $(document).scrollTop();
            if ((million > 5000) && (million < 6000)) {
                $('#clientVisit').addClass('animateCircle');
                $('#shipmentHndl').addClass('animateCircle');
                $('#shipmentHour').addClass('animateCircle');
            }
        });
    }
});

// start bg image on mobile
$(document).ready(function () {
    if($(window).width()<='600'){
        $('.fulImgSec').css('background','url("./images/mindBgMobile.png")');
        $('.footer-copyright span').css('width','100%').css('text-align','center').css('margin','1px 0');
        //  start animate circle on mobile
        $(window).scroll(function () {
            var million = $(document).scrollTop();
            if ((million > 3100) && (million < 3900)) {
                $('#clientVisit').addClass('animateCircle');
                $('#shipmentHndl').addClass('animateCircle');
                $('#shipmentHour').addClass('animateCircle');
            }
        });
        //  end animate circle on mobile

    }
});
// end bg image on mobile