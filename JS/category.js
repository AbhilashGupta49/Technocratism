


var valueofrandomarticle;





function passingvariablemenu(thevalue)
{
	var valueofanchor4=thevalue.innerHTML;
window.location.href="/Category/"+valueofanchor4+"/";
	return false;
}

function passingvariablesrandom()
{
	
	var valueofanchor3=valueofrandomarticle;
	var replaced3 =valueofanchor3.split(' ').join('+');
	window.location.href = "/Articles/"+replaced3+"/";
	return false;
}
 





var mql = window.matchMedia("screen and (min-width: 1100px)");
$(window).scroll(function(){

	

	
    if ($(window).scrollTop() >= 200) 
	{
       
	   if(mql.matches)
	   {	
   
		
			
			$("#menubar").addClass('fixed-header');



			if($(window).scrollTop()<=(document.body.scrollHeight-600))
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
	
      
   
	
    else 
	{
       $("#menubar").removeClass('fixed-header');
		document.getElementById('socialsidebar').style.display='none';
    }
	
	
	
});



function passingvariables(thelink)
{	

var valueofanchor=thelink.innerHTML;

	var replaced =valueofanchor.split(' ').join('+');

	
window.location.href="/Articles/"+replaced+"/";
	
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
	window.location.href = "/Articles/"+replaced2+"/";
	return false;
	
}




function jsfunc()
{
	
		
	
function loadXMLDoc(filename)
{
if (window.XMLHttpRequest)
  {
  xhttp=new XMLHttpRequest();
  }
else // code for IE5 and IE6
  {
  xhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xhttp.open("GET",filename,false);
xhttp.send();
return xhttp.responseXML;
} 



 
	

	

	
	
		 
		 
		 
		 
		 
		 
	



	var urlofpage=window.location.pathname;
	var params = urlofpage.split('/').slice(1);
	var gettingfromlink = params[1];
	var finalvalueoflink = gettingfromlink.split('+').join(' ');

	document.title = finalvalueoflink;	
	document.getElementById("maincontenttopic1").innerHTML=finalvalueoflink;
	
		 
         xmlDoc=loadXMLDoc("/XML/articles.xml");
			

		 
		 

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

		 
	  
		 	



document.getElementById("dropdownmenupopular1").src= "/"+xmlDoc.getElementsByTagName("imagemain")[orderpopularhits[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenupopular2").innerHTML= xmlDoc.getElementsByTagName("topic")[orderpopularhits[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenupopular3").innerHTML= xmlDoc.getElementsByTagName("half")[orderpopularhits[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenupopular4").innerHTML= xmlDoc.getElementsByTagName("topic")[orderpopularhits[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenupopular5").innerHTML= xmlDoc.getElementsByTagName("topic")[orderpopularhits[2]].childNodes[0].nodeValue; 

document.getElementById("dropdownmenuhardware1").src= "/"+xmlDoc.getElementsByTagName("imagemain")[hardwareindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuhardware2").innerHTML= xmlDoc.getElementsByTagName("topic")[hardwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuhardware3").innerHTML= xmlDoc.getElementsByTagName("half")[hardwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuhardware4").innerHTML= xmlDoc.getElementsByTagName("topic")[hardwareindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuhardware5").innerHTML= xmlDoc.getElementsByTagName("topic")[hardwareindex[2]].childNodes[0].nodeValue;  

document.getElementById("dropdownmenusoftware1").src= "/"+xmlDoc.getElementsByTagName("imagemain")[softwareindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenusoftware2").innerHTML= xmlDoc.getElementsByTagName("topic")[softwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenusoftware3").innerHTML= xmlDoc.getElementsByTagName("half")[softwareindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenusoftware4").innerHTML= xmlDoc.getElementsByTagName("topic")[softwareindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenusoftware5").innerHTML= xmlDoc.getElementsByTagName("topic")[softwareindex[2]].childNodes[0].nodeValue;

document.getElementById("dropdownmenuinternet1").src= "/"+xmlDoc.getElementsByTagName("imagemain")[internetindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuinternet2").innerHTML= xmlDoc.getElementsByTagName("topic")[internetindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuinternet3").innerHTML= xmlDoc.getElementsByTagName("half")[internetindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenuinternet4").innerHTML= xmlDoc.getElementsByTagName("topic")[internetindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenuinternet5").innerHTML= xmlDoc.getElementsByTagName("topic")[internetindex[2]].childNodes[0].nodeValue;  

document.getElementById("dropdownmenumiscellaneous1").src= "/"+xmlDoc.getElementsByTagName("imagemain")[miscellaneousindex[0]].childNodes[0].nodeValue;
document.getElementById("dropdownmenumiscellaneous2").innerHTML= xmlDoc.getElementsByTagName("topic")[miscellaneousindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenumiscellaneous3").innerHTML= xmlDoc.getElementsByTagName("half")[miscellaneousindex[0]].childNodes[0].nodeValue;	
document.getElementById("dropdownmenumiscellaneous4").innerHTML= xmlDoc.getElementsByTagName("topic")[miscellaneousindex[1]].childNodes[0].nodeValue;
document.getElementById("dropdownmenumiscellaneous5").innerHTML= xmlDoc.getElementsByTagName("topic")[miscellaneousindex[2]].childNodes[0].nodeValue; 

	var max=populararticlehits.length;
	var nogenerated2=Math.floor(Math.random() * (max));
valueofrandomarticle= xmlDoc.getElementsByTagName("topic")[nogenerated2].childNodes[0].nodeValue;	
	

	
	function createcontent(number,heading,para,image,author,passdate)
	{
		var newcontentdiv=document.createElement('div');
		newcontentdiv.className = 'maincontentsub';
	
		var newimagecontentdiv=document.createElement('div');
		newimagecontentdiv.className = 'maincontentimgbox';
		newcontentdiv.appendChild(newimagecontentdiv);
		
		var newimage=document.createElement('img');
		newimage.className = 'maincontentimg';
		newimage.src="/"+image;
		newimagecontentdiv.appendChild(newimage);
				
		
		var newanchor=document.createElement('a');
		newanchor.className = 'maincontentsubtop';
		newanchor.innerHTML=heading;
		newanchor.href="Articles"; 
		newcontentdiv.appendChild(newanchor);
		
		
		var newauthor=document.createElement('p');
		newauthor.className='authordefine';
		newauthor.innerHTML="- "+author;
		newcontentdiv.appendChild(newauthor);
		
		var newrow=document.createElement('hr');
		newrow.className="rowbetweenlightright1";
		newcontentdiv.appendChild(newrow);
		
		var newquarter=document.createElement('p');
		newquarter.className = 'maincontentsubquarter';
		newquarter.innerHTML=para;
		newcontentdiv.appendChild(newquarter);
		
		var newdate=document.createElement('p');
		newdate.className = 'datedefine';
		newdate.innerHTML=passdate;
		newcontentdiv.appendChild(newdate);
		
		document.getElementById("contentbody").appendChild(newcontentdiv);
	
		
	}
	

	
var tobeadded=[];	
var checklength=populararticlehits.length;




for(i=0;i<checklength;i++)	
{	
	if(finalvalueoflink=="Hardware")
	{
		checklength=hardwareindex.length;
		tobeadded[i]=hardwareindex[i];
	}
	else if(finalvalueoflink=="Software")
	{
		checklength=softwareindex.length;
		tobeadded[i]=softwareindex[i];
	}
	else if(finalvalueoflink=="Internet")
	{
		checklength=internetindex.length;
		tobeadded[i]=internetindex[i];
	}
	else if(finalvalueoflink=="Popular")
	{
		checklength=populararticlehits.length;
		tobeadded[i]=orderpopularhits[i];
	}
	else if(finalvalueoflink=="Miscellaneous")
	{
		checklength=miscellaneousindex.length;
		tobeadded[i]=miscellaneousindex[i];
	}
	
}	
	

for(i=0;i<checklength;i++)
{
	createcontent(i,xmlDoc.getElementsByTagName("topic")[tobeadded[i]].childNodes[0].nodeValue,xmlDoc.getElementsByTagName("quarter")[tobeadded[i]].childNodes[0].nodeValue,xmlDoc.getElementsByTagName("imagemain")[tobeadded[i]].childNodes[0].nodeValue,xmlDoc.getElementsByTagName("author")[tobeadded[i]].childNodes[0].nodeValue,xmlDoc.getElementsByTagName("date")[tobeadded[i]].childNodes[0].nodeValue);

}




 $(".maincontentsub").slice(0, 10).show();
if($(".maincontentsub:hidden").length == 0){ 
           $( "#loadlink" ).remove();
        } 
    $("#loadlink").click(function(e){ 
        e.preventDefault();
        $(".maincontentsub:hidden").slice(0, 10).show(); 
        if($(".maincontentsub:hidden").length == 0){ 
           $( "#loadlink" ).remove();
        }
    });







$(".maincontentsubtop").click(function(event) {
      var valueofanchorjquery=$(this).text();

	var replacedjquery =valueofanchorjquery.split(' ').join('+');

	
window.location.href="/Articles/"+replacedjquery+"/";
	
	return false;
    });
	
	
	
$(".maincontentimg").click(function(event) {
	
      var valueofanchor2jquery=$(this).attr("src") ;

	var changeimagesrcjquery=valueofanchor2jquery.split('/').slice(1);
var finalimagesrcjquery=changeimagesrcjquery[0]+"/"+changeimagesrcjquery[1];

for(i=0;i<xmlDoc.getElementsByTagName("noofarticlestotal")[0].childNodes[0].nodeValue;i++)
{
				if(finalimagesrcjquery == xmlDoc.getElementsByTagName("imagemain")[i].childNodes[0].nodeValue)
			{
				var indexofarticlejquery=i;
			}
}

var topicofimagejquery=xmlDoc.getElementsByTagName("topic")[indexofarticlejquery].childNodes[0].nodeValue;	
	var replaced2jquery =topicofimagejquery.split(' ').join('+');
	window.location.href = "/Articles/"+replaced2jquery+"/";
	return false;
    });	

	


	

}



