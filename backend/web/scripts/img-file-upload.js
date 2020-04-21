/**
 * alex_d.93@mail.ru / mralexdin@gmail.com
 */


function uploadFilesImg()
{

    $('.progress-bar').css('width',0+"%").attr('aria-valuenow',0);

    var file_data = $('#imageFiles').prop('files');

    var form_data = new FormData();
    for(var i=0;i<file_data.length;i++)
    {
        form_data.append('UploadImgFilesForm[imageFiles]['+i+']', file_data[i]);
    }
    //console.log(file_data);
    $.ajax({
        url: '/img/ajax-upload-files', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        xhr: function()
        {
            var xhr = new window.XMLHttpRequest();
            // прогресс загрузки на сервер
            xhr.upload.addEventListener("progress", function(evt){
                if (evt.lengthComputable) {
                    var percentComplete = Math.ceil(evt.loaded / evt.total * 100);
                    // делать что-то...

                    $('.progress-bar').css('width',percentComplete+"%").attr('aria-valuenow',percentComplete).text(percentComplete+'%');

                }
            }, false);

            return xhr;
        },
        success: function(data){
           if(data.status == 200)
           {
               var links = data.links;
               for(var i=0; i<links.length; i++)
               {
                   $('.result_img').append('<img src="'+links[i]+'">');
                   $('.progress-bar').css('width',100+"%").attr('aria-valuenow',100).text('100%');
               }
               $('#imageFiles').val('');
           }
        }
    });
}

function loadImgFiles(callback=0) {
    $.ajax({
        method: "POST",
        url: "/img/ajax-get-small-img-list",
    }).done(function( data ) {
            $('.img-list').html('');
        for(var i=0; i<data.length; i++) {
            $('.img-list').append('<img src="' + data[i].link + '" class="'+data[i].class+'" title="'+data[i].link_post+'" data-clipboard-action="copy" data-clipboard-text="'+data[i].link_post+'">');
        }
        $('.img-list img').click(function () {
            var link = $(this).data('link');
        });
        if(callback)
            callback()
    });

}


$( "#new-post-form,#edit-post-form" ).mouseleave(function() {
    saveTempArticleData();
});

$( "#edit-post-form , #new-post-form" ).submit(function( event ) {

       // event.preventDefault();
       // console.log('work');
        $('#out-html').html($('#content').val());

        $("#out-html img").removeAttr( "width" );

        $("#out-html img").removeAttr( "height" );
        $('#out-html img').css('height','auto');
        $('#content_result').val($( "#out-html").html());
       // console.log($("#content_result").val());



   // $( "#edit-post-form" ).submit();
});

var saveProgressFlag = true;

function saveTempArticleData(){
    if(saveProgressFlag){
        var form = $('#new-post-form');
        if(form.length == 0){
            form = $('#edit-post-form');
        }
        saveProgressFlag = false;
        $.ajax({
            url: "/blog/save-progress",
            type: "POST",
            dataType: "json",
            data: form.serialize(),
            success: function(response) {
                if(response.status==200){
                    $('.link-preview').attr('href','https://thunderrise.com/test?seo_name='+$("#postnewform-seo_url").val()+'&time='+response.time);
                    setTimeout('saveProgressFlag=true', 60000);
                }
            }
        });
   }
}
