$(function(){                              
  $("a#appName").on('click', function(event){
      event.preventDefault();
      // var menu_group = $('#menu-btn-group');
      // menu_group.removeClass('menu_none');
      // menu_group.removeClass('menu_atb');
      // menu_group.removeClass('menu_mpb');
      // menu_group.removeClass('menu_tlb');
      // menu_group.addClass('menu_hcb');

      $("#mainContent").load("mainHome"); // web.php 의 라우팅 으로 이동 > view('homeContent') > homeContent.blade.php
    });


});