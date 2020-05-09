<?php

$content=simplexml_load_file("XML/articles.xml");
$temp = $_POST['Imgname'];

$content->article[$temp*1]->likes[0] +=1;
$content->asXML("XML/articles.xml");



?>