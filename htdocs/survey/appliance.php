
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appliance Info Page</title>  
	
	<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
	
    <link rel="stylesheet" type="text/css" href="normalize.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="foundation.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="application.css" media="all"/> 

    <script src="modernizr.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="appliance_validation.js"></script>
  </head>
	
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
      		<li class="active"><a href="surveypage.php">Take a Survey</a></li>
      		<li><a href="usage_report.php">Survey Results</a></li>
      		<li><a href="recommendations.php">Survey Recommendations</a></li>
            <li><a href="community.php">Community</a></li
    	</ul>
  		</section>
		</nav>
     
  </div>
  </div>         
		
        <!-- Page Content -->
        
        <div class="row content">
    	<div class="large-12 columns section">
        	<h5>Please enter your home appliances information!! </h5><br><br>
   		</div>  
		</div>
  
<!-- Three-up Content Blocks -->

		<div class="row baseContent baseContentRepeat">
			<?php
				$appliance = "";
				$appliance_count = "";
				$model_number = "";
				$daily_usage = "";
				$usage_in_week = "";

				if ( isset($_POST["state_code"]) == 1  && isset($_POST["zip_code"]) == 1 && isset($_POST["people_count"]) == 1 && isset($_POST["year_house_built"]) ==1 ){	
					$api = 'http://localhost:8080/esave/rest/user';
					$url = $api . '/save_user_information'; 
					$data = json_encode(array(
					'stateCode' => $_POST['state_code'],
					'zipCode' => $_POST['zip_code'],
					'noOfPeople' => $_POST['people_count'],
					'yearHouseBuilt' => $_POST['year_house_built'])); 
					$options = ["http" => [
					"method" => "POST",
					"header" => ["Content-Type: application/json"],
					"content" => $data
					]];
					$context = stream_context_create($options);
					$response = file_get_contents($url, false, $context);
					session_start();
					$_SESSION['user_id'] = $response;
					}
					else {
					if(isset($_POST["method_action"])){
	
					if($_POST["method_action"] == 'save'){
						$api = 'http://localhost:8080/esave/rest/user';
						$url = $api . '/save_user_appliance_information'; 
						session_start();
						if ( isset($_SESSION['user_id'])) {
						$foreignKey = $_SESSION['user_id'];
					}
					$model_number = "";
					if ( isset( $_POST['model_number'] ) ) {
						$model_number = $_POST['model_number'];
					}
					$data = json_encode(array(
					'appName' => $_POST['appliance'],
					'modelNumber' => $model_number,
					'dailyUsageHrs' => $_POST['daily_usage'],
					'daysUsedInWeek' => $_POST['usage_in_week'],
					'userId' => $foreignKey)); 
					$options = ["http" => [
					"method" => "POST",
					"header" => ["Content-Type: application/json"],
					"content" => $data
					]];
					$context = stream_context_create($options);
					$response = file_get_contents($url, false, $context);
					} else if ($_POST["method_action"] == 'update' ){
					$api = 'http://localhost:8080/esave/rest/user';
					$url = $api . '/update_user_appliance'. '/' . $_POST['user_appliance']; 
					session_start();
					if ( isset($_SESSION['user_id'])) {
					$foreignKey = $_SESSION['user_id'];
					}
					$model_number = "";
					if ( isset( $_POST['model_number'] ) ) {
					$model_number = $_POST['model_number'];
					}
					$data = json_encode(array(
					'appId' => $_POST['user_appliance'],
					'appName' => $_POST['appliance'],
					'modelNumber' => $model_number,
					'dailyUsageHrs' => $_POST['daily_usage'],
					'daysUsedInWeek' => $_POST['usage_in_week'],
					'userId' => $foreignKey)); 
					$options = ["http" => [
					"method" => "PUT",
					"header" => ["Content-Type: application/json"],
					"content" => $data
					]];
					$context = stream_context_create($options);
					$response = file_get_contents($url, false, $context);
					}
					}
				}
			?>
		<div class="large-6 columns section">
		<div id= "appliancepage" >     
			<form id="app_form_id" name="app_form" method="post" action="electricity_bill_info.php" >
				<input type="hidden" name="method_action" value="" id='method_action' />

				<font color="red"></font>
				<div id="form">			
					<table>
					
					<th colspan="2"><h5>Add all your Appliances</h5></th>
					
					<tr>
					<td>Appliance</td>
					<td>
						<select name='appliance' id='appliance'>
						<option value="">--- Select ---</option>
						<?php
						$api = 'http://localhost:8080/esave/rest/esave';
						$url = $api . '/get_appliance_product_types'; 
						printf($url);
						$options = ["http" => [
						"method" => "GET",
						"header" => ["Content-Type: application/json"]				
						]];
						$context = stream_context_create($options);
						$list = file_get_contents($url, false, $context);
					
						foreach (json_decode($list) as $prd_type){
						?>
						<option value="<?php echo $prd_type; ?>">
						<?php  echo $prd_type;  ?>
						</option>
						<?php
						}
						?>
						</select>	
					</td>									
					</tr>
			
					<tr>
					<td>Number of Selected Appliances</td>
					<td>
						<input id="appliance_count" type="number" name="appliance_count" size ="1" maxlength="1" value="" />
					</td>						
					</tr>
            
					<tr class="model">
					<td>Model Number(If Known)</td>
					<td>
						<input id="model_number" type="text" name="model_number" value="" />
					</td>														
					</tr>
            
					<tr>
					<td>Daily Usage In Hours</td>
					<td>
						<input id="daily_usage" type="number" name="daily_usage" size ="2" maxlength="2"value="" />
					</td>
					</tr>
			
					<tr>
					<td>Daily Used in a Week</td>
					<td>
						<input id="usage_in_week" type="number" name="usage_in_week" size ="1" maxlength="1" value="" />
					</td>
					</tr>	
			
					<tr>
					<td colspan="2"><span style="color:brown">* Add all your Appliances to get Accurate Usage Estimate</span>
					</td>
					</tr><br><br>	
			
					<tr>
					<td colspan="1">
						<input type="button"  id="app_add_form_btn_id" name="app_add_form_submit" data-icon="plus" data-inline="true" value="Add" />
					</td>
					<td colspan="1">
						<input type="button" onclick="submitForm('electricity_bill_info.php')" id="app_next_form_btn_id" name="app_next_form_submit" data-icon="arrow-r" data-inline="true" value="Next" />
						<input type="button" onclick="submitForm('add_user.php')" id="app_home_form_btn_id" name="app_home_form_submit" data-icon="back" data-inline="true" value="Back" />
					</td>
					</tr>			
			
					</table>
				</div>
			</form>
            </div>
			</div>
			
			<div class="large-6 columns section">
            <div id="editlist">
            <table>
			
				<th colspan="2"><h5>Edit/Delete Appliances</h5></th>
				
            	<tr>
                <td colspan="1">
					Select added Appliance to Edit/Delete:
				</td>
			
				<td colspan="1">
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
						printf($list);
						foreach (json_decode($list) as $prd_type){
						
						?>
						<option value="<?php echo $prd_type -> {"appId"} ; ?>">
							<?php  echo $prd_type -> {"appName"} ;  ?>
						</option>
						<?php
							
						}
						?>
						</select>	
						</td>
            			</tr> 
							
						<tr>
						<td colspan="1">
							<input type="button"  id="app_edit_form_btn_id" name="app_edit_form_submit"  data-icon="edit" data-inline="true" value="Edit/Update" />
						</td>
						<td colspan="1">
							<input type="button"  id="app_delete_form_btn_id" name="app_delete_form_submit" data-icon="minus" data-inline="true" value="Delete" />
						</td>
						</tr>
           			 
                        </table>  			
				
				</div>
       	
		</div>

 
<script type="text/javascript">
	function submitForm(action)
    {		
		//$('#app_form_id').attr('action', action);
		//$('#app_form_id').submit();
		window.location.href = action;
    }    
</script>

  
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
            <a href="usage_report.php" rel="external" class="radius button right">Done</a>
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
    
    
    
    
 

</body>
</html>
