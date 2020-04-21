/**
 * Created by alex_ on 24.12.2016.
 */

function AutoComplete(model,field,url) {

    var selectedField = $('#'+model.toLowerCase()+'-'+field);
    var result;
    var selected = {};

    this.getAutoCompleteData = function(){

    }
    
   var sendAjaxQuery = this.sendAjaxQuery = function (search_value) {
        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data: {'search':search_value},
            success: function(response) {
                if(response.status==200){
                    result = response.data;

                    showResult(result);
                }else{
                    hideResultContainer();
                    clearResultContainer();
                }
            }
        });
    }

   var showResult = this.showResult= function(data){
       clearResultContainer();
        var innerHtml = '';

        for(var id in data){
            innerHtml = innerHtml+'<li class="result" data-id="'+id+'" >'+data[id]+'</li>';
        }
        $('#'+model.toLowerCase()+'_'+field+'_auto_complete_result_container .auto_results').append(innerHtml);
        $('li.result').click(function () {
           addSelectedResult($(this).data('id'),$(this).text());
        })
       showResultContainer();
    }
    
    var clearResultContainer = this.clearResultContainer = function () {
        $('#'+model.toLowerCase()+'_'+field+'_auto_complete_result_container .auto_results').html("");
    }

    var hideResultContainer = this.hideResultContainer = function () {
        $('#'+model.toLowerCase()+'_'+field+'_auto_complete_result_container .auto_results').hide();
    }
    
    var showResultContainer = this.showResultContainer = function () {
        $('#'+model.toLowerCase()+'_'+field+'_auto_complete_result_container .auto_results').show();
    }
    
    this.insertAutoCompleteResultAria = function () {

        var insertHtml = '<input type="text" class="form-control" name="auto_complete_'+field+'_field" id="auto_complete_'+field+'_field">' +
            '<div class="auto-complete-result-container" id="'+model.toLowerCase()+'_'+field+'_auto_complete_result_container"><ul class="auto_results"></ul></div>';
        $(function() {
            selectedField.after(insertHtml);
        });
    }

  var addSelectedResult =  this.addSelectedResult = function(id,name) {

      if(selected[id] == undefined)
      {
          selected[id]=id;

        var insertHtml = '<div class="result-exemplar" id="selected_result_'+field+'_'+id+'"><li class="glyphicon glyphicon-minus" aria-hidden="true"></li>'+name+
            '<input type="hidden" name="'+model+'['+field+'][]" value="'+id+'"></div>';
        $(function() {
            $('#' + model.toLowerCase()+'_'+field + '_auto_complete_result_container').append(insertHtml);
            $('#'+model.toLowerCase()+'_'+field+'_auto_complete_result_container .result-exemplar li').click(function () {
                removeSelectedExemplar(this);
                // method(this);
            });
        });
      }

    }
  var removeSelectedExemplar = this.removeSelectedExemplar = function (selector) {
      if(selected[$(selector).next().val()] !== undefined){
          delete selected[$(selector).next().val()];
      }
      $(selector).parent().remove();
  }  

        this.insertAutoCompleteResultAria();

        $(function () {
            $('#'+model.toLowerCase()+'_'+field+'_auto_complete_result_container .result-exemplar li').click(function () {
                removeSelectedExemplar(this);
               // method(this);
            });

            $('#auto_complete_'+field+'_field').focus(function () {
                sendAjaxQuery('');
            });
            // $('#auto_complete_'+field+'_field').focusout(function () {
            //     hideResultContainer();
            // });
           $('#'+model.toLowerCase()+'_'+field+'_auto_complete_result_container').click(function () {
             hideResultContainer();
           });

            $('#auto_complete_'+field+'_field').keyup(function(){
                var value = $(this).val();
                    if(value.length>2 || value.length ==0){
                        sendAjaxQuery(value);
                    }
            });
        });


}