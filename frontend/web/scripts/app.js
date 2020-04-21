if ($(window).scrollTop() > 0) {
    $('.header').addClass('header_white');
} else {
    $('.header').removeClass('header_white');
}
$(window).load(function () {

    // // loader
    // (function() {
    //     //$('.jsLoader').addClass('hide');
    //
    //     $('body').waitForImages(function() {
    //         setTimeout(function() {
    //             $('.jsLoader').addClass('hide');
    //         }, 1000);
    //     });
    // })();

});
/*(function($){
    $(window).on("load",function(){
        $(".main3 .scr").mCustomScrollbar({
            axis:"x",
            theme:"inset-3-dark"
        });
    });
})(jQuery);*/
$(document).ready(function() {
// стереть при первой же возможности
 $('.feachers a[href="/"]').click(function(event){
    event.preventDefault();
 });
    // contacts focus
    (function() {
        var $input = $('.contacts input, #budget');

        $input.focus(function() {
            $(this).siblings('label').addClass('focus');
            $(this).siblings('span').addClass('focus');

            if ($(this).closest('label').hasClass('select')) {
                $('.drop').addClass('active');
                $(this).siblings('div.down').slideDown(200);
            }
        });

        $input.blur(function() {
            (!$(this).val()) && $(this).siblings('label').removeClass('focus');
            (!$(this).val()) && $(this).siblings('span').removeClass('focus');

            if ($(this).closest('label').hasClass('select')) {
                $('.drop').removeClass('active');
                $(this).siblings('div.down').slideUp(0);
            }
        });

        $('.drop').on('mousedown',function(){
            if(!$(this).hasClass('active')){
                setTimeout(function(){
                    $('#budget').focus();
                },1);
            }
        });

        $('div.select').on('mousedown', function(e) {
            $(this).closest('label.select').find('input').val($(this).text());
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });
    })();

    // contacts upload
    $(function() {
        $('input.upload').on('change', function(e) {
            e.preventDefault();
            $('div.attach').hide();

            var data = new FormData();
            data.append(0, e.target.files[0]);

            var $files = $('div.files');
            $files.append('<div class="file">');
            $files.find('div.file').last().append('<div class="progress">');
            $files.find('div.file').last().append('<div class="info">');
            $files.find('div.info').last().append('<div class="name">');
            $files.find('div.info').last().append('<div class="size">');
            $files.find('div.info').last().append('<div class="close">');
            $files.find('div.info').last().append('<div class="clear">');
            reinitclicks();

            $files.find('div.name').last().text(e.target.files[0].name);
            $files.find('div.size').last().text(Math.ceil(e.target.files[0].size*10/1024/1024)/10 + ' MB');

            $.ajax({
                url: '/contacts/upload',
                type: 'post',
                contentType: false,
                processData: false,
                data: data,
                cache: false,
                dataType: 'json',
                xhr: function() {
                    var xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = Math.ceil(evt.loaded / evt.total * 100);
                            $files.find('div.progress').last().css({'width': percentComplete + '%'});
                        }
                    }, false);
                    return xhr;
                },
                success: function(res) {
                    temp = $("#files").val();
                    tt = '<a href="http://' + document.domain + '/uploads/contacts/' + res.filename + '">' + res.filename + '</a>';
                    $("#files").val(temp + "<br>\n" + tt);
                    $('div.attach').show();
                }
            });
        });

        function reinitclicks() {
            $('div.file div.close').on('click', function(e) {
                e.preventDefault();
                $(this).closest('div.file').slideUp(200, function() {
                    $(this).detach();
                    $('div.attach').show();
                });
            });
        }
    });

    // main slider
    (function() {
        var $sliderWrapper = $('div.sliderWrapper'),
            $slider = $sliderWrapper.find('div.slider'),
            sliderWidth = 0,
            $slide = $slider.find('div.slide'),
            slideWidth = parseInt($slide.css('width'));

        var sliderSpeed = 250;

        sliderWidth = $slide.length * slideWidth;
        $slider.css({
            width: sliderWidth
        });

        if (isNaN(slideWidth) || isNaN(sliderWidth)) {
            return false;
        }

        var allowClick = true;

        $sliderWrapper.find('.arrow').click(function(e) {
            e.preventDefault();

            if (!allowClick)
                return false;

            var currentOffset = parseFloat($slider.css('margin-left')),
                action = $(this).hasClass('left') ? 'next' : 'prev',
                newOffset;

            if (action === 'next') {
                newOffset = currentOffset + slideWidth;
            } else if (action === 'prev') {
                newOffset = currentOffset - slideWidth;
            }
            allowClick = false;

            if (Math.abs(newOffset) >= sliderWidth) {
                newOffset = 0;
            } else if (newOffset > 0) {
                newOffset = slideWidth - sliderWidth;
            }

            $slider.animate({
                marginLeft: newOffset
            }, sliderSpeed, function() {
                allowClick = true;
            });
        });
    })();

    //
    (function() {
        $('.header__social-mobile-control').click(function(e) {
            e.preventDefault();
            $(this).toggleClass('header__social-mobile-control_active');
            $('.header__social').toggleClass('header__social_visible');
        });
    })();

    //

    //

    (function() {
        $(window).scroll(function() {
            setTimeout(function(){
                if ($(this).scrollTop() > 0) {
                  //  $('.header').addClass('header_white');
                    $('.first-screen__lab3m').addClass('first-screen__lab3m_scale');
                } else {
                  //  $('.header').removeClass('header_white');
                    $('.first-screen__lab3m').removeClass('first-screen__lab3m_scale');
                }
            },400)
        });
    })();






    //

    // main form
    (function() {
        $('div.form input.submit').on('click', function(e) {
            e.preventDefault();
            $(this).fadeOut(300).parent().addClass('ok');
        });
    })();

    // main arrow
    (function() {
        $('div.block.white div.button').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $('div.block.white div.text').animate({
                    height: $('div.block.white div.text div').height()
                }, 250);
            } else {
                $('div.block.white div.text').animate({
                    height: 144
                }, 250);
            }
        });
    })();

    //
    (function() {
        $('.header__menu-mobile-control').click(function(e) {
       
            $(this).toggleClass('header__menu-mobile-control_close');
            $('.header__menu').toggleClass('header__menu_visible');
        });
    })();

    //

    // main arrow
    (function() {
        $('.second-screen__read').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $('.second-screen__desc_hidden').slideDown(300);
                $(this).find('span').text('Show less');
            } else {
                $('.second-screen__desc_hidden').slideUp(300);
                $(this).find('span').text('Read more');
            }
        });
    })();

    //
    (function() {
        firstscreenanimate();
        $(window).scroll(function() {
            firstscreenanimate();
        });
    })();

(function(){
    for(var i = 0; i < $('.small-content').length; i++ ) {
        var textLength = $('.small-content span')[i].innerHTML.length
        if( textLength > 285 ){
            var text = $('.small-content span')[i].innerHTML.slice(0, 282) + '...';
            $('.small-content span')[i].innerHTML = text;
        }
    }   
})()
    
});
function firstscreenanimate() {
    var lab3m, flash;

    lab3m = Math.floor($(window).scrollTop() * (100 / 750));
    flash = Math.floor($(window).scrollTop() * (100 / 750));

    $('.first-screen__lab3m').css({
        'transform': 'translateX(' + lab3m + 'px)',
    });

    $('.first-screen__flash').css({
        'transform': 'translateY(' + '-' + flash + '%)',
    });
}

function senDataContacts() {

    var form = $('#contacts-form');
		width = screen.width;
		height = screen.height;
		
		if(screen.width == 0)
		{
			width = $(window).width();
			height = $(window).height();
		}
			
    $.ajax({
        url: "/ru/contacts",
        type: "POST",
        dataType: "json",
        data: form.serialize()+"&width="+width+"&height="+height,
        success: function(response) {
            console.log('okay');
            if(response.status == 200){
                showPopUp();

                resetErrors();
                //form.reset();
                console.log('okay');
				setTimeout(function() { location.href = '/' }, 5000);
            }else if(response.status == 404){

                var errors = response.error;
                resetErrors();
                for (var key in errors) {
                    var arr = errors[key];
                    $('#'+key).addClass('error');
                }
            }


        },
        error: function(response) {

        }

    });
}
// contacts popup

function showPopUp() {
    $('div.contactsPopupWrapper').show();
   // setTimeout(function() { location.reload() }, 5000);
}

(function() {
    $('div.contactsPopupClose').on('click', function(e) {
        e.preventDefault();
        $('div.contactsPopupWrapper').hide();
        location.reload();
    });
})();

function resetErrors()
{
    var arr = ['email','username','budget'];
    for(var key in arr){
        $('#'+arr[key]).removeClass('error');
    }

}

function sendStatData(status) {
    $.ajax({
        url: "/contacts/send-stat-data",
        type: "POST",
        dataType: "json",
        data: {status:status},
        success: function(response) {
           // console.log(response);
        }
    });
}

function saveClientEmail() {
    var email = $('input.email-input').val();
    $.ajax({
        url: "/contacts/save-client-email",
        type: "POST",
        dataType: "json",
        data: {email:email},
        success: function(response) {
            if(response.status == 200){
                if(isLocalStorageNameSupported()) {
                    localStorage.setItem("email", "200");
                }
                $('.contactsPopup .letter').hide('fast');
                $('.contactsPopup .like').show();
                $('.contactsPopup h2').hide('fast').text('Thank You!').show('drop');
                $('.contactsPopup form').hide('fade');
                sendStatData(1);
               setTimeout(hideSubscribePopup,4000);
            }else{
                var error = response.error;
                var err_temp = '<div class="alert alert-danger" style="max-width: 500px;margin: 0 auto;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
                for (var key in error) {
                    for(var i=0;i<error[key].length;i++){
                        err_temp+='<div>'+error[key][i]+'</div>';
                    }
                }
                err_temp+='</div>';
               $('.contactsPopup .status-container').html(err_temp);
            }
        }
    });
}

$('#contactsSend').click(function( event ) {
    senDataContacts();
    event.preventDefault();
});
if(!localStorage.email){
/*
    $('.contactPopupMessage').removeAttr('hidden');
setTimeout(function(){
    $('.contactPopupMessage').css({'height' : '100%', 'visibility' : 'visible', 'display' : 'block !important'})
}, 30000);
*/
}

$('.contactPopupMessage .closeMess').click(function(){
    sendStatData(0);
    ///storage = window.sessionStorage;
    if(isLocalStorageNameSupported()){
        localStorage.setItem("email", "403");
    }
    //$('.contactPopupMessage').hide();
    hideSubscribePopup();
});


function hideSubscribePopup() {
    $('.contactsPopup').css('transform' , 'translateY(-150%)');
    $('.contactPopupMessage').css({'height' : '', 'visibility' : ''});
}

$('.contactsPopup input[type="submit"]').click(function (e) {
    $('.contactsPopupWrapper').removeAttr('hidden');
    saveClientEmail()
    e.preventDefault();
});


function isLocalStorageNameSupported() {
    var testKey = 'test', storage = window.localStorage;
    try {
        storage.setItem(testKey, '1');
        storage.removeItem(testKey);
        return true;
    } catch (error) {
        return false;
    }
}

$('.drop-category').click( function() {
    $('.drop-category').toggleClass('open');
    $('.marker-list').slideToggle('slow');
});


$(document).on('click', function(e) {
  if (!$(e.target).closest(".wrap-list").length && $('.drop-category').is('.open') && $('.drop-category').css('display') == 'inline-block' ) {
    $('.marker-list').slideUp('slow');
    $('.drop-category').removeClass('open');
  }
  e.stopPropagation();
});


$( "#post-search" ).submit(function( event ) {

    $.ajax({
        type: "POST",
        url: '/blog/search',
        data: $('#post-search').serialize(),
        success: function (resp) {
            console.log(resp);
        }
    });

    event.preventDefault();
});

	$("form.mlist").submit(function(e){
		e.preventDefault();
		document.location.href = "/blog/search/"+$("#postsearchform-search").val();
	})
	

$(document).ready(function() {
    $('.search-button').on('click', function(){
        $(this).parents('.container').toggleClass('searchfield');
    })
})





