$(function() {
   
    $("#user_appliance").change(function(){		
		
		
		if($("#user_appliance").val() != ''){
			
			
			url = "/survey/user_appliance_usage_report.php?user_id="+$("#user_id").val()+"&user_app_id="+$("#user_appliance").val();
			
			$.ajax({
				type: 'GET',
				
				url: url,
							
				success:function(data) { 
					
					var obj = jQuery.parseJSON( data );
					$("#id_app_usage").html("<b>"+ obj.consumption + "&nbsp"+ "Kw/h"+"</b>");
					number = obj.amount.toFixed(3);
					
					$("#id_app_amount").html("<b>"+"$"+ number + "</b>");
					
					
				}
			});
		}
		
	});
	
	
  });