function sp(){
var st = $(document).scrollTop(),
	hght = $(document).outerHeight(true) - $(window).height(),
	proc = st/hght,
	wdth_proc = Math.round($(window).width() * proc);
	$('.progress-bar').width(wdth_proc);

}
sp();
$(document).scroll(function(){
	sp();
});