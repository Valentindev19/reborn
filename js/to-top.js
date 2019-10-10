$(function () {
$('#btn_up').click(function(){
  $('html,body').animate({scrollTop:0},'slow');
});
$(window).scroll(function()
{
  if($(window).scrollTop()<50)
  {
    $('btn_up').fadeout();
  }
  else {
    $('#btn_up').fadeIn();
  }
});
});
