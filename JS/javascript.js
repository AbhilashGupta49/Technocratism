
var valueofrandomarticle;


function passingvariablemenu(thevalue)
{
	var valueofanchor4=thevalue.innerHTML;
	window.location.href = thevalue.href+"/"+valueofanchor4+"/";
	return false;
}


function passingvariablesrandom()
{
	var valueofanchor3=valueofrandomarticle;
	var replaced3 =valueofanchor3.split(' ').join('+');

	
	window.location.href = "Articles/"+replaced3+"/";
	return false;
}


function passingvariables(thelink)
{
	var valueofanchor=thelink.innerHTML;
	var replaced =valueofanchor.split(' ').join('+');
	window.location.href = thelink.href+"/"+replaced+"/";
	return false;
}

function passingvariablesimage(theimagelink)
{
var valueofanchor2=theimagelink.src;
var changeimagesrc=valueofanchor2.split('/').slice(1);
var finalimagesrc=changeimagesrc[2]+"/"+changeimagesrc[3];

for(i=0;i<xmlDoc.getElementsByTagName("noofarticlestotal")[0].childNodes[0].nodeValue;i++)
{
				if(finalimagesrc == xmlDoc.getElementsByTagName("imagemain")[i].childNodes[0].nodeValue)
			{
				var indexofarticle=i;
			}
}

var topicofimage=xmlDoc.getElementsByTagName("topic")[indexofarticle].childNodes[0].nodeValue;	
	var replaced2 =topicofimage.split(' ').join('+');
	window.location.href = "/Articles"+"/"+replaced2+"/";
	return false;
	
}
	


<!--Fixed Menubar Start-->

var mql = window.matchMedia("screen and (min-width: 1100px)");
$(window).scroll(function(){
    if ($(window).scrollTop() >= 200) 
	{
       
	   if(mql.matches)
	   {
			$("#menubar").addClass('fixed-header');
			if($(window).scrollTop()<=(document.body.scrollHeight-800))
		{
			document.getElementById('socialsidebar').style.display='inline-block';
		}
			else
			{
			 document.getElementById('socialsidebar').style.display='none';
			}
	   }
		
		
		
		else
		{
			document.getElementById('socialsidebar').style.display='none';
			$("#menubar").removeClass('fixed-header');
		}
    }
	
      
   
	
    else {
       $("#menubar").removeClass('fixed-header');
		document.getElementById('socialsidebar').style.display='none';
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


		 
		 

		var populararticlehits=[];
		var orderpopularhits=[];
		var hardwareindex=[];
		var softwareindex=[];
		var internetindex=[];
		var miscellaneousindex=[];
		for(var i=0;i<xmlDoc.getElementsByTagName("noofarticlestotal")[0].childNodes[0].nodeValue;i++)
		 {
			populararticlehits.push(xmlDoc.getElementsByTagName("hits")[i].childNodes[0].nodeValue*1);
			orderpopularhits[i]=i;
			
			if(xmlDoc.getElementsByTagName("category")[i].childNodes[0].nodeValue == "hardware")
			{
				hardwareindex.push(i);
			}
			else if(xmlDoc.getElementsByTagName("category")[i].childNodes[0].nodeValue == "software")
			{
				softwareindex.push(i);
			}
			else if(xmlDoc.getElementsByTagName("category")[i].childNodes[0].nodeValue == "internet")
			{
				internetindex.push(i);
			}
			else if(xmlDoc.getElementsByTagName("category")[i].childNodes[0].nodeValue == "miscellaneous")
			{
				miscellaneousindex.push(i);
			}



			

		}
		 


		 
		 for(i=0;i<=populararticlehits.length;i++)
		 {
			 for(var j=i+1;j<=populararticlehits.length;j++)
			 {
				 if(populararticlehits[i]<populararticlehits[j])
				 {
					 var temp=populararticlehits[i];
					 populararticlehits[i]=populararticlehits[j];
					 populararticlehits[j]=temp;
					 
					 temp=orderpopularhits[i];
					 orderpopularhits[i]=orderpopularhits[j];
					 orderpopularhits[j]=temp;
				 }
			 }
		 }


		 
		 
   var max=xmlDoc.getElementsByTagName("noofarticlestotal")[0].childNodes[0].nodeValue;



   
   
   
   
   
   
   var nogenerated=Math.floor(Math.random() * (max));
 var nogenerated2=Math.floor(Math.random() * (max));  





 

<!--Declaring Menu Bar Start-->
document.getElementById("dropdownmenupopular1").src= xmlDoc.getElementsByTagName("imagemain")[orderpopularhits[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenupopular2").innerHTML= xmlDoc.getElementsByTagName("topic")[orderpopularhits[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenupopular3").innerHTML= xmlDoc.getElementsByTagName("half")[orderpopularhits[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenupopular4").innerHTML= xmlDoc.getElementsByTagName("topic")[orderpopularhits[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenupopular5").innerHTML= xmlDoc.getElementsByTagName("topic")[orderpopularhits[2]].childNodes[0].nodeValue; 

document.getElementById("dropdownmenuhardware1").src= xmlDoc.getElementsByTagName("imagemain")[hardwareindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuhardware2").innerHTML= xmlDoc.getElementsByTagName("topic")[hardwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuhardware3").innerHTML= xmlDoc.getElementsByTagName("half")[hardwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuhardware4").innerHTML= xmlDoc.getElementsByTagName("topic")[hardwareindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuhardware5").innerHTML= xmlDoc.getElementsByTagName("topic")[hardwareindex[2]].childNodes[0].nodeValue;  

document.getElementById("dropdownmenusoftware1").src= xmlDoc.getElementsByTagName("imagemain")[softwareindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenusoftware2").innerHTML= xmlDoc.getElementsByTagName("topic")[softwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenusoftware3").innerHTML= xmlDoc.getElementsByTagName("half")[softwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenusoftware4").innerHTML= xmlDoc.getElementsByTagName("topic")[softwareindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenusoftware5").innerHTML= xmlDoc.getElementsByTagName("topic")[softwareindex[2]].childNodes[0].nodeValue;

document.getElementById("dropdownmenuinternet1").src= xmlDoc.getElementsByTagName("imagemain")[internetindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuinternet2").innerHTML= xmlDoc.getElementsByTagName("topic")[internetindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuinternet3").innerHTML= xmlDoc.getElementsByTagName("half")[internetindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuinternet4").innerHTML= xmlDoc.getElementsByTagName("topic")[internetindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuinternet5").innerHTML= xmlDoc.getElementsByTagName("topic")[internetindex[2]].childNodes[0].nodeValue;  

document.getElementById("dropdownmenumiscellaneous1").src= xmlDoc.getElementsByTagName("imagemain")[miscellaneousindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenumiscellaneous2").innerHTML= xmlDoc.getElementsByTagName("topic")[miscellaneousindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenumiscellaneous3").innerHTML= xmlDoc.getElementsByTagName("half")[miscellaneousindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenumiscellaneous4").innerHTML= xmlDoc.getElementsByTagName("topic")[miscellaneousindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenumiscellaneous5").innerHTML= xmlDoc.getElementsByTagName("topic")[miscellaneousindex[2]].childNodes[0].nodeValue; 
	  
	  
	  
valueofrandomarticle= xmlDoc.getElementsByTagName("topic")[nogenerated2].childNodes[0].nodeValue;

<!--Declaring Menu Bar End-->	   
        
<!--Declaring Main Content 1 Start-->		 
		 
		 
document.getElementById("maincontent1rightsubtopp1").innerHTML= xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubtopp2").innerHTML= xmlDoc.getElementsByTagName("topic")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubtopp3").innerHTML= xmlDoc.getElementsByTagName("topic")[2].childNodes[0].nodeValue;

document.getElementById("maincontent1rightsubhalfp1").innerHTML= xmlDoc.getElementsByTagName("half")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubhalfp2").innerHTML= xmlDoc.getElementsByTagName("half")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1rightsubhalfp3").innerHTML= xmlDoc.getElementsByTagName("half")[2].childNodes[0].nodeValue;

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomcategory1").innerHTML="- "+xmlDoc.getElementsByTagName("category")[0].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1date").innerHTML=xmlDoc.getElementsByTagName("date")[0].childNodes[0].nodeValue;

document.getElementById("maincontent1transboxtext1").innerHTML=xmlDoc.getElementsByTagName("hits")[0].childNodes[0].nodeValue + "<br>" + 'HITS';
<!--Declaring Main Content 1 End-->





<!--Declaring Main Content 2 Start-->

document.getElementById("maincontent2img1").src=xmlDoc.getElementsByTagName("imagemain")[0].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent2subcategory1").innerHTML="- "+xmlDoc.getElementsByTagName("category")[0].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent2subquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[0].childNodes[0].nodeValue;
document.getElementById("maincontent2date1").innerHTML=xmlDoc.getElementsByTagName("date")[0].childNodes[0].nodeValue;

document.getElementById("maincontent2img2").src=xmlDoc.getElementsByTagName("imagemain")[1].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop2").innerHTML=xmlDoc.getElementsByTagName("topic")[1].childNodes[0].nodeValue;
document.getElementById("maincontent2subcategory2").innerHTML="- "+xmlDoc.getElementsByTagName("category")[1].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent2subquarter2").innerHTML=xmlDoc.getElementsByTagName("quarter")[1].childNodes[0].nodeValue;
document.getElementById("maincontent2date2").innerHTML=xmlDoc.getElementsByTagName("date")[1].childNodes[0].nodeValue;

document.getElementById("maincontent2img3").src=xmlDoc.getElementsByTagName("imagemain")[2].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop3").innerHTML=xmlDoc.getElementsByTagName("topic")[2].childNodes[0].nodeValue;
document.getElementById("maincontent2subcategory3").innerHTML="- "+xmlDoc.getElementsByTagName("category")[2].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent2subquarter3").innerHTML=xmlDoc.getElementsByTagName("quarter")[2].childNodes[0].nodeValue;
document.getElementById("maincontent2date3").innerHTML=xmlDoc.getElementsByTagName("date")[2].childNodes[0].nodeValue;

document.getElementById("maincontent2img4").src=xmlDoc.getElementsByTagName("imagemain")[3].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop4").innerHTML=xmlDoc.getElementsByTagName("topic")[3].childNodes[0].nodeValue;
document.getElementById("maincontent2subcategory4").innerHTML="- "+xmlDoc.getElementsByTagName("category")[3].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent2subquarter4").innerHTML=xmlDoc.getElementsByTagName("quarter")[3].childNodes[0].nodeValue;
document.getElementById("maincontent2date4").innerHTML=xmlDoc.getElementsByTagName("date")[3].childNodes[0].nodeValue;

document.getElementById("maincontent2img5").src=xmlDoc.getElementsByTagName("imagemain")[4].childNodes[0].nodeValue;
document.getElementById("maincontent2subtop5").innerHTML=xmlDoc.getElementsByTagName("topic")[4].childNodes[0].nodeValue;
document.getElementById("maincontent2subcategory5").innerHTML="- "+xmlDoc.getElementsByTagName("category")[4].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent2subquarter5").innerHTML=xmlDoc.getElementsByTagName("quarter")[4].childNodes[0].nodeValue;
document.getElementById("maincontent2date5").innerHTML=xmlDoc.getElementsByTagName("date")[4].childNodes[0].nodeValue;

document.getElementById("maincontent2transboxtext1").innerHTML=xmlDoc.getElementsByTagName("hits")[0].childNodes[0].nodeValue + "<br>" + 'HITS';
document.getElementById("maincontent2transboxtext2").innerHTML=xmlDoc.getElementsByTagName("hits")[1].childNodes[0].nodeValue + "<br>" + 'HITS';
document.getElementById("maincontent2transboxtext3").innerHTML=xmlDoc.getElementsByTagName("hits")[2].childNodes[0].nodeValue + "<br>" + 'HITS';
document.getElementById("maincontent2transboxtext4").innerHTML=xmlDoc.getElementsByTagName("hits")[3].childNodes[0].nodeValue + "<br>" + 'HITS';
document.getElementById("maincontent2transboxtext5").innerHTML=xmlDoc.getElementsByTagName("hits")[4].childNodes[0].nodeValue + "<br>" + 'HITS';

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




document.getElementById("sidecontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[nogenerated].childNodes[0].nodeValue;
document.getElementById("sidecontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[nogenerated].childNodes[0].nodeValue;
document.getElementById("sidecontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[nogenerated].childNodes[0].nodeValue;
document.getElementById("sidecontent1date").innerHTML=xmlDoc.getElementsByTagName("date")[nogenerated].childNodes[0].nodeValue;
document.getElementById("sidecontent1transboxtext1").innerHTML=xmlDoc.getElementsByTagName("hits")[nogenerated].childNodes[0].nodeValue + "<br>" + 'HITS';
<!--Randomly Generating Side Content 1 End-->


	
		function getcookie(cname)
{
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return -1;
} 
function setcookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}


var pollcookie=getcookie("technopoll");


if(pollcookie==1)
{

	

		$("#pollid").addClass('pollclass');
	$("#displaypoll1").removeClass('polloptiondisplayhide');

}	








}

<!--Onload JSFUNC End-->

<!--Slideshow Main Content 1 Start-->

function maincontent1rightsubmouseover1()
{

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomcategory1").innerHTML="- "+xmlDoc.getElementsByTagName("category")[0].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1date").innerHTML=xmlDoc.getElementsByTagName("date")[0].childNodes[0].nodeValue;
document.getElementById("maincontent1transboxtext1").innerHTML=xmlDoc.getElementsByTagName("hits")[0].childNodes[0].nodeValue + "<br>" + 'HITS';
}
function maincontent1rightsubmouseover2()
{

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomcategory1").innerHTML="- "+xmlDoc.getElementsByTagName("category")[1].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1date").innerHTML=xmlDoc.getElementsByTagName("date")[1].childNodes[0].nodeValue;
document.getElementById("maincontent1transboxtext1").innerHTML=xmlDoc.getElementsByTagName("hits")[1].childNodes[0].nodeValue + "<br>" + 'HITS';

}

function maincontent1rightsubmouseover3()
{

document.getElementById("maincontent1img1").src=xmlDoc.getElementsByTagName("imagemain")[2].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomcategory1").innerHTML="- "+xmlDoc.getElementsByTagName("category")[2].childNodes[0].nodeValue.toUpperCase();
document.getElementById("maincontent1bottomtop1").innerHTML=xmlDoc.getElementsByTagName("topic")[2].childNodes[0].nodeValue;
document.getElementById("maincontent1bottomquarter1").innerHTML=xmlDoc.getElementsByTagName("quarter")[2].childNodes[0].nodeValue;
document.getElementById("maincontent1date").innerHTML=xmlDoc.getElementsByTagName("date")[2].childNodes[0].nodeValue;
document.getElementById("maincontent1transboxtext1").innerHTML=xmlDoc.getElementsByTagName("hits")[2].childNodes[0].nodeValue + "<br>" + 'HITS';
}


<!--Slideshow Main Content 1 End-->








<!--Poll Submit Function Start-->



	function submitform()
	{
		
		
	
function setcookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}





	setcookie("technopoll",1,1);
	

		$("#pollid").addClass('pollclass');
	$("#displaypoll1").removeClass('polloptiondisplayhide');
	

	}


<!--Poll Submit Function End-->


