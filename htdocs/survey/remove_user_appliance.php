<?php
					//"http://127.0.0.1:8081/esave/rest/user/remove_user_appliance/"+$("#user_appliance_id").val()
					
					$api = 'http://localhost:8080/esave/rest/user';
					$url = $api . '/remove_user_appliance/' . $_GET['user_appliance_id'] ; 
					
					
					$options = ["http" => [
						"method" => "DELETE",
						"header" => ["Content-Type: application/json"]				
						]];
					$context = stream_context_create($options);
					$list = file_get_contents($url, false, $context);
					echo($list);
?>