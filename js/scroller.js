$(function() {

  var width = 720;
  var bounceDistance = 30;
  var fadeOutSpeed = 300;
  var fadeInSpeed = 1000
  var animationSpeed = 0;
  var pullSpeed = 120;
  var returnSpeed = 300;
  var currentSlide = 1;

  var $slider = $('.slider');
  var $sliderUl = $slider.find('ul');
  var $sliderLi = $sliderUl.find('li');

  var extent = 720 * ($sliderLi.length - 1);


  $('.slider-next').on('click', function() {
    if (currentSlide != $sliderLi.length) {
        $sliderUl.fadeOut(fadeOutSpeed).animate({'margin-left': '-='+width}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide++;
        $('.scrollable').scroll();
    } else {
        $sliderUl.fadeOut(animationSpeed).animate({'margin-left': '+='+extent}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide = 1;
    }
  });

  $('.slider-prev').on('click', function() {
    if (currentSlide != 1) {
        $sliderUl.fadeOut(fadeOutSpeed).animate({'margin-left': '+='+width}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide--;
    } else {
        $sliderUl.fadeOut(animationSpeed).animate({'margin-left': '-='+extent}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide = $sliderLi.length;
    }
  });
});