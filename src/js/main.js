$(function() {
    $(".header__burger").on("click", function(event) {
        $(".header__burger,.header_menu").toggleClass('active')
    });

});
$(function() {
    $(".call_phone,.back").on("click", function(event) {
        $(".call_phone,.call__menu,.back").toggleClass('active')
    });

});