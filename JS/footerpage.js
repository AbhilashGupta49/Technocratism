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
        


}

<!--Onload JSFUNC End-->
