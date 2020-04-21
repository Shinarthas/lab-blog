current_page = 1;
page_loading = false;

if(blog_pages_count==1)
	$(".ajax-blog-loader").hide();

$(document).scroll(function(e){
	if(blog_pages_count <= current_page)
		return;

	topval = $(this).scrollTop();
	height = $(this).height()-$(window).height();
	if((height - topval) < 600)
		blogNextPage();
})



function blogNextPage()
{
	if(page_loading)
		return;
		
	current_page++;
	page_loading = true;
	
	if(searchphrase=="")
		load_url = window.location.pathname+"/"+current_page;
	else
		load_url = '/blog/search?search='+encodeURIComponent(searchphrase)+"&page=" + current_page;
	$.ajax({
		url: load_url,
		success: function(res){
			//$(".blog .container .row").append(res);
			if(blog_pages_count <= current_page)
				$(".ajax-blog-loader").hide();
			setTimeout(function(){
				page_loading = false;
			},200);
		}
	})
}