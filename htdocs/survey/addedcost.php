
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recommendations Page</title>  
    <link rel="stylesheet" type="text/css" href="normalize.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="foundation.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="application.css" media="all"/>   

    <script src="modernizr.js"></script>
	
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
      		<li><a href="rec.php">Take a Survey</a></li>
      		<li><a href="usage_report.php">Survey Results</a></li>
      		<li class="active"><a href="recommendations.php">Survey Recommendations</a></li>
            <li><a href="community.php">Community</a></li>
	  	<!--	<li><a href="http://php2.umkc.edu/sce/e-save/demo/esavedemo/survey/surveyhome.php">Community</a></li>-->
    	</ul>
  		</section>
		</nav>
     
  </div>
  </div>
          

  <div class="row content">
    <div class="large-5 columns section">
        <h1>Added Cost Tips</h1>     		 
   </div>
   
   <!--<div class="someClass">
   		<?php include 'scroller1.php'; ?>
   </div>-->
    
    
    <div class="large-7 columns">
    	<h5><em>There are plenty of low cost, easy to  do projects or steps you can do to save another 10-25% on your energy bill.</em><br /></h5>
   		
        <ul class="example-orbit-content" data-orbit>
  		<li data-orbit-slide="headline-1">
            <div>
              <h2>No Cost Tips</h2>
              <h3>With the help of a contractor, these  steps could potentially save you another 25% on your monthly bill. Remember to  do your research before you sign a contract or put down a deposit.</h3>
            </div>
  		</li>
      	<li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> Install floor and ceiling insulation: It is recommended to have a minimum of an R-30 - R-38 insulation in the attic and R19 insulation in the sub-floor.</h3>
        </div>
      	</li>
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> Replace inefficient and single pane windows with energy efficient multi-pane, thermally-broken, vinyl-framed windows.</h3>
        </div>
      	</li>
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> Energy efficient appliance replacement. All appliances have an Energy Guide Label that tells you how efficient it is and how much it will cost you to run. Often times, an appliance more than 10 years old is not likely to be energy efficient. <a href="http://www.energystar.gov/index.cfm?c=appliances.pr_appliances" target="_blank">Look for products with the ENERGY STAR® label</a></h3>
        </div>
      	</li>
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Servicing your heating and air conditioning systems once a year, replacing them if necessary. </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Testing and sealing the ductwork. Not only does this improve the efficiency of your heating and cooling system, it makes the house more comfortable. </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> Have ceiling fans installed in all bedrooms and your family room. They can make you more comfortable while allowing you to save money by adjusting your thermostat respectively. </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Add window screens or window films to reduce the solar energy from entering your home. </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Adding a solar heater for the water in your swimming pool.  </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> If your furnace is over 10 years old, replace with a 90%, or greater AFUE (Annual Fuel Utilization Efficiency) rated unit.</h3>
        </div>
      	</li>
       
		</ul>
        
    <hr />
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
            <a href="recommenadtions.php" rel="external" class="radius button right">Back</a>
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

	//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

	new pausescroller(pausecontent, "pscroller1", "someclass", 3000)
	document.write("<br />")
	</script>
 

</body>
</html>
