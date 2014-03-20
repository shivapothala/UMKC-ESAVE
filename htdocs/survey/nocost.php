
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
      		<li><a href="surveyhome.php">Take a Survey</a></li>
      		<li><a href="usage_report.php">Survey Results</a></li>
      		<li class="active"><a href="recommendations.php">Recommendations</a></li>
            <li><a href="community.php">Community</a></li>
	  	<!--	<li><a href="http://php2.umkc.edu/sce/e-save/demo/esavedemo/survey/surveyhome.php">Community</a></li>-->
    	</ul>
  		</section>
		</nav>
     
  </div>
  </div>
          

  <div class="row content">
    <div class="large-5 columns section">
        <h1>No Cost Tips</h1><br><br>
        <p>These free Tips save your money and reduce Carbon Foot-Prints to Save the world!!</p>     		 
   </div>
   
   <!--<div class="someClass">
   		<?php include 'scroller1.php'; ?>
   </div>-->
    
    
    <div class="large-7 columns">
    	<h5><em>These simple steps don't cost any thing,  but can potentially save you 10-25% on your monthly energy bill </em><br /></h5>
   		
        <ul class="example-orbit-content" data-orbit>
  		<li data-orbit-slide="headline-1">
            <div>
              <h2>Turn OFF</h2>
              <h3>Turn off lights and appliances when not in use. Don't forget your computer. Most new computers have sleep settings</h3>
            </div>
  		</li>
        
      	<li data-orbit-slide="headline-3">
        <div>
          <h2>Control Thermostat</h2>
          <h3>In the cold months, set the thermostat to 68 degrees when home, and then back to 55 - 68 degrees when unoccupied</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Control Thermostat</h2>
          <h3>In warm months, set the thermostat to 78-80 degrees when home and 5 to 10 degrees warmer at night or when you're not home</h3>
        </div>
      	</li>

        <li data-orbit-slide="headline-3">
        <div>
          <h2>Free Sun Heat</h2>
          <h3>In the winter, open window coverings on the sunny side of your home to take advantage of free heat from the sun. Close the coverings on cloudy days or right after the sun sets</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Cook Outdoor</h2>
          <h3>Barbecue outdoors when practical, keeping in mind the heat and effect of sun on your body. Reducing the heat coming into your home from any source, such as cooking, will reduce the load on your air conditioning</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Pool Trippers</h2>
          <h3>Use pool trippers to reduce the time your swimming pool pump runs for eight to twelve hours a day is plenty.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Water Heater Temparature</h2>
          <h3>Set your water heater to 120 degrees.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Close Vents</h2>
          <h3>Close foundation vents in the winter months.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Seasonal Dressing</h2>
          <h3>Dress according to the weather.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Keep Refrigerator Claen</h2>
          <h3>Keep the seals (gaskets) on refrigerators and freezers clean.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Full Freezer</h2>
          <h3>Keep your freezer as full as possible. You can place containers or plastic bottles filled with water in the empty spaces.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Cool Food Only</h2>
          <h3>Make sure food is cool and covered before it goes into the refrigerator.</h3>
        </div>
      	</li>
        
         <li data-orbit-slide="headline-3">
        <div>
          <h2>Solar Drying</h2>
          <h3>Run full loads in your washer and dryer, and use &quot;solar drying&quot; (clotheslines).</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Switch on Energy Saver Mode</h2>
          <h3>Use energy saver option on your dishwasher, allowing dishes to air dry.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Unplug unused devices</h2>
          <h3>Unplug your televisions/DVD/DVR when you're on vacation. Most new sets draw power even when they're turned off.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Clean and Care your Bulbs</h2>
          <h3>Keep lights and lighting fixtures clean, especially if you're reducing the number of lights you use. Dirt absorbs light. Let lights cool before cleaning them and never touch halogen bulbs with your bare hands. The oil from your skin can greatly damage the bulbs. Use a small piece of paper to hold the bulb.</h3>
        </div>
      	</li>
        
        <li data-orbit-slide="headline-3">
        <div>
          <h2>Clean Dishwasher</h2>
          <h3>If your dishwasher has a filter, keep it clean.</h3>
        </div>
      	</li>
        
         <li data-orbit-slide="headline-3">
        <div>
          <h2>Keep Stove and Burners clean</h2>
          <h3>Clean the reflectors underneath the burners on stovetops.</h3>
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
