//jQuery Form Validation code
 
  
  // When the browser is ready...

  $(function() {
    appliance_validation();
    $("#app_add_form_btn_id").click(function(){		
		
		result = $("#app_form_id").valid();
		if(result){
			$('#method_action').val('save');
			
			$('#app_form_id').attr('action', 'appliance.php');
			$('#app_form_id').submit();
		}
		
	});
	$("#app_edit_form_btn_id").click(function(){
	    alert($("#app_edit_form_btn_id").val());
		if($("#user_appliance").val() != "" && $("#app_edit_form_btn_id").val() != 'Update'){
			
			url = "/survey/edit_user_appliance.php?user_appliance_id="+$("#user_appliance").val();		
			$.ajax({
				type: 'GET',
				
				url: url,
							
				success:function(data) { 
					
					var obj = jQuery.parseJSON( data );
					
					//$('#app_edit_form_btn_id').parent('.ui-btn').html('Update');
					$("#app_edit_form_btn_id").val("Update");
					$("#appliance option[value='"+obj.appName+"']").prop('selected', true);
					$("#appliance_count").val(obj.applianceCount);
					$("#model_number").val(obj.modelNumber);
					$("#daily_usage").val(obj.dailyUsageHrs);
					$("#usage_in_week").val(obj.daysUsedInWeek);
					
						
					
					
				}
			});
		} else {
			$('#method_action').val('update');
			alert("Successfully updated");
			//alert($('#user_appliance').val());
			$('#app_form_id').attr('action', 'appliance.php');
			$('#app_form_id').submit();
		}
	});
	$("#appliance").change(function(){		
		if($("#appliance").val() != ''){
			url = "/survey/get_appliance_product_model_present.php?appliance="+$("#appliance").val();		
			$.ajax({
				type: 'GET',
				
				url: url,
							
				success:function(data) { 
					
					var obj = jQuery.parseJSON( data );
					if(obj.modelPresent == 0){
						$(".model").hide();
						//$("#model_number").attr("disabled", "true");
						
					} else {
						$(".model").show();
						//$("#model_number").attr("disabled", "false");
					}
					
				}
			});
		}
		
	});
	$("#app_delete_form_btn_id").click(function(){
		if($("#user_appliance").val() != ""){
			url = "/survey/remove_user_appliance.php?user_appliance_id="+$("#user_appliance").val();		
			$.ajax({
				type: 'GET',
				
				url: url,
							
				success:function(data) { 
					
					var obj = jQuery.parseJSON( data );
					if(obj.success == 'true'){
						alert("Successfully deleted");
						//delete row from select list box.
						$("#user_appliance option:selected").remove();
						$("#user_appliance option:first").attr("selected", "selected");
						$("#user_appliance").val("");
					}
					
				}
			});
		}
	});
  }); 	
  function appliance_validation(){
	// Setup form validation on the #register-form element
     $("#app_form_id").validate({
    
        // Specify the validation rules
        rules: {
			appliance: {
				required: true
			},
            model_number: {
                required: false
            },
			daily_usage: {
				required: true,
				digits: true
			},
			usage_in_week:{
				required: true,
				digits: true
			}
        },
        
        // Specify the validation error messages
        messages: {
			appliance: {
				required: "provide appliance"
			},
            model_number: {
                required: "provide model number"
            },
			daily_usage: {
				required: "provide daily usage",
				digits: "only numbers"
			},
			usage_in_week:{
				required: "provide usage in week",
				digits: "only numbers"
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
  