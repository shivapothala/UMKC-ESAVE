
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
      		<li><a href="surveypage.php">Take a Survey</a></li>
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
        <h1>Daily Facts:</h1><br><br>
        <p>More than 3 million people have taken the ENERGY STAR pledge to save energy, save money and protect the environment. <span style="color:red"><b>Are you in??</b></span></p>&nbsp;
        <a href="www.energystar.gov/pledge"><b>Take a Pledge</b></a>
   
   </div>
    <div class="large-7 columns">
    <ul data-orbit id="slider">
      <li>
            <img src="Images/house.jpg" />
            <div class="orbit-caption">
                 Start saving energy for a better Tomorrow!!
            </div>
      </li>
      <li>
            <img src="Images/energystar.jpg" />
            <div class="orbit-caption">
                Every Home Smart Home with Enrgy Star!!
            </div>
      </li>
      <li>
            <img src="Images/appliance_electricity.jpg" />
            <div class="orbit-caption">
                Check out Appliance Usage
            </div>
      </li>
      <li>
            <img src="Images/energystarbulbs.png" />
            <div class="orbit-caption">
                Upgrade your lighting for better savings
            </div>
      </li>
      <li>
            <img src="Images/leaks.jpg" />
            <div class="orbit-caption">
                Are sick of Air leakes? Fix it Today!! 
            </div>
      </li>
    </ul>
    
    <hr />
    </div>
  </div>
  
<!-- Three-up Content Blocks -->

  <div class="row baseContent baseContentRepeat">
    <div class="large-4 columns">
      <img src="Images/nocost.jpg"/>
        <h4 class="greenbutton"><a href="nocost.php" rel="external">No Cost Tips</a></h4      
    ></div>
    
    <div class="large-4 columns" >
       <img src="Images/lights.jpg" />
	  	<h4 class="greenbutton"><a href="lowcost.php">Low Cost Tips</a></h4>	
    </div>
    
    <div class="large-4 columns">
      <img src="Images/addedcost.jpg" />
      	<h4 class="greenbutton"><a href="addedcost.php">Added Cost Tips</a></h4> 
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
            <a href="www.umkc.edu" rel="external" class="radius button right">Contact Us</a>
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
