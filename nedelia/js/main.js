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



$(document).ready(function() {
    var projectsList = $('ul.projects-list');
    $('nav').on('click', 'a', function() {
        var contentId = $(this).attr('href');
        if (contentId === '#projects') {
            projectsList.slideToggle(300);
        }
    });
});
$(document).ready(function() {
    var projectsList1 = $('ul.projects-list1');
    $('nav').on('click', 'a', function() {
        var contentId = $(this).attr('href');
        if (contentId === '#projects1') {
            projectsList1.slideToggle(300);
        }
    });
});
$(document).ready(function() {
    var projectsList2 = $('ul.projects-list2');
    $('nav').on('click', 'a', function() {
        var contentId = $(this).attr('href');
        if (contentId === '#projects2') {
            projectsList2.slideToggle(300);
        }
    });
});