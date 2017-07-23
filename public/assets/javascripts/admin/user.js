var user = function () {

    deleteSingleData(baseurl + 'admin/user-delete/');
    
    var userInfo = function() {
        
        var form = $('#userInfoForm');
        var rules = {
            title: {required: true},
            first_name: {required: true},
            last_name: {required: true},
            phone: {required: true},
            mobile: {required: true},
            email: {required: true, email: true},
            address: {required: true},
            city_town: {required: true},
            state: {required: true},
            postcode: {required: true}
        };
        handleFormValidate(form, rules, function() {
            handleAjaxFormSubmit(form, true);
        });
        
    };
   
    return {
        //main function to initiate the module
        init: function () {
            userInfo();
        }
    };
}();
