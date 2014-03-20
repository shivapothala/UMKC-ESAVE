
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
        <h1>Low Cost Tips</h1>     		 
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
              <h3>Use compact fluorescent bulbs instead of incandescent ones. This will typically save $1 per bulb changed out (for bulbs running 4-6 hours per day) and reduce heat in your home. Regular bulbs use most of the electricity to generate heat so use care when changing bulbs. </h3>
            </div>
  		</li>
      	<li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Clean furnace system and check ducts for leaks.</h3>
        </div>
      	</li>
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Caulk windows and caulk and weather-strip doors. Keep the outside air out and the inside air in.</h3>
        </div>
      	</li>
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Install a hot water heater blanket but be careful not to cover vents or temperature settings.</h3>
        </div>
      	</li>
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Install hot water pipe insulation. Do keep the insulation at least six inches away from the flue (exhaust pipe) of gas water heaters.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Install electrical outlet and switch plate insulation</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Plant trees and shrubs on the south and west side of your residence. The vegetation acts as insulation and provides shading, reducing thermal gain in a building.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> Fix leaky faucets and install low-flow showerheads.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> Use room fans to keep the air moving and reduce the feeling of heat in your home.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Replace furnace and air conditioner filters. Spray the filters with a light coating of lemon furniture polish or vegetable oil cooking spray to help trap dirt in the filter. </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3> Check the seals on your refrigerator and freezer. </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Replace normal thermostats with programmable thermostats. </h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>No Cost Tips</h2>
          <h3>Consider buying a cover for your pool to retain heat in the water. </h3>
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
            <a href="recommendations.php" rel="external" class="radius button right">Back</a>
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
