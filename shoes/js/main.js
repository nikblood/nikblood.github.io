$('.main_slider').slick({
    dots: false,
    centermode:true,
    slideToShow:2,
    arrows:true
} );

$ (function (){
$('.waxanav_circle,.krest').click(function(event){
$('.waxanav_circle,.waxa_header_menu').toggleClass('active');
});
});
$ (function (){
    $('.login,.reg,.exit_butt').click(function(event){
    $('.login,.reg,.main_login_reg_container').toggleClass('active');
    });
    });
$('.waxa_list').click(function(event) {
    $('.waxanav_circle,.waxa_header_menu').removeClass('active');
    $('body').removeClass('lock');
});
