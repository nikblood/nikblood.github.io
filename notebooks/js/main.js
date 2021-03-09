function ibg(){
    $.each($('.ibg'),function(index,val){
        if($(this).find('img').length>0){
            $(this).css('background-image','url("'+$(this).find('img').attr('src')+'")')
        }
    });
}
ibg();

    $('.slider').slick({
        dots: false,
        centermode:true,
        slideToShow:2,
        arrows:true
    } );

