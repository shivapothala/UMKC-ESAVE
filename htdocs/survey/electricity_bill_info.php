
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
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="bill_validation.js"></script>
      
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
        	<h5>Please Enter you bills, login to Kcp&l page if not known</h5><br><br>
   		</div>  
		</div>
  
<!-- Three-up Content Blocks -->

  <div class="row baseContent baseContentRepeat">
	<?php 
		if ( isset($_POST["bill_number"])){	
			session_start();
		if (isset($_SESSION['list']) ==1) {
			$list = $_SESSION['list'];
		}else{
			$list = array();
		}
		if ( isset($_SESSION['user_id'])) {
			$foreignKey = $_SESSION['user_id'];
		}
		$list[] = array(
		'billNumber' => $_POST['bill_number'],
		'billDate' => $_POST['bill_date'],
		'billAmount' => $_POST['bill_amount'],
		'userId' => $foreignKey);
		$_SESSION['list'] = $list;		
		}
	?>
	
	<div class="large-4 columns section">
	<div id= "billpage" >      
			<form id="electricity_form_id" name="electricity_form" method="post" action="insertElectricityBillInfo.php" enctype="application/x-www-form-urlencoded">
			<font color="red"></font>
			<div id="form">				
				<table>
					<th colspan="2"><h5>Add Electricity Bills</h5></th>
				<tr>
				<td>
					Bill Date 
				</td>
				<td>
					<input id="bill_date" type="date" name="bill_date" value="" />
				</td>									
				</tr>
			
				<tr>
				<td>
					Bill Amount
				</td>
				<td>
					<input id="bill_amount" type="number" name="bill_amount" value="" />
				</td>													
				</tr>
				
				<tr>
				<td colspan="1">
					<input type="button"  id="bill_add_form_btn_id" name="bill_add_form_submit" data-icon="plus" data-inline="true" value="Add" />
				</td>
				<td colspan="1">
					<input type="button" onclick="submitForm('insertElectricityBillInfo.php')" id="elec_bill_form_btn_id" name="elec_bill_form_submit" data-icon="check" data-inline="true" value="Submit" />
					<input type="button" onclick="submitForm('appliance.php')" id="back" name="back" data-icon="back" data-inline="true" value="Back" />
                    
				</td> 
				</tr>
				</table>
            
			</div>
			</form>
	</div>
	</div>
	
	<div class="large-8 columns section">	
	<div id="electricityProvider">
		<iframe id="kcpl" src="https://ala.kcpl.com/ala/login.cfm" width="500" height="250"></iframe>
    </div>
    </div>   
		
		
 
	<script type="text/javascript">
		function submitForm(action)
		{		
			//$('#electricity_form_id').attr('action', action);
			//$('#electricity_form_id').submit();
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
