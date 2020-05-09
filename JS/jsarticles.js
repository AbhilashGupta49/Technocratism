


 var indexofarticle=-1;

 
 

 
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

var urlofpage3=window.location.pathname;
var params3 = urlofpage3.split('/').slice(1);
	var url3 = window.location.toString();
window.location = url3.replace(params3[1],replaced3);
	return false;
}
 


$(document).ready(function(){
    $("#commentimage").click(function(){
        $("#commentsection").slideToggle();
    });
});


var mql = window.matchMedia("screen and (min-width: 1100px)");
$(window).scroll(function(){
    if ($(window).scrollTop() >= 200) 
	{
       
	   if(mql.matches)
	   {	
   
			if ($(window).scrollTop() >= 250 && $(window).scrollTop()<=(document.body.scrollHeight-900) )
			{
				document.getElementById('articlesidebar').style.display='inline-block';
			}
			else
			{
				document.getElementById('articlesidebar').style.display='none';
			}				

			
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
			document.getElementById('articlesidebar').style.display='none';
			$("#menubar").removeClass('fixed-header');
			
		}
    }
	
      
   
	
    else 
	{
       $("#menubar").removeClass('fixed-header');
		document.getElementById('socialsidebar').style.display='none';
		document.getElementById('articlesidebar').style.display='none';
    }
	
	
	
});



function passingvariables(thelink)
{	
var valueofanchor=thelink.innerHTML;
	var replaced =valueofanchor.split(' ').join('+');
	var urlofpage2=window.location.pathname;
var params2 = urlofpage2.split('/').slice(1);
	var url = window.location.toString();
window.location = url.replace(params2[1],replaced);
	
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



 
	function createcomment(theidofelement,p1text,p2text)
	{
		var newelementdiv=document.createElement('div');
		newelementdiv.className = 'commentdiv';
		newelementdiv.id='commentdiv'+ theidofelement;
		
		var newelementp1=document.createElement('p');
		newelementp1.className = 'commentname';
		newelementp1.id='commentname' + theidofelement;
		newelementp1.innerHTML=p1text;
		newelementdiv.appendChild(newelementp1);

		var newrow=document.createElement('hr');
		newrow.className = 'commentrow';
		newelementdiv.appendChild(newrow);
		
		var newelementp2=document.createElement('p');
		newelementp2.className = 'commenttext';
		newelementp2.id='commenttext' + theidofelement;
		newelementp2.innerHTML=p2text;
		newelementdiv.appendChild(newelementp2);
	
		document.getElementById("displaycomments").appendChild(newelementdiv);
	
		
	}
	

	

	
	
		 
		 
		 
		 
		 
		 
	



	var urlofpage=window.location.pathname;
	var params = urlofpage.split('/').slice(1);
	var gettingfromlink = params[1];
	var finalvalueoflink = gettingfromlink.split('+').join(' ');

	
	
		 
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

			
			
			if(finalvalueoflink == xmlDoc.getElementsByTagName("topic")[i].childNodes[0].nodeValue)
			{
				indexofarticle=i;
			}
			
			
		}
		 
	

		 

	xmlcomment=loadXMLDoc("/XML/comments.xml");
	
	noofcomments=xmlcomment.getElementsByTagName("commentinfo");
	commentnamepass=xmlcomment.getElementsByTagName("nameenter");
	commenttextpass=xmlcomment.getElementsByTagName("commententer");
	

	for(var k=noofcomments.length - 1;k> -1;k--)
	{
		if(xmlcomment.getElementsByTagName("categoryarticle")[k].childNodes[0].nodeValue == indexofarticle)
		{
			createcomment(k,commentnamepass[k].childNodes[0].nodeValue,commenttextpass[k].childNodes[0].nodeValue);
		}
	}
		 
		 
		 
		 

if(indexofarticle == -1)
{
	window.location = "/index.php";
}


var lastarticleindex=populararticlehits.length-1;
var previousarticle;
var nextarticle;
if(indexofarticle == 0)
{
	nextarticle=indexofarticle+1;
	previousarticle=lastarticleindex;
}
else if(indexofarticle == lastarticleindex)
{
	nextarticle=0;
	previousarticle=indexofarticle-1;
}
else
{
	previousarticle=indexofarticle-1;
	nextarticle=indexofarticle+1;
}

	
	

var max=populararticlehits.length;
var randomarticle=Math.floor(Math.random() * (max));
var nogenerated2=Math.floor(Math.random() * (max));

document.getElementById("beforeimage").src= "/"+xmlDoc.getElementsByTagName("imagemain")[previousarticle].childNodes[0].nodeValue;
document.getElementById("afterimage").src= "/"+xmlDoc.getElementsByTagName("imagemain")[nextarticle].childNodes[0].nodeValue;
document.getElementById("randomimage").src= "/"+xmlDoc.getElementsByTagName("imagemain")[randomarticle].childNodes[0].nodeValue;
document.getElementById("beforetopic").innerHTML =  xmlDoc.getElementsByTagName("topic")[previousarticle].childNodes[0].nodeValue;
document.getElementById("aftertopic").innerHTML =  xmlDoc.getElementsByTagName("topic")[nextarticle].childNodes[0].nodeValue;
document.getElementById("randomtopic").innerHTML =  xmlDoc.getElementsByTagName("topic")[randomarticle].childNodes[0].nodeValue;
		 
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

		 
	 
	document.title = finalvalueoflink;	 
		 


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
	
valueofrandomarticle= xmlDoc.getElementsByTagName("topic")[nogenerated2].childNodes[0].nodeValue;	
	
	
	
	function createcontent(number,para,image)
	{
		var newcontentdiv=document.createElement('div');
		newcontentdiv.className = 'contentdiv';
			
		var newpara=document.createElement('p');
		newpara.className = 'contenttext';
		newpara.id='contenttext'+number;
		newpara.innerHTML=para;
		newcontentdiv.appendChild(newpara);
		
		var newimage=document.createElement('img');
		newimage.className = 'contentimage';
		newimage.id='contentimage'+number;
		newimage.src="/"+image;
		newcontentdiv.appendChild(newimage);
		
		var newrowpara=document.createElement('hr');
		newrowpara.className ='hrarticles';
		
	
		document.getElementById("contentbody").appendChild(newcontentdiv);
		contentbody.appendChild(newrowpara);
		
	}
	


document.getElementById("maincontenttopic1").innerHTML = finalvalueoflink;		 
document.getElementById("maincontent").innerHTML=xmlDoc.getElementsByTagName("paramain")[indexofarticle].childNodes[0].nodeValue;
document.getElementById("mainimage").src="/"+xmlDoc.getElementsByTagName("imagemain")[indexofarticle].childNodes[0].nodeValue;
document.getElementById("contentdate").innerHTML=xmlDoc.getElementsByTagName("date")[indexofarticle].childNodes[0].nodeValue;
document.getElementById("contentauthor").innerHTML="- "+xmlDoc.getElementsByTagName("author")[indexofarticle].childNodes[0].nodeValue;


document.getElementById("numberlikes").innerHTML = xmlDoc.getElementsByTagName("likes")[indexofarticle].childNodes[0].nodeValue;

var subnodes=xmlDoc.getElementsByTagName("paras");




for(var i=1;i<=subnodes[indexofarticle].children.length;i++)
{	
	createcontent(i,xmlDoc.getElementsByTagName("paras")[indexofarticle].children[i-1].childNodes[0].nodeValue,xmlDoc.getElementsByTagName("subimages")[indexofarticle].children[i-1].childNodes[0].nodeValue);
	

	if(xmlDoc.getElementsByTagName("paras")[indexofarticle].children[i-1].childNodes[0].nodeValue=="null")
	{
		document.getElementById('contenttext'+i).style.display='none';
	}
	if(xmlDoc.getElementsByTagName("subimages")[indexofarticle].children[i-1].childNodes[0].nodeValue=="null")
	{
		document.getElementById('contentimage'+i).style.display='none';
	}
	
}





	


	
	
	
	
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

 

	var cookievalue2=getcookie("technocratism");
	if(cookievalue2 == indexofarticle)
	{
		document.getElementById('likeimage').src='/Pictures/afteryeah.png';
	}
	
	
	
		
	
}





function incrementvalue()
{
		
		
	
	
	
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
 

	var cookievalue=getcookie("technocratism");
	
	
	
	if(cookievalue != indexofarticle)
	{
	setcookie("technocratism",indexofarticle,1);
		document.getElementById('likeimage').src='/Pictures/afteryeah.png';
		
		$(function(){
		$.ajax({

			type: "POST",

			url: '/increment.php',

			data: ({Imgname:indexofarticle}),

			success: function(data) {
	
			window.location.reload();

			}

				});
					});
	 
	}
	 
}
