
var $star_rated = $('#rated .fa');

var SetRatedStar = function() {
  return $star_rated.each(function() {
    if (parseInt($star_rated.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

SetRatedStar();
$(document).ready(function() {

});