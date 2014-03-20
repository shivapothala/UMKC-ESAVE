
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Survey Page</title>  
    <link rel="stylesheet" type="text/css" href="normalize.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="foundation.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="application.css" media="all"/>   

    <script src="modernizr.js"></script>
	
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
  		<!--Facebook Like and Share-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
    	</script>
        <!--Twitter follow-->
        <script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id)){js=d.createElement(s);
			js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
			fjs.parentNode.insertBefore(js,fjs);
			}}(document, 'script', 'twitter-wjs');
   		</script>
    
  		<div class="row header">
    	<div class="large-3 columns">
      	<h1><img src="Images/img_esave_logo_mobile.png" /></h1>
       
		<div class="caption" id="user"></div>
			<script>
				document.getElementById('user').innerHTML = "Welcome "+window.localStorage.getItem("user")+" !";
			</script> 
    	</div>
        
    	<div class="large-9 columns navBar">
      
		<nav class="top-bar" data-topbar>
  		<ul class="title-area">
   
    		<li class="name">

    		</li>
    		<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    		<li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
  		</ul>

  		<section class="top-bar-section">
    	<!-- Right Nav Section -->
	
    	<ul class="right">
        	<li><a href="http://php2.umkc.edu/sce/e-save/demo/esavedemo/EsaveHome/index.php">Home</a></li>
      		<li><a href="surveypage.php">Take a Survey</a></li>
      		<li class="active"><a href="usage_report.php">Survey Results</a></li>
      		<li><a href="recommendations.php">Survey Recommendations</a></li>
            <li><a href="community.php">Community</a></li>
	  	<!--	<li><a href="http://php2.umkc.edu/sce/e-save/demo/esavedemo/survey/surveyhome.php">Community</a></li>-->
    	</ul>
  		</section>
		</nav>
     
		</div>
		</div>         
		
        <!-- Page Content -->
        
        <div class="row content">
			<div class="large-12 columns section">
				<h5>Check out your total consumption and appliance wise energy consumption!!</h5>
			</div>           

			<div class="large-6 columns section">
				<div id="result_div">	
			 							
					<table>
            
					<thead>
						<th colspan="2"><h5>Total Estimated Bill and Wastage Information</h5></th>
					</thead>
			
					<tr>
					<td>Estimated Monthly Electricity Usage:</td>
					<td>
						<B><?php echo(number_format($report_info -> {"consumption"},3)) ?>&nbsp Kw/h</B>
					</td>               
					</tr><br>
            
					<tr>					
					<td>Estimated Monthly Electricity Bill:</td>
					<td>
						<B>$<?php echo(number_format($report_info -> {"amount"},3)) ?></B>
					</td>
					</tr><br>
			
					<tr>					
					<td>Your Actual last month Electricity Bill:</td>
					<td>
						<B>$<?php echo(number_format($report_info -> {"totalAmount"},3)) ?></B>
					</td>
					</tr><br>
			
					<tr>					
					<td>Total Monthly Wastage Amount: </td>
					<td>
						<B>$<?php echo(number_format($report_info -> {"wastageAmount"},3)) ?></B>
					</td>
					</tr><br>
			
					</table><br>
				</div>
			
				<div id="container1">
				</div>
			</div>
			
			<div class="large-6 columns section">
				<div id="applianceResult">
					<table>
					
					<th colspan="2"><h5>Appliance wise estimates</h5></th>
					
					<tr>
					<td>Appliance usage estimates:</td>
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
					<td>Estimated Appliance Uasge: </td>
					<td id="id_app_usage">
					</td>
					</tr>
			
					<tr>					
					<td>Estimated Appliance  Bill Amount: </td>
					<td id="id_app_amount">
					</td>						
					</tr>
			
					</table>
				</div>
		
			<div id="container2">
			</div>
			</div>
			
		</div>
		
	<!-- Call to Action Panel -->
	<div class="row contactContent">
		<div class="large-12 columns">
			<div class="panel">
			<h5>Connect with Us!!</h5>
       
			<div class="row">
			<div class="large-9 columns">
			<div class="item-list">
        		<div class="fb-like" data-href="https://www.facebook.com/ESaveUMKC" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>	<br/><br/><br/>	
                <div class="twitter">
            	<a href="https://twitter.com/ESaveUMKC" class="twitter-follow-button" data-show-count="true">Follow @ESaveUMKC</a>
				</div>    
      		</div>
			</div>
			<div class="large-3 columns">
				<a href="recommendations.php" rel="external" class="radius button right">Get Recommendations</a>
			</div>
			</div>
			</div>
      
		</div>
	</div>

	<!-- Footer -->
	<footer class="row footer">
		<div class="large-12 columns">
		<hr />
		<div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyrights resereved by UMKC</p>
		</div>
		</div>
		</div> 
	</footer>

    <script src="jquery.js"></script>
    <script src="foundation.min.js"></script>
          <script>$(document).foundation();
    </script>
    
     <script type="text/javascript">
			function submitForm(action)
   			 {			
				window.location.href = action;
    		}    
	</script>

</body>
</html>
