<?php
					//"http://127.0.0.1:8081/esave/rest/esave/calculate_user_appliance_consumption/"+$("#user_id").val()+"/"+$("#user_appliance").val()
					
					$api = 'http://localhost:8080/esave/rest/esave';
					$url = $api . '/calculate_user_appliance_consumption/' . $_GET['user_id'] . '/' . $_GET['user_app_id']; 
					
					
					$options = ["http" => [
						"method" => "GET",
						"header" => ["Content-Type: application/json"]				
						]];
					$context = stream_context_create($options);
					$list = file_get_contents($url, false, $context);
					echo($list);
?>