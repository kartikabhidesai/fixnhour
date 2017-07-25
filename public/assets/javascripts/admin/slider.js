var Slider = function () {

    var add = function() {
        var form = $('#addSlider');
        var rules = {
            slider_title: {required: true},
            slider: {required: true},
        };
        handleFormValidate(form, rules, function() {
            handleAjaxFormSubmit(form, true);
        });
    };

    var edit = function() {
        var form = $('#editSlider');
        var rules = {
            slider_title: {required: true},
            
        };
        $.extend(rules, {"slider": {
                required: {depends: function(e) {
                        return ($('#old_image').val() === '');
                    }},
            }, });
        handleFormValidate(form, rules, function() {
            handleAjaxFormSubmit(form, true);
        });   
    }
    
    var hanldeDelete = function(){
        $('body').on('click','.deleteRecored',function(){
            var sliderid = $(this).attr('data-id');
            $('#deleteModal').modal('show');
            $('.yes-sure').attr('data-id',sliderid);
        });
        $('body').on('click','.yes-sure',function(){
            var id = $(this).attr('data-id');
            var data = {id:id};
            var url = baseurl + 'SliderController/deleteSlider';

            var dataArr = {id:id};
                var url = "slider/ajaxAction";
                var action = 'deleteSlider';
            
                ajaxAction(url,action,dataArr,function(response){
                     handleAjaxResponse(response);
                });
        });
    } 
   
    return {
        //main function to initiate the module
        init: function () {
            hanldeDelete();
        },
        add_init: function () {
            add();
        },
        edit_init: function () {
            edit();
        },
    };
}();
