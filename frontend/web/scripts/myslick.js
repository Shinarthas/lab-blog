$( document ).ready(function(){
	$('.sliding-blog').fadeIn(1000);
	$('.head-blog').css('backgroundColor', '#7a7683');
	$('.head-blog').children('.loader-blog').fadeOut(1000);
	$('.my-slider').slick({
	  dots: true,
	  infinite: true,
	  autoplay: true,
	  //speed: 800,
	  autoPlayDelay: 13,
	  slidesToShow: 1,
	  //prevArrow: '<button class="slick-prev"></button>',
      //nextArrow: '<button class="slick-next"></button>',
	});
});
$(window).resize(function(){
	$('.head-blog .slick-slide img').each(function(){
		if($(this).height() < $('.head-blog .slick-slide').outerHeight(true)){
			$(this).css({
				'width':'auto',
				'height': 100 + '%'
			});
		} else if($(this).width() < $('.head-blog .slick-slide').width()) {
			$(this).css({
				'width':100 + '%',
				'height': 'auto'
			});
		}
	});
})