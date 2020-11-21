$("html").css({ "font-size": ($(window).height() / 25) + "px" });

$(function() {
    $(".header__burger").on("click", function(event) {
        $(".header__burger,.header_menu").toggleClass('active')
    });

});
$(function() {
    $(".call_phone,.back").on("click", function(event) {
        $(".call_phone,.call__menu,.back").toggleClass('active');
    });

});



$(function() {
    $(".joy,.close_menu_1,.menu_1_text").on("click", function(event) {
        $(".joy,.menu_1_kvartiri,.close_menu_1").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy1,.close_menu_2,.menu_2_text").on("click", function(event) {
        $(".joy1,.menu_2_kvartiri,.close_menu_2").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy2,.close_menu_3,.menu_3_text").on("click", function(event) {
        $(".joy2,.menu_3_kvartiri,.close_menu_3").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy3,.close_menu_4,.menu_4_text").on("click", function(event) {
        $(".joy3,.menu_4_kvartiri,.close_menu_4").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy4,.close_menu_5,.menu_5_text").on("click", function(event) {
        $(".joy4,.menu_5_kvartiri,.close_menu_5").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy5,.close_menu_6,.menu_6_text").on("click", function(event) {
        $(".joy5,.menu_6_kvartiri,.close_menu_6").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy6,.close_menu_7,.menu_7_text").on("click", function(event) {
        $(".joy6,.menu_7_kvartiri,.close_menu_7").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy7,.close_menu_8,.menu_8_text").on("click", function(event) {
        $(".joy7,.menu_8_kvartiri,.close_menu_8").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});
$(function() {
    $(".joy8,.close_menu_9,.menu_9_text").on("click", function(event) {
        $(".joy8,.menu_9_kvartiri,.close_menu_9").toggleClass('active');
        $('.body').toggleClass('lock');
    });

});




$(function() {
    $('.slider_bar').slick({
        dots: false
    });


});