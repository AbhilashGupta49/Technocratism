<!--Abhilash Gupta-->

<html>
<head>
<title>Know Us</title>
<script type='text/javascript' src='/JS/jquery.js'></script>
<script type='text/javascript' src='/JS/footerpage.js'></script>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="CSS/footerpage.css">
<link rel="stylesheet" href="CSS/menusidebar.css">
</head>
<body onload="jsfunc()">

<p id="todaydate"></p>

<!--Sidebar Content Start-->
<div id="socialsidebar">

<!--Facebook Start-->
		<section class="socialsidebarblockfacebook" id="socialsidebarfacebook">
			<div id="facebookbutton" class="fb-like" data-href="https://www.facebook.com/pages/Technocratism/749852405122068?fref=ts" data-width="200" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</section>

			<div id="fb-root"></div>
				<script>
				(function(d, s, id) 
				{var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
				</script>
<!--Facebook End-->		
<!--Twitter Start-->		
		<section class="socialsidebarblocktwitter" id="socialsidebartwitter">
			<a class="twitter-follow-button" id="twitterbutton"
			href="https://twitter.com/Technocratism"
			data-show-count="true"
			data-size="large"
			data-width="100px">
			</a>
				<script>
				window.twttr=(function(d,s,id)
				{var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};
				if(d.getElementById(id))return;js=d.createElement(s);
				js.id=id;js.src="https://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};
				return t;
				}(document,"script","twitter-wjs"));
				</script>
		</section>		
<!--Twitter End-->

<!--Google+ Start-->
		<section class="socialsidebarblockgoogle" id="socialsidebargoogle">
		
		</section>
<!--Google+ End-->
		
</div>

<!--Sidebar Content End-->












<!--Header Start-->
<header>
  <p id="toplogo"><a href="/index.php"><span class="logomain1">Tech</span><span class="logomain2">nocra</span><span class="logomain3">tism</span></a></p>

  <nav id="menubar">
    <ul>
      <span id="logohead"><li><a href="/index.php"><span class="logomain1">T</span><span class="logomain2">c</span><span class="logomain3">M</span></a></li></span>
      <li onmouseover="document.getElementById('dropdownmenupopular').style.display='block';"  onmouseout="document.getElementById('dropdownmenupopular').style.display='none';"><a href="Category" onclick="return passingvariablemenu(this);">Popular</a></li>
		<ul id="dropdownmenupopular" onmouseover="document.getElementById('dropdownmenupopular').style.display='block';"  onmouseout="document.getElementById('dropdownmenupopular').style.display='none';">
				<li class="dropdownmenuitems1"><img class="dropdownmenuimage" id="dropdownmenupopular1" onclick="return passingvariablesimage(this);" src="" /></li>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems2"  id="dropdownmenupopular2"></a><br/>
				<li class="dropdownmenuitems3" id="dropdownmenupopular3"></li><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems4"  id="dropdownmenupopular4"></a><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems5"  id="dropdownmenupopular5"></a><br/>
					<hr class="rowbetweenlightmenu"/>
					<hr class="rowbetweenlightmenu"/>
		</ul>		
      <li onmouseover="document.getElementById('dropdownmenuhardware').style.display='block';"  onmouseout="document.getElementById('dropdownmenuhardware').style.display='none';"><a href="Category" onclick="return passingvariablemenu(this);">Hardware</a></li>
		<ul id="dropdownmenuhardware" onmouseover="document.getElementById('dropdownmenuhardware').style.display='block';"  onmouseout="document.getElementById('dropdownmenuhardware').style.display='none';">
				<li class="dropdownmenuitems1"><img class="dropdownmenuimage" id="dropdownmenuhardware1" onclick="return passingvariablesimage(this);" src="" /></li>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems2"  id="dropdownmenuhardware2"></a><br/>
				<li class="dropdownmenuitems3" id="dropdownmenuhardware3"></li><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems4"  id="dropdownmenuhardware4"></a><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems5"  id="dropdownmenuhardware5"></a><br/>
					<hr class="rowbetweenlightmenu"/>
					<hr class="rowbetweenlightmenu"/>
		</ul>		
      <li onmouseover="document.getElementById('dropdownmenusoftware').style.display='block';"  onmouseout="document.getElementById('dropdownmenusoftware').style.display='none';"><a href="Category" onclick="return passingvariablemenu(this);">Software</a></li>
		<ul id="dropdownmenusoftware" onmouseover="document.getElementById('dropdownmenusoftware').style.display='block';"  onmouseout="document.getElementById('dropdownmenusoftware').style.display='none';">
				<li class="dropdownmenuitems1"><img class="dropdownmenuimage" id="dropdownmenusoftware1" onclick="return passingvariablesimage(this);" src="" /></li>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems2"  id="dropdownmenusoftware2"></a><br/>
				<li class="dropdownmenuitems3" id="dropdownmenusoftware3"></li><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems4"  id="dropdownmenusoftware4"></a><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems5"  id="dropdownmenusoftware5"></a><br/>
					<hr class="rowbetweenlightmenu"/>
					<hr class="rowbetweenlightmenu"/>
		</ul>
      <li onmouseover="document.getElementById('dropdownmenuinternet').style.display='block';"  onmouseout="document.getElementById('dropdownmenuinternet').style.display='none';"><a href="Category" onclick="return passingvariablemenu(this);">Internet</a></li>
		<ul id="dropdownmenuinternet" onmouseover="document.getElementById('dropdownmenuinternet').style.display='block';"  onmouseout="document.getElementById('dropdownmenuinternet').style.display='none';">
				<li class="dropdownmenuitems1"><img class="dropdownmenuimage" id="dropdownmenuinternet1" onclick="return passingvariablesimage(this);" src="" /></li>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems2"  id="dropdownmenuinternet2"></a><br/>
				<li class="dropdownmenuitems3" id="dropdownmenuinternet3"></li><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems4"  id="dropdownmenuinternet4"></a><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems5"  id="dropdownmenuinternet5"></a><br/>
					<hr class="rowbetweenlightmenu"/>
					<hr class="rowbetweenlightmenu"/>
		</ul>
      <li onmouseover="document.getElementById('dropdownmenumiscellaneous').style.display='block';"  onmouseout="document.getElementById('dropdownmenumiscellaneous').style.display='none';"><a href="Category" onclick="return passingvariablemenu(this);">Miscellaneous</a></li>
		<ul id="dropdownmenumiscellaneous" onmouseover="document.getElementById('dropdownmenumiscellaneous').style.display='block';"  onmouseout="document.getElementById('dropdownmenumiscellaneous').style.display='none';">
				<li class="dropdownmenuitems1"><img class="dropdownmenuimage" id="dropdownmenumiscellaneous1" onclick="return passingvariablesimage(this);" src="" /></li>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems2"  id="dropdownmenumiscellaneous2"></a><br/>
				<li class="dropdownmenuitems3" id="dropdownmenumiscellaneous3"></li><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems4"  id="dropdownmenumiscellaneous4"></a><br/>
				<a href="Articles" onclick="return passingvariables(this);" class="dropdownmenuitems5"  id="dropdownmenumiscellaneous5"></a><br/>
					<hr class="rowbetweenlightmenu"/>
					<hr class="rowbetweenlightmenu"/>
		</ul>
      <li><a id="menurandomarticle" href="" onclick="return passingvariablesrandom();">Random</a></li>
      
    </ul>
  
  </nav>
     
  </header>
<!--Header End-->




<section id="knowuscontent">
	
	<p id="knowustop">The Team </p>
	

	<p class="knowuswork">Site Design -</p>
	<section class="knowusbox">
		<div class="knowusimagediv">
			<img src="Pictures/abhilash.png" class="knowusimage" />
		</div>	
		<div class="knowusnamediv">
			<p class="knowusname">Abhilash Gupta</p>
		</div>
		<hr class="knowusrow" />
		<div class="knowusdescdiv">
			<p class="knowusdesc"></p>
		</div>	
	</section>
	<p class="knowuswork">Articles -</p>
	<section class="knowusbox">
		<div class="knowusimagediv">
			<img src="Pictures/sarjak.png" class="knowusimage" />
		</div>	
		<div class="knowusnamediv">
			<p class="knowusname">Sarjak Thakkar</p>
		</div>
		<hr class="knowusrow" />
		<div class="knowusdescdiv">
			<p class="knowusdesc"></p>
		</div>	
	</section>
	<p class="knowuswork">Publicist -</p>
	<section class="knowusbox">
		<div class="knowusimagediv">
			<img src="Pictures/sarvansh.png" class="knowusimage" />
		</div>	
		<div class="knowusnamediv">
			<p class="knowusname">Sarvansh Prashar</p>
		</div>
		<hr class="knowusrow" />
		<div class="knowusdescdiv">
			<p class="knowusdesc"></p>
		</div>	
	</section>

	
</section>






<!--Footer Start-->
<footer id="footer">
	<section id="footerlogo">
		<p><a href="index.php"><span class="logomain1">T</span><span class="logomain2">c</span><span class="logomain3">M</span></a></p>
	</section>
	
	
	
	
	<section id="footerlinks">
	<p class="footerheadings">Quick Links</p><hr/>
	<p class="footersubheadings"><a href="Category" onclick="return passingvariablemenu(this);">Popular</a></p>
	<p class="footersubheadings"><a href="Category" onclick="return passingvariablemenu(this);">Hardware</a></p>
	<p class="footersubheadings"><a href="Category" onclick="return passingvariablemenu(this);">Software</a></p>
	<p class="footersubheadings"><a href="Category" onclick="return passingvariablemenu(this);">Internet</a></p>
	<p class="footersubheadings"><a href="Category" onclick="return passingvariablemenu(this);">Miscellaneous</a></p>
	</section>
	
	
	
	<section id="footersocial">
	<p class="footerheadings">Social Links</p><hr/>
	<p class="footerfacebook"><a href="https://www.facebook.com/pages/Technocratism/749852405122068?fref=ts&ref=br_tf">Facebook</a></p>
	<p class="footertwitter"><a href="https://twitter.com/Technocratism" >Twitter</a></p>
	<p class="footergoogle"><a href="#">Google+</a></p>
	</section>
	
	
	<section id="footerabout">
	<p class="footerheadings">About Us</p><hr/>
	<p class="footersubheadings"><a href="/contactus.php">Contact</a></p>
	<p class="footersubheadings"><a href="knowus.php">Know Us More</a></p>
	</section>
	
	
</footer>
<!--Footer End-->



</body>
</html>