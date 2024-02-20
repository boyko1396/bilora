$(document).ready(function() {
  // header toggle
  $('.header__toggle').click(function() {
    $('body').toggleClass('is-show');
  });

  // document card toggle
  if ($('.documentation__card').length > 0) {
    $('.documentation__card:first').addClass('is-show');
    $('.documentation__card:first').find('.documentation__card-dropdown').show();
  }

  if ($('.js-doc-card-toggle').length > 0) {
    $('.js-doc-card-toggle').click(function() {
      $(this).parent().toggleClass('is-show');
      $(this).siblings().slideToggle(450);
    });
  }
});