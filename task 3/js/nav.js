$(window).scroll(function(){
    if ($(document).scrollTop()>50){
    $('nav').addClass('shrink');
    $('.dropdown').css({"padding-top":"8px"});
    $('.navbar-brand img').css({"height":"30px"});
    $('.navbar-brand img').css({"width":"80px"});
    $('.navbar-color').css({"background-color":"rgba(0,0,0,.8)"});
    }
    else{
    $('nav').removeClass('shrink');
    $('.dropdown').css({"padding-top":"30px"});
    $('.navbar-brand img').css({"height":"40px"});
        $('.navbar-brand img').css({"width":"100px"});
    $('.navbar-color').css({"background-color":"#222"});
    }
});
