<!--Abhilash Gupta-->


<html>


<!--Head Start-->
<head>

<script type='text/javascript' src='JS/jquery.js'></script>
<link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, minimumscale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="CSS/template.css">
<title>Technocratism</title>

</head>
<!--Head End-->

<!--Body Start-->
<body onload="jsfunc()">


<!--Script Start-->
<script>

<!--Fixed Menubar Start-->

var mql = window.matchMedia("screen and (min-width: 1100px)");
$(window).scroll(function(){
    if ($(window).scrollTop() >= 200 && mql.matches) {
       $("#menubar").addClass('fixed-header');
    }
    else {
       $("#menubar").removeClass('fixed-header');
    }
});

<!--Fixed Menubar End-->


<!--Onload JSFUNC Start-->


function jsfunc()
{

    if (window.XMLHttpRequest)
         {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
         }
         else
         {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
         xmlhttp.open("GET","XML/articles.xml",false);
		 
         xmlhttp.send();
         xmlDoc=xmlhttp.responseXML;







         
        
<!--Declaring Main Content 1 Start-->		 
		 
		 
document.getElementById("maincontent1rightsubtopp1").innerHTML= xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubtopp2").innerHTML= xmlDoc.getElementsByTagName("topic")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubtopp3").innerHTML= xmlDoc.getElementsByTagName("topic")[2].childNodes[0].nodeValue;

document.getElementById("maincontent1rightsubhalfp1").innerHTML= xmlDoc.getElementsByTagName("half")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubhalfp2").innerHTML= xmlDoc.getElementsByTagName("half")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubhalfp3").innerHTML= xmlDoc.getElementsByTagName("half")[2].childNodes[0].nodeValue;

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[0].childNodes[0].nodeValue;

<!--Declaring Main Content 1 End-->


<!--Declaring Side Content 1 Start-->

document.getElementById("sidecontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[0].childNodes[0].nodeValue;
document.getElementById("sidecontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("sidecontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[0].childNodes[0].nodeValue;

<!--Declaring Side Content 1 End-->


<!--Declaring Main Content 2 Start-->

document.getElementById("maincontent2img1").src=xmlDoc.getElementsByTagName("imagemain")[0].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent2subquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[0].childNodes[0].nodeValue;

document.getElementById("maincontent2img2").src=xmlDoc.getElementsByTagName("imagemain")[1].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop2").innerHTML=xmlDoc.getElementsByTagName("topic")[1].childNodes[0].nodeValue;
document.getElementById("maincontent2subquarter2").innerHTML=xmlDoc.getElementsByTagName("quarter")[1].childNodes[0].nodeValue;

document.getElementById("maincontent2img3").src=xmlDoc.getElementsByTagName("imagemain")[2].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop3").innerHTML=xmlDoc.getElementsByTagName("topic")[2].childNodes[0].nodeValue;
document.getElementById("maincontent2subquarter3").innerHTML=xmlDoc.getElementsByTagName("quarter")[2].childNodes[0].nodeValue;

document.getElementById("maincontent2img4").src=xmlDoc.getElementsByTagName("imagemain")[3].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop4").innerHTML=xmlDoc.getElementsByTagName("topic")[3].childNodes[0].nodeValue;
document.getElementById("maincontent2subquarter4").innerHTML=xmlDoc.getElementsByTagName("quarter")[3].childNodes[0].nodeValue;

document.getElementById("maincontent2img5").src=xmlDoc.getElementsByTagName("imagemain")[4].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop5").innerHTML=xmlDoc.getElementsByTagName("topic")[4].childNodes[0].nodeValue;
document.getElementById("maincontent2subquarter5").innerHTML=xmlDoc.getElementsByTagName("quarter")[4].childNodes[0].nodeValue;

<!--Declaring Main Content 2 End-->

<!--Declaring Poll Question Start-->
document.getElementById("pollquestion1").innerHTML=xmlDoc.getElementsByTagName("pollquestion")[0].childNodes[0].nodeValue;

document.getElementById("polloptionname1").innerHTML=xmlDoc.getElementsByTagName("polloption1")[0].childNodes[0].nodeValue;
document.getElementById("polloptionname2").innerHTML=xmlDoc.getElementsByTagName("polloption2")[0].childNodes[0].nodeValue;
document.getElementById("polloptionname3").innerHTML=xmlDoc.getElementsByTagName("polloption3")[0].childNodes[0].nodeValue;
document.getElementById("polloptionname4").innerHTML=xmlDoc.getElementsByTagName("polloption4")[0].childNodes[0].nodeValue;


document.getElementById("polloptionname1display").innerHTML=xmlDoc.getElementsByTagName("polloption1")[0].childNodes[0].nodeValue;
document.getElementById("polloptionname2display").innerHTML=xmlDoc.getElementsByTagName("polloption2")[0].childNodes[0].nodeValue;
document.getElementById("polloptionname3display").innerHTML=xmlDoc.getElementsByTagName("polloption3")[0].childNodes[0].nodeValue;
document.getElementById("polloptionname4display").innerHTML=xmlDoc.getElementsByTagName("polloption4")[0].childNodes[0].nodeValue;



var width1,width2,width3,width4,totalhits,option1hits,option2hits,option3hits,option4hits;

option1hits=xmlDoc.getElementsByTagName("polloption1hits")[0].childNodes[0].nodeValue;
option2hits=xmlDoc.getElementsByTagName("polloption2hits")[0].childNodes[0].nodeValue;
option3hits=xmlDoc.getElementsByTagName("polloption3hits")[0].childNodes[0].nodeValue;
option4hits=xmlDoc.getElementsByTagName("polloption4hits")[0].childNodes[0].nodeValue;


totalhits = (option1hits*1 + option2hits*1 + option3hits*1 + option4hits*1);


width1=option1hits*100/totalhits;
width2=option2hits*100/totalhits;
width3=option3hits*100/totalhits;
width4=option4hits*100/totalhits;




document.getElementById("polloptionname1display").style.width = width1+'%';
document.getElementById("polloptionname2display").style.width = width2+'%';
document.getElementById("polloptionname3display").style.width = width3+'%';
document.getElementById("polloptionname4display").style.width = width4+'%';

<!--Declaring Poll Question End-->






<!--Randomly Generating Side Content 1 Start-->

var min=1;
var max=xmlDoc.getElementsByTagName("noofarticlestotal")[0].childNodes[0].nodeValue;



   var nogenerated=Math.floor(Math.random() * (max - min + 1)) + min;



document.getElementById("sidecontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[nogenerated].childNodes[0].nodeValue;
document.getElementById("sidecontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[nogenerated].childNodes[0].nodeValue;
document.getElementById("sidecontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[nogenerated].childNodes[0].nodeValue;

<!--Randomly Generating Side Content 1 End-->





}

<!--Onload JSFUNC End-->

<!--Slideshow Main Content 1 Start-->

function maincontent1rightsubmouseover1()
{

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[0].childNodes[0].nodeValue;

}
function maincontent1rightsubmouseover2()
{

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[1].childNodes[0].nodeValue;


}

function maincontent1rightsubmouseover3()
{

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[2].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[2].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[2].childNodes[0].nodeValue;
}


<!--Slideshow Main Content 1 End-->



<!--Poll Submit Function Start-->



	function submitform()
	{

		$("#pollid").addClass('pollclass');
	$("#displaypoll1").removeClass('polloptiondisplayhide');

	

	}


<!--Poll Submit Function End-->

</script>
<!--Script End-->

<!--PHP Start-->
<?php
 $content=simplexml_load_file("XML/articles.xml");

if($content->noofarticlestotal != $content->article->count())
 { 

 $content->noofarticlestotal = $content->article->count();

$articlesinternet=0;
$articleshardware=0;
$articlessoftware=0;
$articlesmiscellaneous=0;



for ($x = 0; $x < $content->article->count(); $x++)
{
	if($content->article[$x]->category[0] == "internet")
		{
		$articlesinternet++;	
		}
	elseif($content->article[$x]->category[0] == "hardware")
		{
		$articleshardware++;
		
		}
	elseif($content->article[$x]->category[0] == "software")
		{
		$articlessoftware++;	
		}
	elseif($content->article[$x]->category[0] == "miscellaneous")
		{
		$articlesmiscellaneous++;	
		}
}

$content->noofarticlesinternet=$articlesinternet;
$content->noofarticleshardware=$articleshardware;
$content->noofarticlessoftware=$articlessoftware;
$content->noofarticlesmiscellaneous=$articlesmiscellaneous;
 
$content->asXML("XML/articles.xml");
 }


  ?>
<!--PHP End-->

<!--Header Start-->
<header>
  <p id="toplogo"><a href="index.php"><span class="logomain1">Tech</span><span class="logomain2">nocra</span><span class="logomain3">tism</span></a></p>

  <nav id="menubar">
    <ul>
      <span id="logohead"><li><a href="index.php"><span class="logomain1">T</span><span class="logomain2">c</span><span class="logomain3">M</span></a></li></span>
      <li><a href="#">Popular</a></li>
      <li><a href="#">Hardware</a></li>
      <li><a href="#">Software</a></li>
      <li><a href="#">Internet</a></li>
      <li><a href="#">Miscellaneous</a></li>
      <li><a href="#">Random</a></li>
      
    <ul>
  
  </nav>
     
  </header>
<!--Header End-->




<!--Content Body Start-->
<section id="contentbody">
	
    <!--Main Content 1 Start-->
  	<section id="maincontent1">

		<section class="maincontent1imgbox">
		<img src="favicon.ico" id="maincontent1img1" class="maincontent1img" />
		</section>

		<section class="maincontent1right">
			<section class="maincontent1rightsub" onmouseover="maincontent1rightsubmouseover1()" >
			<p class="maincontent1rightsubtop"  id="maincontent1rightsubtopp1"></p>
			<hr class="rowbetweenlight1">
			<p class="maincontent1rightsubhalf"  id="maincontent1rightsubhalfp1"></p>
			</section>
			<section class="maincontent1rightsub" onmouseover="maincontent1rightsubmouseover2()" >
			<p class="maincontent1rightsubtop"  id="maincontent1rightsubtopp2"></p>
			<hr class="rowbetweenlight2">
			<p class="maincontent1rightsubhalf"  id="maincontent1rightsubhalfp2"></p>
			</section>
			<section class="maincontent1rightsub" onmouseover="maincontent1rightsubmouseover3()" >
			<p class="maincontent1rightsubtop"  id="maincontent1rightsubtopp3"></p>
			<hr class="rowbetweenlight3">
			<p class="maincontent1rightsubhalf"  id="maincontent1rightsubhalfp3"></p>
			</section>
		</section>

		<section class="maincontent1bottom">
	    <p class="maincontent1bottomtop"  id="maincontent1bottomtop1"></p>
		<hr class="rowbetweenbold">
		<p class="maincontent1bottomquarter"  id="maincontent1bottomquarter1"></p>
		</section>

	</section>
	 <!--Main Content 1 End-->

	 <!--Side Content 1 Start-->
	<section id="sidecontent1">
		<section class="sidecontent1imgbox">
		<img src="favicon.ico" id="sidecontent1img1" class="sidecontent1img" />
		</section>

		<section class="sidecontent1bottom">
		<p class="sidecontent1bottomtop"  id="sidecontent1bottomtop1"></p>
		<hr class="rowbetweenlight4">
		<p class="sidecontent1bottomquarter"  id="sidecontent1bottomquarter1"></p>
		</section>
	</section>
	 <!--Side Content 1 End-->

	 <!--Main Content 2 Start-->
	<section id="maincontent2">
		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
			<img src="favicon.ico" id="maincontent2img1" class="maincontent2img" />
			</section>
			
			<p class="maincontent2subtop"  id="maincontent2subtop1"></p>
			<hr class="rowbetweenlightright1"></hr>
			<p class="maincontent2subquarter"  id="maincontent2subquarter1"></p>
		</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
			<img src="favicon.ico" id="maincontent2img2" class="maincontent2img" />
			</section>

			<p class="maincontent2subtop"  id="maincontent2subtop2"></p>
			<hr class="rowbetweenlightright2">
			<p class="maincontent2subquarter"  id="maincontent2subquarter2"></p>
			</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
			<img src="favicon.ico" id="maincontent2img3" class="maincontent2img" />
			</section>

			<p class="maincontent2subtop"  id="maincontent2subtop3"></p>
			<hr class="rowbetweenlightright3">
			<p class="maincontent2subquarter"  id="maincontent2subquarter3"></p>			
		</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
			<img src="favicon.ico" id="maincontent2img4" class="maincontent2img" />
			</section>

			<p class="maincontent2subtop"  id="maincontent2subtop4"></p>
			<hr class="rowbetweenlightright4">
			<p class="maincontent2subquarter"  id="maincontent2subquarter4"></p>
		</section>

		<section class="maincontent2sub">
			<section class="maincontent2imgbox">
			<img src="favicon.ico" id="maincontent2img5" class="maincontent2img" />
			</section>

			<p class="maincontent2subtop"  id="maincontent2subtop5"></p>
			<hr class="rowbetweenlightright5">
			<p class="maincontent2subquarter"  id="maincontent2subquarter5"></p>
		</section>
	</section>
	 <!--Main Content 2 End-->

	 <!--Side Content 2 Start-->
	<section id="sidecontent2">



	<!--Poll Start-->	
<iframe name="fakepage" style="display:none;"></iframe>	
<form  method="post" action="" id="pollid" target="fakepage">
   <span class="pollquestion"  id="pollquestion1"></span>
    <hr class="rowbetweenpoll">   

    	<input type="radio" name="radio" value="option1" />
        <span id="polloptionname1" class="polloption"></span><br>
   
 
        <input type="radio" name="radio" value="option2" />
        <span id="polloptionname2" class="polloption"></span><br>
 
 
        <input type="radio" name="radio" value="option3" />
        <span id="polloptionname3" class="polloption"></span><br>
   		
   
        <input type="radio" name="radio" value="option4" />
        <span id="polloptionname4" class="polloption"></span><br>
  	
	<input type="submit" name="submit" value="Submit"   onclick="submitform();" class="bluebutton">
</form>
	<!--Poll End-->

			<section class="polloptiondisplayhide" id="displaypoll1">
			<span id="polloptionname1display" ></span>  <br><br><br>
			<span id="polloptionname2display" ></span>  <br>
			<span id="polloptionname3display" ></span>  <br>
			<span id="polloptionname4display" ></span>  <br>
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
	echo "<span>Please choose a Option.</span>";
	}
}



?>

<!--Poll PHP End-->


		</section>
	 <!--Side Content 2 End-->

</section>
<!--Content Body End-->





    




    
</body>
<!--Body End-->

</html>