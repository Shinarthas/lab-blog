$(function(){

	$(".fast-contact img,.fast-contact .submit-contact-form").click(function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		
		var form = $(this).parent().parent().parent().parent().parent();
		
		width = screen.width;
		height = screen.height;
		
		if(screen.width == 0)
		{
			width = $(window).width();
			height = $(window).height();
		}
			
		$.ajax({
			url: "/contacts",
			type: "POST",
			dataType: "json",
			data: form.serialize()+"&width="+width+"&height="+height,
			success: function(response) {
				if(response.status == 200){
					showPopUp2();
					form.find('#'+key).removeClass('error');
					console.log('okay');
					setTimeout(function() { location.href = response.redirect }, 5000);
				}else if(response.status == 404){

					var errors = response.error;
					for (var key in errors) {
						var arr = errors[key];
						form.find('#'+key).removeClass('error');
						form.find('#'+key).addClass('error');
					}
				}


			},
			error: function(response) {

			}

		});
	})
	


})


function showPopUp2() {
    $('div.contactsPopupWrapper2').show();
}