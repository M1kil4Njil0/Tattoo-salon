$('.open-order').click(function(e){
    e.preventDefault();
    $('.order_popup-bg').fadeIn(600);
    $('html').addClass('no-scroll');
});

$('.close-popup').click(function(){
    $('.order_popup-bg').fadeOut(600);
    $('html').removeClass('no-scroll');
});
