//jQuery Form Validation code
 
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#user_form_id").validate({
    
        // Specify the validation rules
        rules: {
            zip_code: {
                required: true,
				digits: true,
                maxlength: 5
            },
			people_count: {
				required: true,
				digits: true,
                minlength: 1
			},
			year_house_built: {
				required: true,
				digits: true,
                minlength: 4
			}
        },
        
        // Specify the validation error messages
        messages: {
            zip_code: {
                required: "provide zip code",
				digits: "only digits",
                maxlength: "at least 5 characters long"
            },
			people_count: {
                required: "provide people count",
				digits: "only digits",
                minlength: "at least 1 characters long"
            },
			year_house_built: {
                required: "provide year of house built",
				digits: "only digits",
                minlength: "4 characters long"
            }
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
   function validateDecimal(value)    {
        var RE = /^\d*\.?\d*$/;
        if(RE.test(value)){
           return true;
        }else{
           return false;
        }
    }
  