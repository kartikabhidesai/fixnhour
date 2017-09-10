var freelancerSetting = function () {

    var ajaxRequest = function (action, postData, callback) {
        $.ajax({
            url: baseurl + 'freelancer/setting/ajaxAction',
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}, type: "POST",
            data: {'action': action, 'data': postData},
            success: function (data) {
                callback(data);
            }
        });
    };

    var manageEducation = function () {

        hideMsgBox();

        function hideMsgBox() {
            setTimeout(function () {
                $("#errorSection").slideUp(3000);
            }, 5000);
        }

        $('#addEducationForm').validate({
            errorElement: 'span', errorClass: 'help-block', focusInvalid: false,
            rules: {
                school: {required: true},
                degree: {required: true},
                school_from: {required: true},
                school_to: {required: true}
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            success: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });

        $('#editEducationForm').validate({
            errorElement: 'span', errorClass: 'help-block', focusInvalid: false,
            rules: {
                school: {required: true},
                degree: {required: true},
                school_from: {required: true},
                school_to: {required: true}
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            success: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });

        $("body").on('click', '.deleteEdu', function () {
            $(".deleteConf").attr('data-id', $(this).data('id'));
            $("#deleteEducation").modal('show');
        });
        $("body").on('click', '.deleteConf', function () {
            ajaxRequest('educationDelete', {id: $(this).attr('data-id')}, function (data) {
                location.reload();
            });
        });

        $("body").on('click', '.getEdit', function () {
            ajaxRequest('getEducationEdit', {id: $(this).data('id')}, function (data) {
                var output = JSON.parse(data);
                if (output.status == 'success') {
                    $("#edit_school").val(output.data['school']);
                    $("#edit_school_from").val(output.data['school_from']);
                    $("#edit_school_to").val(output.data['school_to']);
                    $("#edit_descr").val(output.data['descr']);
                    $("#edit_degree").val(output.data['degree']);
                    $("#edit_area_of_study").val(output.data['area_of_study']);
                    $("#edit_id").val(output.data['id']);

                    $("#editEducation").modal('show');
                }
            });
        });
    };

    var manageEmployment = function () {

        hideMsgBox();

        function hideMsgBox() {
            setTimeout(function () {
                $("#errorSection").slideUp(3000);
            }, 5000);
        }

        $('#addEmploymentForm').validate({
            errorElement: 'span', errorClass: 'help-block', focusInvalid: false,
            rules: {
                location: {required: true},
                country: {required: true},
                title: {required: true},
                role: {required: true},
                emp_from: {required: true},
                emp_to: {required: true}
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            success: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });

        $('#editEmploymentForm').validate({
            errorElement: 'span', errorClass: 'help-block', focusInvalid: false,
            rules: {
                school: {required: true},
                degree: {required: true},
                school_from: {required: true},
                school_to: {required: true}
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            success: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });

        $("body").on('click', '.deleteEmp', function () {
            $(".deleteConf").attr('data-id', $(this).data('id'));
            $("#deleteEmployment").modal('show');
        });
        $("body").on('click', '.deleteConf', function () {
            ajaxRequest('employmentDelete', {id: $(this).attr('data-id')}, function (data) {
                location.reload();
            });
        });

        $("body").on('click', '.getEdit', function () {
            ajaxRequest('getEmploymentEdit', {id: $(this).data('id')}, function (data) {
                var output = JSON.parse(data);
                if (output.status == 'success') {
                    $("#edit_company").val(output.data['company']);
                    $("#edit_descr").val(output.data['descr']);
                    $("#edit_emp_from").val(output.data['emp_from']);
                    $("#edit_emp_to").val(output.data['emp_to']);
                    $("#edit_location").val(output.data['location']);
                    $("#edit_title").val(output.data['title']);
                    $("#edit_country").val(output.data['country']);
                    $("#edit_role").val(output.data['role']);
                    $("#edit_id").val(output.data['id']);


                    $("#editEmployment").modal('show');
                }
            });
        });
    };

    var manageAbout = function () {

        hideMsgBox();

        function hideMsgBox() {
            setTimeout(function () {
                $("#errorSection").slideUp(3000);
            }, 5000);
        }

        $('#addEmploymentForm').validate({
            errorElement: 'span', errorClass: 'help-block', focusInvalid: false,
            rules: {
                location: {required: true},
                country: {required: true},
                title: {required: true},
                role: {required: true},
                emp_from: {required: true},
                emp_to: {required: true}
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            success: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });
    };

        var manageSkill = function(){
    
    
//            var cities = new Bloodhound({
//                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
//                queryTokenizer: Bloodhound.tokenizers.whitespace,
//                prefetch: baseurl + 'freelancer/setting/getSkillList'
//              });
//              cities.initialize();
//
//             /// var elt = ;
//              $('#dd').tagsinput({
//                itemValue: 'value',
//                itemText: 'text',
//                typeaheadjs: {
//                  name: 'cities',
//                  displayKey: 'text',
//                  source: cities.ttAdapter()
//                }
//              });
//              $('#dd').tagsinput('add', { "value": 66 , "text": "Amsterdam"   , "continent": "Europe"    });
//              $('#tags-input').tagsinput('add', { "value": 4 , "text": "Washington"  , "continent": "America"   });
//              $('#tags-input').tagsinput('add', { "value": 7 , "text": "Sydney"      , "continent": "Australia" });
//              $('#tags-input').tagsinput('add', { "value": 10, "text": "Beijing"     , "continent": "Asia"      });
//              $('#tags-input').tagsinput('add', { "value": 13, "text": "Cairo"       , "continent": "Africa"    });
              }
    return {
        //main function to initiate the module
        initEducation: function () {
            manageEducation();
        },
        initEmployment: function () {
            manageEmployment();
        },
        initAbout: function () {
            manageAbout();
        },
        initSkill: function () {
            manageSkill();
        },
    };
}();
