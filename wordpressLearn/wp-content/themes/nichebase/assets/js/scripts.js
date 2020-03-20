jQuery(document).ready(function($) {
  "use strict";
  // Mean Menu
  var $navmenu = $('nav');
  var $menu_starts = ($navmenu.data('nav') !== undefined) ? $navmenu.data('nav') : 1199;
  $('.nibs-navigation').meanmenu({
    meanMenuContainer: '.nibs-header .nibs-header-right',
    meanMenuOpen: '<span></span>',
    meanMenuClose: '<span></span>',
    meanExpand: '<i class="fa fa-angle-down"></i>',
    meanContract: '<i class="fa fa-angle-up"></i>',
    meanScreenWidth: $menu_starts,
  });
  $(".mean-bar .dropdown-nav").each(function() {
    $(this).appendTo($(this).parent('.has-dropdown'));
  });
  $(".mean-container .mean-nav > ul > li:last-child a:last-child").focusout(function(){
    $('a.meanmenu-reveal').focus();
  });

  //NicheBase Navigation Hover Script
  $('.nibs-navigation .has-dropdown').on ({
    focusin : function() {
      $(this).find('ul.dropdown-nav').first().stop(false, false).fadeIn(300);
    },
    focusout : function() {
      $(this).find('ul.dropdown-nav').first().stop(false, false).fadeOut(300);
    },
    mouseenter : function() {
      $(this).find('ul.dropdown-nav').first().stop(false, false).fadeIn(300);
    },
    mouseleave : function() {
      $(this).find('ul.dropdown-nav').first().stop(false, false).fadeOut(300);
    }
  });

  $(window).load(function() {
    $('.nibs-news-item').hover (
      function() {
        $(this).addClass('nibs-hover');
      },
      function() {
        $(this).removeClass('nibs-hover');
      }
    );
  });

});