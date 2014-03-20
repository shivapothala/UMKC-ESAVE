<!-- Note the super simplified HTML5 doctype tag -->
<!DOCTYPE html>

<html>
	<head>
		<!-- jQuery Assets/ -->
    	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
        <link href="resultStylesheet.css" type="text/css" rel="stylesheet"/>
    
<!-- /jQuery Assets -->
     <!--Overriding Local CSS-->
 	<link href="mobile-standards.css" type="text/css" rel="stylesheet">  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
<!-- This meta tag is required, else Mobile Safari attempts to scale this page -->
	<meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
	<title>Survey Results</title>
    
    <!-- High charts-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>	
	<?php
		
		$api = 'http://localhost:8080/esave/rest/esave';
		$url = $api . '/calculate_appliance_consumption/'; 
		
		session_start();
		if ( isset($_SESSION['user_id'])) {
			  $url = $url . $_SESSION['user_id'];
		} 
		
		$options = ["http" => [
			"method" => "GET",
			"header" => ["Content-Type: application/json"]				
			]];
		$context = stream_context_create($options);
		$report_info = json_decode(file_get_contents($url, false, $context));
		
?>		
	
	<script type="text/javascript">
	var chart1;
	jQuery(document).ready(function() {
        
    $('#container1').highcharts({
        chart: {
            type: 'column',
			borderWidth:2,
			height:400,
			width:380,
			marginRight:50
        },
        title: {
            text: 'Home Electricity Consumption'
        },
        xAxis: {
            categories: ['Estimate','Actual']
			
        },
        yAxis: {
			min: 0,
            title: {
                text: 'Dollar Amount'
            }
        },
		 legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
		/*plotOptions: {
            series: {
				
                color: '#FF0000'
            }
        },*/
        series: [{
            name: 'Wastage',
            data: [<?php echo(number_format($report_info -> {"wastageAmount"},3)) ?>, 0],
			color: '#FF0000'
			
        }, {
            name: 'Bill',
           data: [<?php echo(number_format($report_info -> {"amount"},3)) ?>, <?php echo(number_format($report_info -> {"totalAmount"},3)) ?>],
			color: '#2f7ed8'
        }/*, {
            name: 'Wastage Amount',
           	data: [<?php echo(number_format($report_info -> {"wastageAmount"},3)) ?>],
			color: '#FF0000'
			
        }*/]
    });
	
	$('#container2').highcharts({
        chart: {
            type: 'column',
			borderWidth:2,
			height:400,
			width:380,
			marginRight:50
        },
        title: {
            text: 'Appliance Consumption'
        },
        xAxis: {
            categories: ['Refregirator']
			
        },
        yAxis: {
            title: {
                text: 'Dollar Amount'
            }
        },
		/*plotOptions: {
            series: {
				
                color: '#FF0000'
            }
        },*/
        series: [{
            name: 'Estimated Consumption',
            data: [],
			color: '#1aadce'
			
        }, {
            name: 'Estimated Bill',
           	data: [],
			color: '#910000'
			
        }]
    });
	
	});
	</script>
	</head>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="user_report.js"></script>	
	

	
<body>
	<!-- Home -->

  	<!--<div id= "resultspage" data-role="page">-->         


	 
	<div data-role="header">
	<a><img src="E-SaveLogo.jpg" height="32px"></a>
	<h1>ESAVE Recommendations</h1>
	<a href="http://esave.umkc.edu/" rel="external" data-role="button" data-icon="home"  class="ui-btn-right" data-theme="b">Home</a>
	
	<!-- Navigation Bar -->
        <nav data-role="navbar">
            <ul>
                <li><a href = "surveyhome.php" data-role = "button"  rel="external">Home</a></li>
		<li><a href = "survey.html" data-role = "button" rel="external">Take a Survey</a></li>
                <li><a href = "usage.html" data-role = "button" data-transition="pop" rel="external" class = "ui-btn-active">Survey Results</a></li>
                <li><a href = "#" data-role = "button" rel="external" data-transition="pop"> Survey Recommendations</a></li>
                
            </ul>    
    	</nav>
 
	</div>
	<div id="result_div">	
			 							
			<table>
            <thead>
            	<th><h5>Your Estimated Bill and Wastage Information</h5></th>
            </thead>
			<tr>
				<td>
					Estimated Monthly Uasge Kw/h: <B><?php echo(number_format($report_info -> {"consumption"},3)) ?></B>
				</td>
                <td>
                </td>
			</tr><br>
            
            <tr>					
				<td>
					Estimated Monthly Bill: <B>$<?php echo(number_format($report_info -> {"amount"},3)) ?></B>
				</td>
										
			</tr><br>
			
			<tr>					
				<td>
					Your Actual last month Bill: <B>$<?php echo(number_format($report_info -> {"totalAmount"},3)) ?></B>
				</td>
										
			</tr><br>
			<tr>					
				<td>
					Estimated Monthly Wastage Amount: <B>$<?php echo(number_format($report_info -> {"wastageAmount"},3)) ?></B>
				</td>
										
			</tr><br>
			
			</table><br>
            </div>
            
            <div id="applianceResult">
			<table>
			<tr>
			<td>
				Select Appliance to see estimates:
			</td>
			
			<td>
				<input type='hidden' name='user_id' id='user_id'  value='<?php echo $_SESSION['user_id'] ?>' >
				<select id="user_appliance" name="user_appliance" size="1">	
					<option value="">--- Select ---</option>
					<?php
					$api = 'http://localhost:8080/esave/rest/esave';
					$url = $api . '/user_appliance/'; 
					
					
					if ( isset($_SESSION['user_id'])) {
						  $url = $url . $_SESSION['user_id'];
					} 
					
					$options = ["http" => [
						"method" => "GET",
						"header" => ["Content-Type: application/json"]				
						]];
					$context = stream_context_create($options);
					$list = file_get_contents($url, false, $context);
					
					foreach (json_decode($list) as $prd_type){
						
					?>
					<option value="<?php echo $prd_type -> {"appId"} ; ?>">
						<?php  echo $prd_type -> {"appName"} ;  ?>
					</option>
					<?php
							
					}
					?>
				</select>	
			</td></tr>
			<tr>
				<td>
					Estimated Appliance Uasge Kw/h: <div id="id_app_usage"> </div>
				</td>
			</tr>
			
			<tr>					
				<td>
					Estimated Appliance  Bill Amount: <div id="id_app_amount"> </div>
				</td>
										
			</tr>
			
			</table>
		</div>
			
		<div id="container1">
        </div>
        
        <div id="container2">
        </div>
        
        <div data-role="navbar">
		<a href="surveyhome.php" rel="external" data-role="button" data-icon="back">back</a>
		</div>

</body>
</html>
