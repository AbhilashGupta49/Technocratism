<!--Abhilash Gupta-->


<html>


<!--Head Start-->
<head>

<script type='text/javascript' src='JS/jquery.js'></script>
<script type='text/javascript' src='JS/javascript.js'></script>
<link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, minimumscale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="CSS/menusidebar.css">
<link rel="stylesheet" href="CSS/template.css">
<meta name="Description" content="Technocratism is a technical blog site. We post interesting articles on broad topics like Hardware, Software and Internet">
<title>Technocratism</title>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<!--Head End-->

<!--Body Start-->
<body onload="jsfunc()">





<!--Sidebar Content Start-->
<div id="socialsidebar">

<!--Facebook Start-->
		<section class="socialsidebarblockfacebook" id="socialsidebarfacebook">
			<div id="facebookbutton" class="fb-like" data-href="www.facebook.com/technocratism" data-width="200" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
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


<div class="g-plusone"></div>


<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
		</section>
<!--Google+ End-->
		
</div>

<!--Sidebar Content End-->





<!--Header Start-->
<header>
  <p id="toplogo"><a href="index.php"><span class="logomain1">Tech</span><span class="logomain2">nocra</span><span class="logomain3">tism</span></a></p>
  <nav id="menubar">
    <ul>
      <span id="logohead"><li><a href="index.php"><span class="logomain1">T</span><span class="logomain2">c</span><span class="logomain3">M</span></a></li></span>
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



<!--Content Body Start-->
<section id="contentbody">
	
    <!--Main Content 1 Start-->
  	<section id="maincontent1">

		<section class="maincontent1imgbox">
		<img src="" id="maincontent1img1" onclick="return passingvariablesimage(this);" class="maincontent1img" onmouseover="document.getElementById('maincontent1transboxtext1').style.display='inline-block';"  onmouseout="document.getElementById('maincontent1transboxtext1').style.display='none';" />
		<p class="maincontent1transboxtext" id="maincontent1transboxtext1"></p>
		</section>

		<section class="maincontent1right">
			<section class="maincontent1rightsub" onmouseover="maincontent1rightsubmouseover1()" >
			<a href="Articles" onclick="return passingvariables(this);" class="maincontent1rightsubtop"  id="maincontent1rightsubtopp1"></a>
			<hr class="rowbetweenlight1"/>
			<p class="maincontent1rightsubhalf"  id="maincontent1rightsubhalfp1"></p>
			</section>
			<section class="maincontent1rightsub" onmouseover="maincontent1rightsubmouseover2()" >
			<a href="Articles" onclick="return passingvariables(this);" class="maincontent1rightsubtop"  id="maincontent1rightsubtopp2"></a>
			<hr class="rowbetweenlight2"/>
			<p class="maincontent1rightsubhalf"  id="maincontent1rightsubhalfp2"></p>
			</section>
			<section class="maincontent1rightsub" onmouseover="maincontent1rightsubmouseover3()" >
			<a href="Articles" onclick="return passingvariables(this);"  class="maincontent1rightsubtop"  id="maincontent1rightsubtopp3"></a>
			<hr class="rowbetweenlight3"/>
			<p class="maincontent1rightsubhalf"  id="maincontent1rightsubhalfp3"></p>
			</section>
		</section>

		<section class="maincontent1bottom">
	    <a href="Articles" onclick="return passingvariables(this);" class="maincontent1bottomtop"  id="maincontent1bottomtop1"></a>
		<span class="categorydefine" id="maincontent1bottomcategory1"></span>
		<hr class="rowbetweenbold"/>
		<p class="maincontent1bottomquarter"  id="maincontent1bottomquarter1"></p>
		<p class="datedefine" id="maincontent1date"></p>
		</section>

	</section>
	 <!--Main Content 1 End-->

	 <!--Side Content 1 Start-->
	<section id="sidecontent1">
		<section class="sidecontent1imgbox">
		<img src="" onclick="return passingvariablesimage(this);"  id="sidecontent1img1" class="sidecontent1img" onmouseover="document.getElementById('sidecontent1transboxtext1').style.display='inline-block';"  onmouseout="document.getElementById('sidecontent1transboxtext1').style.display='none';" />
		
        <p class="sidecontent1transboxtext" id="sidecontent1transboxtext1"></p>
		
		</section>

		<section class="sidecontent1bottom">
		<a href="Articles" onclick="return passingvariables(this);" class="sidecontent1bottomtop"  id="sidecontent1bottomtop1"></a>
		<hr class="rowbetweenlight4"/>
		<p class="sidecontent1bottomquarter"  id="sidecontent1bottomquarter1"></p>
		<p class="datedefineside" id="sidecontent1date"></p>
		</section>
	</section>
	 <!--Side Content 1 End-->

	 <!--Main Content 2 Start-->
	<section id="maincontent2">
		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
				<img src="" onclick="return passingvariablesimage(this);" id="maincontent2img1" class="maincontent2img" onmouseover="document.getElementById('maincontent2transboxtext1').style.display='inline-block';"  onmouseout="document.getElementById('maincontent2transboxtext1').style.display='none';" />			
				<p class="maincontent2transboxtext" id="maincontent2transboxtext1"></p>
			</section>
			
			<a href="Articles" onclick="return passingvariables(this);" class="maincontent2subtop"  id="maincontent2subtop1"></a>
			<span class="categorydefine" id="maincontent2subcategory1"></span>
			<hr class="rowbetweenlightright1"/>
			<p class="maincontent2subquarter"  id="maincontent2subquarter1"></p>
			<p class="datedefine" id="maincontent2date1"></p>
		</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox">	
				<img src="" onclick="return passingvariablesimage(this);" id="maincontent2img2" class="maincontent2img" onmouseover="document.getElementById('maincontent2transboxtext2').style.display='inline-block';"  onmouseout="document.getElementById('maincontent2transboxtext2').style.display='none';" />
				<p class="maincontent2transboxtext" id="maincontent2transboxtext2"></p>
			</section>

			<a href="Articles" onclick="return passingvariables(this);" class="maincontent2subtop"  id="maincontent2subtop2"></a>
			<span class="categorydefine" id="maincontent2subcategory2"></span>
			<hr class="rowbetweenlightright2"/>
			<p class="maincontent2subquarter"  id="maincontent2subquarter2"></p>
			<p class="datedefine" id="maincontent2date2"></p>
		</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
				<img src="" onclick="return passingvariablesimage(this);" id="maincontent2img3" class="maincontent2img" onmouseover="document.getElementById('maincontent2transboxtext3').style.display='inline-block';"  onmouseout="document.getElementById('maincontent2transboxtext3').style.display='none';" />
				<p class="maincontent2transboxtext" id="maincontent2transboxtext3"></p>
			</section>

			<a href="Articles" onclick="return passingvariables(this);" class="maincontent2subtop"  id="maincontent2subtop3"></a>
			<span class="categorydefine" id="maincontent2subcategory3"></span>
			<hr class="rowbetweenlightright3"/>
			<p class="maincontent2subquarter"  id="maincontent2subquarter3"></p>
			<p class="datedefine" id="maincontent2date3"></p>			
		</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox"/>
				<img src="" onclick="return passingvariablesimage(this);" id="maincontent2img4" class="maincontent2img" onmouseover="document.getElementById('maincontent2transboxtext4').style.display='inline-block';"  onmouseout="document.getElementById('maincontent2transboxtext4').style.display='none';" />
				<p class="maincontent2transboxtext" id="maincontent2transboxtext4"></p>
			</section>

			<a href="Articles" onclick="return passingvariables(this);" class="maincontent2subtop"  id="maincontent2subtop4"></a>
			<span class="categorydefine" id="maincontent2subcategory4"></span>
			<hr class="rowbetweenlightright4"/>
			<p class="maincontent2subquarter"  id="maincontent2subquarter4"></p>
			<p class="datedefine" id="maincontent2date4"></p>
		</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
				<img src="" onclick="return passingvariablesimage(this);" id="maincontent2img5" class="maincontent2img" onmouseover="document.getElementById('maincontent2transboxtext5').style.display='inline-block';"  onmouseout="document.getElementById('maincontent2transboxtext5').style.display='none';" />
				<p class="maincontent2transboxtext" id="maincontent2transboxtext5"></p>
			</section>

			<a href="Articles" onclick="return passingvariables(this);" class="maincontent2subtop"  id="maincontent2subtop5"></a>
			<span class="categorydefine" id="maincontent2subcategory5"></span>
			<hr class="rowbetweenlightright5"/>
			<p class="maincontent2subquarter"  id="maincontent2subquarter5"></p>
			<p class="datedefine" id="maincontent2date5"></p>
		</section>
	</section>
	 <!--Main Content 2 End-->

	 <!--Side Content 2 Start-->
	<section id="sidecontent2">



	<!--Poll Start-->	
<iframe name="fakepage" style="display:none;"></iframe>	
<form  method="post" action="" id="pollid" target="fakepage">
   <span class="pollquestion"  id="pollquestion1"></span>
    <hr class="rowbetweenpoll"/>   

    	<input type="radio" name="radio" value="option1" />
        <span id="polloptionname1" class="polloption"></span><br/>
   
 
        <input type="radio" name="radio" value="option2" />
        <span id="polloptionname2" class="polloption"></span><br/>
 
 
        <input type="radio" name="radio" value="option3" />
        <span id="polloptionname3" class="polloption"></span><br/>
   		
   
        <input type="radio" name="radio" value="option4" />
        <span id="polloptionname4" class="polloption"></span><br/>
  	
	<input type="submit" name="submit" value="Submit"   onclick="submitform();" class="bluebutton">
</form>
	<!--Poll End-->

			<section class="polloptiondisplayhide" id="displaypoll1">
			<span id="polloptionname1display" ></span>  <br/><br/>
			<span id="polloptionname2display" ></span>  <br/>
			<span id="polloptionname3display" ></span>  <br/>
			<span id="polloptionname4display" ></span>  <br/>
			</section>
			
			

	
<!--Poll PHP Start-->
<?php


if (isset($_POST['submit']))
{
	if(isset($_POST['radio']))
	{


	

		$xml=simplexml_load_file("XML/articles.xml");
		
		if($_POST['radio']=="option1")
		{
			$xml->poll->polloption1hits +=1;	
		}	
		elseif($_POST['radio']=="option2")
		{
			$xml->poll->polloption2hits +=1;	
		}
		elseif($_POST['radio']=="option3")
		{
			$xml->poll->polloption3hits +=1;	
		}
		elseif($_POST['radio']=="option4")
		{
			$xml->poll->polloption4hits +=1;	
		}
	
	$xml->asXML("XML/articles.xml");
	}
	else
	{
	echo "<span>Please choose a Option</span>";
	}
}



?>

<!--Poll PHP End-->
		
		<hr class="rowbetweenlight4"/>

		<!--Twitter Embed Start-->

		  <a class="twitter-timeline" href="https://twitter.com/Technocratism/lists/technocratism-list" data-widget-id="585472370623787009">Tweets from https://twitter.com/Technocratism/lists/technocratism-list</a>
		  <script>
		  !function(d,s,id)
		  {
			  var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
			  if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			  
		  </script>  
		<!--Twitter Embed End-->		
		
		
		</section>
	 <!--Side Content 2 End-->

</section>
<!--Content Body End-->




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
	<p class="footerfacebook"><a href="www.facebook.com/technocratism">Facebook</a></p>
	<p class="footertwitter"><a href="https://twitter.com/Technocratism" >Twitter</a></p>
	<p class="footergoogle"><a href="https://www.google.com/+Technocratismpage">Google+</a></p>
	</section>
	
	
	<section id="footerabout">
	<p class="footerheadings">About Us</p><hr/>
	<p class="footersubheadings"><a href="contactus.php">Contact</a></p>
	<p class="footersubheadings"><a href="knowus.php">Know Us More</a></p>
	</section>
	
	
</footer>
<!--Footer End-->

    
    
</body>
<!--Body End-->

</html>