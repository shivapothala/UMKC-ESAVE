<?php
					//"http://127.0.0.1:8081/esave/rest/esave/get_appliance_product_model_present/"+$("#appliance").val()
					
					$api = 'http://localhost:8080/esave/rest/esave';
					$url = $api . '/get_appliance_product_model_present/' . $_GET['appliance']; 
					
					
					$options = ["http" => [
						"method" => "GET",
						"header" => ["Content-Type: application/json"]				
						]];
					$context = stream_context_create($options);
					$list = file_get_contents($url, false, $context);
					echo($list);
?>