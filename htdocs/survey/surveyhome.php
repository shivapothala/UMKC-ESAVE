<!-- Note the super simplified HTML5 doctype tag -->
<!DOCTYPE html>
<html>
	<head>
		<!-- jQuery Assets/ -->
    	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
    	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Lobster+Two' rel='stylesheet' type='text/css'>
 
<!-- /jQuery Assets -->
     <!--Overriding Local CSS-->
 	<link href="mobile-standards.css" type="text/css" rel="stylesheet">
	<link href="mobile-styes.css" type="text/css" rel="stylesheet">   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
<!-- This meta tag is required, else Mobile Safari attempts to scale this page -->
	<meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
	<title>ESAVE Recommendations</title>	
	
	</head>

	<body>
	
    <!-- Header -->
	<?php include 'header.php'; ?> 
	

	         

        <!-- Page Content -->
        <div class="ui-content" data-role="content">
        	<center><h2>Survey Questionnaire?</h2>
            <h4><p> Please take this Survey to better understand your Energy Usage and Provide Accurate Recommendations!!</p></h4>
			</center>
	
			<ul data-role="listview">
			<li><a href="add_user.php" rel="external" data-transition="flip"><img src="images\userfamily.png" alt="Family Info"  class="ui-li-icon" rel="external">			Enter Family Information<span class="ui-li-count">4</span></a></li>
			<li><a href="appliance.php" rel="external" data-transition="fade"><img src="images\kitchen.png" alt="Appliance Info" class="ui-li-icon" rel="external">Add Home Appliances<span class="ui-li-count">5</span></a></li>
			<li><a href="electricity_bill_info.php" rel="external" data-transition="slidefade"><img src="images\billing.png" alt="Bills Info" class="ui-li-icon" rel="external">Add Previous Month Bills <span class="ui-li-count">2</span></a></li>
		</ul><br><br>
		
		
         	<label for="slider-fill">Survey Status:</label>
			<input type="range" name="slider-fill" id="slider-fill" data-theme="b" value="0" min="0" max="100" data-highlight="true" />
		</div>
	
    <!-- Footer -->
	<?php include 'footer.php'; ?>
    
    </div> 
    
   

	</body>
</html>