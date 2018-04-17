$(function(){                              
  $("a#appName").on('click', function(event){
      event.preventDefault();
      // $("#mainContent").load("mainHome"); // web.php 의 라우팅 으로 이동 > view('homeContent') > homeContent.blade.php
      $("#mainContent").load("mainHome"); // web.php 의 라우팅 으로 이동 > view('homeContent') > homeContent.blade.php
    });


});