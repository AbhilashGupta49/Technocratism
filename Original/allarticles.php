<!--Abhilash Gupta-->

<?php



$topicofarticle=$_GET['pass'];
$content=simplexml_load_file("XML/articles.xml");
for($i=0;$i<$content->noofarticlestotal;$i++)
{
	if($topicofarticle == $content->article[$i]->topic)
	{
		$indexofarticlephp=$i;
	}
}

$content->article[$indexofarticlephp]->hits +=1;

$content->asXML("XML/articles.xml");



?>




<html>


<!--Head Start-->
<head>

<script type='text/javascript' src='/JS/jquery.js'></script>
<script type='text/javascript' src='/JS/jsarticles.js'></script>
<link rel="shortcut icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, minimumscale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="/CSS/menusidebar.css">
<link rel="stylesheet" href="/CSS/cssarticles.css">
<title></title>

</head>
<!--Head End-->





<!--Body Start-->
<body onload="jsfunc()">


<div id="articlesidebar">
		<div id="beforearticle" class="sidebararticlediv">
				<img src="" onclick="return passingvariablesimage(this);" id="beforeimage" class="sidebarimage" />
				<a href="Articles" onclick="return passingvariables(this);" id="beforetopic" class="sidebartext"></a>
		</div>
		<hr class="hrlightsidebar" />
		<div id="afterarticle" class="sidebararticlediv">
				<img src="" onclick="return passingvariablesimage(this);" id="afterimage" class="sidebarimage" />
				<a href="Articles" onclick="return passingvariables(this);" id="aftertopic" class="sidebartext"></a>
		</div>
		<hr class="hrlightsidebar" />
		<div id="randomarticle" class="sidebararticlediv">
				<img src="" onclick="return passingvariablesimage(this);" id="randomimage" class="sidebarimage" />
				<a href="Articles" onclick="return passingvariables(this);" id="randomtopic" class="sidebartext"></a>
		</div>
</div>







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



<!--Content Body Start-->
<section id="contentbody">

		<section id="maincontenttopic">
		<p id="maincontenttopic1"></p>
		</section>
		<section class="aboutarticle">
		<p id="contentdate"></p>
		<p class="authordefine" id="contentauthor"></p>
		</section>
		<div class="contentdiv">

		<hr class="hrdark2" />
		<p class="contenttext" id="maincontent"></p>
		<img class="contentimage" id="mainimage" src="" />
		</div>
		<hr class="hrarticles" />
		

</section>

		
<section id="feedback">
	<p id="likeit">Like It ?</p>
	<img src="/Pictures/beforeyeah.png" onclick="incrementvalue();" id="likeimage" />
	<p id="numberlikes"></p>
	<p id="commentit">Comment</p>
	<img src="/Pictures/comment.png" id="commentimage" />   
</section>




<section id="commentsection" class="commentinput">
		<form method="post" action="" id="commentsform">
			<p class="commentheading">Enter Your Comments For The Article - </p><hr class="hrdark">
			<p class="commentdisplay">Name - </p><input type="textbox" id="entercommentname" name="entercommentname" /><hr class="hrlight"/>
			<p class="commentdisplay">Comment - </p><input type="textbox" id="entercommenttext" name="entercommenttext" />
			<input type="submit" id="submitcomment" value="submit" name="submitcomment" />
		</form>
</section>


		


<section id="displaycomments">
<p class="commentheading">Comments - </p>
</section>


<?php

$checkifdone=0;
if (isset($_POST['entercommentname']) && isset($_POST['entercommenttext']))
{
	

   
	
	
	function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        echo $problem;
    }
	else
	{
 		
	
		$GLOBALS['checkifdone'] = $GLOBALS['checkifdone']+1;
		
		return $data;
		
		
	}
	
	
	
	
	
}
    
	$nameofcomment = check_input($_POST['entercommentname'],'Enter your Name!');
	$textofcomment = check_input($_POST['entercommenttext'],'Enter your Comment!');	
	
	
	if($checkifdone ==2)
	{
	$checkifdone=0;
	$xml=simplexml_load_file("XML/comments.xml");
	$infoenter=$xml->addChild("commentinfo");
	$infoenter->addChild("nameenter",$nameofcomment );
	$infoenter->addChild("commententer",$textofcomment );
	$infoenter->addChild("categoryarticle",$indexofarticlephp );
	$infoenter->addChild("hostname",gethostname() );
	$xml->asXML("XML/comments.xml");
	
	 $dom = new DOMDocument();
     $dom->preserveWhiteSpace = false;
     
     $dom->load("XML/comments.xml");
     $dom->formatOutput = true;
     $dom->save("XML/comments.xml");
	 }
}



?>

<!--Content Body End-->




<!--Footer Start-->
<footer id="footer">
	<section id="footerlogo">
		<p><a href="/index.php"><span class="logomain1">T</span><span class="logomain2">c</span><span class="logomain3">M</span></a></p>
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
	<p class="footersubheadings"><a href="/contactus.php">Contact</a></p>
	<p class="footersubheadings"><a href="/knowus.php">Know Us More</a></p>
	</section>
	
	
</footer>
<!--Footer End-->

    
    
</body>
<!--Body End-->

</html>