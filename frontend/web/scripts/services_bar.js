$(document).ready(function(){
	$('.btn-bar').click(function(){
		$('.mobile-bar').slideDown(500).addClass('open');

	});
	$('.close_menu').click(function(){
		$('.mobile-bar').slideUp(500).removeClass('open');
	});

	$('.firs').find('p').click(function(){
		$('.firs').addClass('selected');
		//var text = $(this).parent().html();
		$(this).parent().next().addClass('select');
		console.log($(this).parent().next().addClass('select'))
	});
	$('.back').click(function(){
		$(this).parent().removeClass('select');
		$('.firs').removeClass('selected');
	});
});