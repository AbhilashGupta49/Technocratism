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
echo "DONE";
 }

  ?>
<!--PHP End-->