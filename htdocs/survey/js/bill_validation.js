//jQuery Form Validation code
 
  
  // When the browser is ready...
  $(function() {
    bill_validation();
    $("#bill_add_form_btn_id").click(function(){		
		
		result = $("#electricity_form_id").valid();
		if(result){
			$('#electricity_form_id').attr('action', 'electricity_bill_info.php');
			$('#electricity_form_id').submit();
		}
		
	});
	
	
  });
  function bill_validation(){
	// Setup form validation on the #register-form element
     $("#electricity_form_id").validate({
    
        // Specify the validation rules
        rules: {
			bill_number: {
				required: true
			},
            bill_date: {
                required: true
            },
			bill_amount: {
				required: true
			}
        },
        
        // Specify the validation error messages
        messages: {
			bill_number: {
				required: "provide Bill Number"
			},
            bill_date: {
                required: "provide Bill date"
            },
			bill_amount: {
				required: "provide Bill amount"
			}
        },
        
    });
	
  }
   function validateDecimal(value)    {
        var RE = /^\d*\.?\d*$/;
        if(RE.test(value)){
           return true;
        }else{
           return false;
        }
    }
  