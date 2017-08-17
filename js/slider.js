$(function() {

  var width = 720;
  var bounceDistance = 30;
  var animationSpeed = 600;
  var pullSpeed = 120;
  var returnSpeed = 300;
  var currentSlide = 1;

  var $slider = $('.slider');
  var $sliderUl = $slider.find('ul');
  var $sliderLi = $sliderUl.find('li');



  $('.slider-next').on('click', function() {
    if (currentSlide != $sliderLi.length) {
        $sliderUl.animate({'margin-left': '-='+width}, animationSpeed, 'swing');
        currentSlide++;
        var $current = $('.show');
        var $next = $current.next();
        $current.removeClass('show');
        $next.addClass('show');
    } else {
        $sliderUl.animate({'margin-left': '-='+bounceDistance}, pullSpeed, 'swing').animate({'margin-left': '+='+bounceDistance}, returnSpeed, 'swing');
    }
  });

  $('.slider-prev').on('click', function() {
    if (currentSlide != 1) {
        $sliderUl.animate({'margin-left': '+='+width}, animationSpeed, 'swing');
        currentSlide--;
        var $current = $('.show');
        var $prev = $current.prev();
        $current.removeClass('show');
        $prev.addClass('show');
    } else {
        $sliderUl.animate({'margin-left': '+='+bounceDistance}, pullSpeed, 'swing').animate({'margin-left': '-='+bounceDistance}, returnSpeed, 'swing');
    }
  });
});