"use strict";

$(function(){

  function affiche() {
    if ($(this).find('i').hasClass('fa-angle-double-down')) {
      $(this).find('article').slideDown();
    }
    else {
      $(this).find('article').slideUp();
    }
    $(this).find('i').toggleClass('fa-angle-double-down');
    $(this).find('i').toggleClass('fa-angle-double-up');
  }

  function showDesc() {
  	$(this).find('.description').slideDown();
  }

  function cacher() {
  	$(this).find('.description').fadeOut();
  }

  $('.more').on('click', affiche);
  $('.fighter').on('mouseover', showDesc);
  $('.fighter').on('mouseleave', cacher);

});
