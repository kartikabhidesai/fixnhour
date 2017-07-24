var user = function() {

    var userList = function() {

        deleteSingleData(baseurl + 'admin/user-delete/');
        
        $('body').on('click', '.resetPassword', function(){
            var dataid = $(this).attr('data-id');
            $('.resetPwd').attr('data-id', dataid);
        });
        
        $('body').on('click', '.resetPwd', function() {
            var dataid = $(this).attr('data-id');
            window.location = (baseurl + 'admin/reset-user-password/' + dataid);
        });
        
        var form = $('#resetPasswordForm');
        var rules = {
            new_pwd: {required: true},
            confirm_pwd: {required: true, equalTo: "#new_pwd"}
        };
        handleFormValidate(form, rules, function() {
            //handleAjaxFormSubmit(form, true);
        });
    };

    var userInfo = function() {

        var form = $('#userInfoForm');
        var rules = {
            title: {required: true},
            first_name: {required: true},
            last_name: {required: true},
            username: {required: true},
            password: {required: true},
            confirm_password: {required: true, equalTo: "#password"},
            address: {required: true},
            city_town: {required: true},
            state: {required: true},
            phone: {required: true},
            email: {required: true, email: true},
            postcode: {required: true}
        };
        handleFormValidate(form, rules, function() {
            handleAjaxFormSubmit(form, true);
        });

    };

    return {
        //main function to initiate the module
        init: function() {
            userInfo();
        },
        listInit: function() {
            userList();
        }
    };
}();
