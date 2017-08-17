if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 // You are in mobile browser

 $(function() {

  $('#dynamic > ul > li:nth-child(0) > img').insertAfter('.dynamic > div:nth-child(0) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(1) > img').insertAfter('.dynamic > div:nth-child(1) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(2) > img').insertAfter('.dynamic > div:nth-child(2) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(3) > img').insertAfter('.dynamic > div:nth-child(3) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(4) > img').insertAfter('.dynamic > div:nth-child(4) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(5) > img').insertAfter('.dynamic > div:nth-child(5) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(6) > img').insertAfter('.dynamic > div:nth-child(6) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(7) > img').insertAfter('.dynamic > div:nth-child(7) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(8) > img').insertAfter('.dynamic > div:nth-child(8) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(9) > img').insertAfter('.dynamic > div:nth-child(9) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(10) > img').insertAfter('.dynamic > div:nth-child(10) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(11) > img').insertAfter('.dynamic > div:nth-child(11) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(12) > img').insertAfter('.dynamic > div:nth-child(12) > h2:first-of-type');
  $('#dynamic > ul > li:nth-child(13) > img').insertAfter('.dynamic > div:nth-child(13) > h2:first-of-type');

  $('#static > ul').insertBefore('.show h2:last-of-type');
  $('main > section:first-child').remove();

});

} else {

$(function() {

  var width = 720;
  var bounceDistance = 30;
  var fadeOutSpeed = 300;
  var fadeInSpeed = 1000
  var animationSpeed = 0;
  var pullSpeed = 120;
  var returnSpeed = 300;
  var currentSlide = 1;
  var offTime = 1600;
  var outOf = ' / ';

  var $slider = $('.slider');
  var $sliderUl = $slider.find('ul');
  var $sliderLi = $sliderUl.find('li');
  var $counter = $('.counter');

  var extent = 720 * ($sliderLi.length - 1);

  $counter.text((currentSlide)+outOf+($sliderLi.length));

  $('.slider-next').on('click', function() {
    $('.slider-next, .slider-prev').addClass('off');
    if (currentSlide != $sliderLi.length) {
        $sliderUl.fadeOut(fadeOutSpeed).animate({'margin-left': '-='+width}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide++;
        var $current = $('.dynamic > .show');
        var $next = $current.next();
        $current.fadeOut(fadeOutSpeed, function(){
          $current.removeClass('show');
        });
        $next.delay(600).fadeIn(fadeInSpeed, function() {
          $next.addClass('show');
        });
        $counter.text((currentSlide)+outOf+($sliderLi.length));
    } else {
        $sliderUl.fadeOut(animationSpeed).animate({'margin-left': '+='+extent}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide = 1;
        var $current = $('.dynamic > .show');
        var $next = $('.dynamic div:first');
        $current.fadeOut(animationSpeed, function(){
          $current.removeClass('show');
        });
        $next.delay(300).fadeIn(fadeInSpeed, function() {
          $next.addClass('show');
        });
        $counter.text((currentSlide)+outOf+($sliderLi.length));
    };
    setTimeout(function(){ $('.slider-next, .slider-prev').removeClass('off'); }, offTime);
  });

  $('.slider-prev').on('click', function() {
    $('.slider-next, .slider-prev').addClass('off');
    if (currentSlide != 1) {
        $sliderUl.fadeOut(fadeOutSpeed).animate({'margin-left': '+='+width}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide--;
        var $current = $('.dynamic > .show');
        var $prev = $current.prev();
        $current.fadeOut(fadeOutSpeed, function(){
          $current.removeClass('show');
        });
        $prev.delay(600).fadeIn(fadeInSpeed, function() {
          $prev.addClass('show');
        });
        $counter.text((currentSlide)+outOf+($sliderLi.length));
    } else {
        $sliderUl.fadeOut(animationSpeed).animate({'margin-left': '-='+extent}, animationSpeed).fadeIn(fadeInSpeed);
        currentSlide = $sliderLi.length;
        var $current = $('.dynamic > .show');
        var $prev = $('.dynamic div:last');
        $current.fadeOut(animationSpeed, function(){
          $current.removeClass('show');
        });
        $prev.delay(300).fadeIn(fadeInSpeed, function() {
          $prev.addClass('show');
        });
        $counter.text((currentSlide)+outOf+($sliderLi.length));
    };
    setTimeout(function(){ $('.slider-next, .slider-prev').removeClass('off'); }, offTime);
  });
});
}

$(function() {
  var pathname = location.pathname;
  $('header a[href="'+pathname+'"]').parent().addClass('name');
});



