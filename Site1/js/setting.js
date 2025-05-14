$('.open-setting').click(function(e){
    e.preventDefault();
    $('.setting_popup-bg').fadeIn(600);
    $('html').addClass('no-scroll');
});

$('.close-popup').click(function(){
    $('.setting_popup-bg').fadeOut(600);
    $('html').removeClass('no-scroll');
});
