$(window).scroll(function(){
if ($(document).scrollTop()>50){
$('nav').addClass('shrink');
$('.dropdown').css({"padding-top":"8px"});
$('.navbar-brand img').css({"height":"35px"});
$('.navbar-color').css({"background-color":"rgba(0,0,0,.5)"});
}
else{
$('nav').removeClass('shrink');
$('.dropdown').css({"padding-top":"30px"});
$('.navbar-brand img').css({"height":"80px"});
$('.navbar-color').css({"background-color":"#222"});
}
});
