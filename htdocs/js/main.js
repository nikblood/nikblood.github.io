$("#god1").hide(function(){
});
$('.god2').hide(function(){
});
$('.god3').hide(function(){
});
$('.money1').hide(function(){
});
$('.cmq2').hide(function(){
});
$('.impo1').hide(function(){
});




$( '.type' )
.change(function () {
   if ($('.type').val() == "БЕНЗИНОВЫЙ") {
      $("#god1").hide();
      $('.god2').hide();
      $('.god').show();
      $('.year').show();
      $('.import').show();
      $('.country').show();
      $('.money1').hide();
      $('.money').show();
      $('.cmq1').show();
      $('.cmq2').hide();
      $('.impo1').hide();
      $('.impo').show();
   
      }

});
$( '.type' ).change(function () {
   if ($('.type').val() == "ДИЗЕЛЬНЫЙ") {
      $('.god').hide();
      $('.god2').hide();
      $("#god1").show();
      $('.import').show();
      $('.country').show();
      $('.money1').hide();
      $('.money').show();
      $('.cmq1').show();
      $('.cmq2').hide();
      $('.impo1').hide();
      $('.impo').show();
   
     
      }

});
$( '.type' )
.change(function () {
   if ($('.type').val() == "ЭЛЕКТРИЧЕСКИЙ") {
    $('.year').hide();
    $('.import').hide();
    $('.country').hide();
    $('.money1').show();
    $('.money').hide();
    $('.cmq1').hide();
    $('.cmq2').show();
    $('.impo1').hide();
    $('.impo').hide();
    

    

     
     
      }

});
$( '.type' )
.change(function () {
   if ($('.type').val() == "ГИБРИД") {
      $('.year').hide();
      $('.country').hide();
      $('.import').show();
      $('.money1').show();
      $('.money').hide();
      $('.impo1').show();
      $('.impo').hide();
   
      
      
      }

});