var UpdateProfile = function () {

    var add = function () {

        


        /// $('#userInfoForm').validate({

        var form = $('#userInfoForm');
        form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: ":hidden",
            rules: {
                title: {
                    required: true
                },
                first_name: {
                    required: true
                },
                last_name: {
                    required: false
                },
                 address : {
                    required: false
                },
                 city_town : {
                    required: false
                },
                 phone : {
                    required: false
                },
                 state : {
                    required: false
                },
                 postcode : {
                    required: false
                }

            },
            messages: {
                username: { required: "Username is required." },
                password: { required: "Password is required." }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            success: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
                //label.remove();
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });
    };

    var changePassword = function(){
        $('#passwordchange').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                old_password: { required: true },
                new_password: { required: true },
                confirm_password: { required: true, equalTo : "#new_password" }
            },
            messages: {
                old_password: { required: "Old Password is required." },
                new_password: { required: "New Password is required." }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            success: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
                //label.remove();
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                return true;

            }
        });
    };
    
    var aboutme = function () {
        var form = $('#aboutmeForm');
        var error = $('.alert-danger', form);
        var success = $('.alert-success', form);
        
         form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: ":hidden",
            rules: {
                overview_title: {required: true},
                overview_text: {required: true},
                price: {required: true,number:true}
            },
            messages: {
                username: { required: "Title is required." },
                password: { required: "Overview is required." }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success.hide();
                error.show();
                //App.scrollTo(error, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                //$(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label.closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            
//            invalidHandler: function (event, validator) { //display error alert on form submit   
//                $('.alert-danger', $('.login-form')).show();
//            },
//            highlight: function (element) { // hightlight error inputs
//                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
//            },
//            success: function (element) {
//            $(element).closest('.form-group').removeClass('has-error');
//                //label.remove();
//            },
//            errorPlacement: function (error, element) {
//                error.insertAfter(element.closest('.input-icon'));
//            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });
    };
   
    return {
        //main function to initiate the module
        init: function () {
            add();
        },
        changePassword: function () {
            changePassword();
        },
        about: function () {
            aboutme();
        }
    };
}();
