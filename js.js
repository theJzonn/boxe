"use strict";

function affiche() {
  var index = $(this).find('button').data('index');
  // var index = this.data('index');
  // montre[index];
  if ($(this).find('button').data('mode') == 'false') {
    $(this).find('article').slideUp();
    $(this).find('button').data('mode', 'true');
    console.log('false');
  }
  else {
    $(this).find('article').slideDown();
    $(this).find('button').data('mode', 'false');
  }
  $(this).find('i').toggleClass('fa-angle-double-down');
  $(this).find('i').toggleClass('fa-angle-double-up');
}

$('.more').on('click', affiche);


// monelement.getAttribute('data-lieu')
