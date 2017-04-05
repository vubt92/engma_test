//Sang added
function getLocalizeMess(type_of_mess){
	var cur_lang = $('#cur_lang').val();
	if (cur_lang == 'vn'){
		if (type_of_mess == 'miss_name')
			return 'Vui lòng nhập tên của bạn';
		else if (type_of_mess == 'miss_email')
			return 'Vui lòng nhập email hợp lệ của bạn';
		else if (type_of_mess == 'miss_content')
			return 'Vui lòng nhập nội dung ít nhất 10 ký tự';
	} else if (cur_lang == 'en'){
		if (type_of_mess == 'miss_name')
			return 'Please enter your name';
		else if (type_of_mess == 'miss_email')
			return 'Please enter a VALID email address';
		else if (type_of_mess == 'miss_content')
			return 'Please enter at least 10 characters';
	}
}

var ContactForm = function () {

    return {
        
        //Contact Form
        initContactForm: function () {
	        // Validation
	        $("#sky-form3").validate({
	            // Rules for form validation
	            rules:
	            {
	                name:
	                {
	                    required: true
	                },
	                email:
	                {
	                    required: true,
	                    email: true
	                },
	                message:
	                {
	                    required: true,
	                    minlength: 10
	                },
	                captcha:
	                {
	                    required: true,
	                    remote: 'assets/plugins/sky-forms-pro/skyforms/captcha/process.php'
	                }
	            },
         
	            // Messages for form validation
	            messages:
	            {
	                name:
	                {
	                    required: getLocalizeMess('miss_name')
	                },
	                email:
	                {
	                    required: getLocalizeMess('miss_email'),
	                    email: getLocalizeMess('miss_email')
	                },
	                message:
	                {
	                    required: getLocalizeMess('miss_content'),
	                    minlength: getLocalizeMess('miss_content')
	                },
	                captcha:
	                {
	                    required: 'Please enter characters',
	                    remote: 'Correct captcha is required'
	                }
	            },
	                                
	            // Ajax form submition                  
	            submitHandler: function(form)
	            {
	                $(form).ajaxSubmit(
	                {
	                    beforeSend: function()
	                    {
	                        $('#sky-form3 button[type="submit"]').attr('disabled', true);
	                    },
	                    success: function()
	                    {
	                        $("#sky-form3").addClass('submited');
	                    }
	                });
	            },
	            
	            // Do not change code below
	            errorPlacement: function(error, element)
	            {
	                error.insertAfter(element.parent());
	            }
	        });
        }

    };
    
}();