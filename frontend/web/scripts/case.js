$( document ).scroll(function(){	

	$(".block").each(function(){
		
		
		var target = $(this).data("target");
		var offTop = Math.round($(this).offset().top) + 120;
		var diapasone = $(this).outerHeight(true)/5;
		var heightTwo = offTop + $(this).outerHeight(true)/2;
		
		var diff = $(document).scrollTop() - offTop;


		if( $(document).scrollTop() >= offTop && $(document).scrollTop() <= heightTwo ) {
			$(target).css("opacity", 1 - (diff / diapasone) );
		}
	});
});