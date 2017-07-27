var UpdateProfile = function () {

    var add = function () {
        


         $('#userInfoForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
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
                username: {
                    required: "Username is required1."
                },
                password: {
                    required: "Password is required."
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            success: function (element) {
            $(element)
                        .closest('.form-group').removeClass('has-error');
                //label.remove();
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                $(form).submit();

            }

        });

       
    }

   
    return {
        //main function to initiate the module
        init: function () {
            add();
        },
        add_init: function () {
        },
        edit_init: function () {
        },
    };
}();
