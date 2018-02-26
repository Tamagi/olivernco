$(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
  if (scrollTop >= 100){
  $('.navbar').css("height","60px");
  $('.navbar').css("transition","all 0.5s");
  $('.logo img').css("height","20px");
  }
  else{
    $('.navbar').css("height","100px");
    $('.logo img').css("height","30px");
  }
});
  $(document).ready(function() {
    $('#service').click(function(){
      $('#menu-arrow').toggleClass('arrow-rotate');
      $('.service-content').toggleClass('service-content-toggle');
    });
    $('.menuheader').click(function(){
      $('.menu-container').css("right","-320px");
      $('body, html').css("overflow-y","auto");
      setTimeout(function(){
        $('.menu').fadeOut();
      },200);
    });
    $('.menu-click').click(function(){
      $('.menu').fadeIn();    
      $('body, html').css("overflow-y","hidden");
      setTimeout(function(){
        $('.menu-container').css("right","0");
      },200);
    });
  });