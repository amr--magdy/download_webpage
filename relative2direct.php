<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
</head>

<body>
<?
$url=$_GET['lin'];
$content = file_get_contents("$url");
$content = str_replace ('src="'.$url,'src="',$content);
$content = str_replace ('src= "'.$url,'src="',$content);
$content = str_replace ('src ="'.$url,'src="',$content);
$content = str_replace ('src = "'.$url,'src="',$content);
$content = str_replace ('SRC="'.$url,'src="',$content);
$content = str_replace ('SRC= "'.$url,'src="',$content);
$content = str_replace ('SRC ="'.$url,'src="',$content);
$content = str_replace ('SRC = "'.$url,'src="',$content);
$content = str_replace ('Src="'.$url,'src="',$content);
$content = str_replace ('Src= "'.$url,'src="',$content);
$content = str_replace ('Src ="'.$url,'src="',$content);
$content = str_replace ('Src = "'.$url,'src="',$content);
$content = str_replace ('sRc="'.$url,'src="',$content);
$content = str_replace ('sRc= "'.$url,'src="',$content);
$content = str_replace ('sRc ="'.$url,'src="',$content);
$content = str_replace ('sRc = "'.$url,'src="',$content);
$content = str_replace ('srC="'.$url,'src="',$content);
$content = str_replace ('srC= "'.$url,'src="',$content);
$content = str_replace ('srC ="'.$url,'src="',$content);
$content = str_replace ('srC = "'.$url,'src="',$content);
$content = str_replace ('SRc="'.$url,'src="',$content);
$content = str_replace ('SRc= "'.$url,'src="',$content);
$content = str_replace ('SRc ="'.$url,'src="',$content);
$content = str_replace ('SRc = "'.$url,'src="',$content);
$content = str_replace ('sRC="'.$url,'src="',$content);
$content = str_replace ('sRC= "'.$url,'src="',$content);
$content = str_replace ('sRC ="'.$url,'src="',$content);
$content = str_replace ('sRC = "'.$url,'src="',$content);
$content = str_replace ('SrC="'.$url,'src="',$content);
$content = str_replace ('SrC= "'.$url,'src="',$content);
$content = str_replace ('SrC ="'.$url,'src="',$content);
$content = str_replace ('SrC = "'.$url,'src="',$content);

$content = str_replace ('src="'.'http','sscc="'.'http',$content);
$content = str_replace ('src= "'.'http','sscc="'.'http',$content);
$content = str_replace ('src ="'.'http','sscc="'.'http',$content);
$content = str_replace ('src = "'.'http','sscc="'.'http',$content);
$content = str_replace ('SRC="'.'http','sscc="'.'http',$content);
$content = str_replace ('SRC= "'.'http','sscc="'.'http',$content);
$content = str_replace ('SRC ="'.'http','sscc="'.'http',$content);
$content = str_replace ('SRC = "'.'http','sscc="'.'http',$content);
$content = str_replace ('Src="'.'http','sscc="'.'http',$content);
$content = str_replace ('Src= "'.'http','sscc="'.'http',$content);
$content = str_replace ('Src ="'.'http','sscc="'.'http',$content);
$content = str_replace ('Src = "'.'http','sscc="'.'http',$content);
$content = str_replace ('sRc="'.'http','sscc="'.'http',$content);
$content = str_replace ('sRc= "'.'http','sscc="'.'http',$content);
$content = str_replace ('sRc ="'.'http','sscc="'.'http',$content);
$content = str_replace ('sRc = "'.'http','sscc="'.'http',$content);
$content = str_replace ('srC="'.'http','sscc="'.'http',$content);
$content = str_replace ('srC= "'.'http','sscc="'.'http',$content);
$content = str_replace ('srC ="'.'http','sscc="'.'http',$content);
$content = str_replace ('srC = "'.'http','sscc="'.'http',$content);
$content = str_replace ('SRc="'.'http','sscc="'.'http',$content);
$content = str_replace ('SRc= "'.'http','sscc="'.'http',$content);
$content = str_replace ('SRc ="'.'http','sscc="'.'http',$content);
$content = str_replace ('SRc = "'.'http','sscc="'.'http',$content);
$content = str_replace ('sRC="'.'http','sscc="'.'http',$content);
$content = str_replace ('sRC= "'.'http','sscc="'.'http',$content);
$content = str_replace ('sRC ="'.'http','sscc="'.'http',$content);
$content = str_replace ('sRC = "'.'http','sscc="'.'http',$content);
$content = str_replace ('SrC="'.'http','sscc="'.'http',$content);
$content = str_replace ('SrC= "'.'http','sscc="'.'http',$content);
$content = str_replace ('SrC ="'.'http','sscc="'.'http',$content);
$content = str_replace ('SrC = "'.'http','sscc="'.'http',$content);

$content = str_replace ('src="'.'https','sscc="'.'https',$content);
$content = str_replace ('src= "'.'https','sscc="'.'https',$content);
$content = str_replace ('src ="'.'https','sscc="'.'https',$content);
$content = str_replace ('src = "'.'https','sscc="'.'https',$content);
$content = str_replace ('SRC="'.'https','sscc="'.'https',$content);
$content = str_replace ('SRC= "'.'https','sscc="'.'https',$content);
$content = str_replace ('SRC ="'.'https','sscc="'.'https',$content);
$content = str_replace ('SRC = "'.'https','sscc="'.'https',$content);
$content = str_replace ('Src="'.'https','sscc="'.'https',$content);
$content = str_replace ('Src= "'.'https','sscc="'.'https',$content);
$content = str_replace ('Src ="'.'https','sscc="'.'https',$content);
$content = str_replace ('Src = "'.'https','sscc="'.'https',$content);
$content = str_replace ('sRc="'.'https','sscc="'.'https',$content);
$content = str_replace ('sRc= "'.'https','sscc="'.'https',$content);
$content = str_replace ('sRc ="'.'https','sscc="'.'https',$content);
$content = str_replace ('sRc = "'.'https','sscc="'.'https',$content);
$content = str_replace ('srC="'.'https','sscc="'.'https',$content);
$content = str_replace ('srC= "'.'https','sscc="'.'https',$content);
$content = str_replace ('srC ="'.'https','sscc="'.'https',$content);
$content = str_replace ('srC = "'.'https','sscc="'.'https',$content);
$content = str_replace ('SRc="'.'https','sscc="'.'https',$content);
$content = str_replace ('SRc= "'.'https','sscc="'.'https',$content);
$content = str_replace ('SRc ="'.'https','sscc="'.'https',$content);
$content = str_replace ('SRc = "'.'https','sscc="'.'https',$content);
$content = str_replace ('sRC="'.'https','sscc="'.'https',$content);
$content = str_replace ('sRC= "'.'https','sscc="'.'https',$content);
$content = str_replace ('sRC ="'.'https','sscc="'.'https',$content);
$content = str_replace ('sRC = "'.'https','sscc="'.'https',$content);
$content = str_replace ('SrC="'.'https','sscc="'.'https',$content);
$content = str_replace ('SrC= "'.'https','sscc="'.'https',$content);
$content = str_replace ('SrC ="'.'https','sscc="'.'https',$content);
$content = str_replace ('SrC = "'.'https','sscc="'.'https',$content);


$content = str_replace ('src="','src="'.$url.'/',$content);
$content = str_replace ('sscc="','src="',$content);


$content = str_replace ('href="'.$url,'href="',$content);
$content = str_replace ('href= "'.$url,'href="',$content);
$content = str_replace ('href ="'.$url,'href="',$content);
$content = str_replace ('href = "'.$url,'href="',$content);
$content = str_replace ('HREF="'.$url,'href="',$content);
$content = str_replace ('HREF= "'.$url,'href="',$content);
$content = str_replace ('HREF ="'.$url,'href="',$content);
$content = str_replace ('HREF = "'.$url,'href="',$content);
$content = str_replace ('Href="'.$url,'href="',$content);
$content = str_replace ('Href= "'.$url,'href="',$content);
$content = str_replace ('Href ="'.$url,'href="',$content);
$content = str_replace ('Href = "'.$url,'href="',$content);
$content = str_replace ('hRef="'.$url,'href="',$content);
$content = str_replace ('hRef= "'.$url,'href="',$content);
$content = str_replace ('hRef ="'.$url,'href="',$content);
$content = str_replace ('hRef = "'.$url,'href="',$content);
$content = str_replace ('hrEf="'.$url,'href="',$content);
$content = str_replace ('hrEf= "'.$url,'href="',$content);
$content = str_replace ('hrEf ="'.$url,'href="',$content);
$content = str_replace ('hrEf = "'.$url,'href="',$content);
$content = str_replace ('hreF="'.$url,'href="',$content);
$content = str_replace ('hreF= "'.$url,'href="',$content);
$content = str_replace ('hreF ="'.$url,'href="',$content);
$content = str_replace ('hreF = "'.$url,'href="',$content);
$content = str_replace ('HRef="'.$url,'href="',$content);
$content = str_replace ('HRef= "'.$url,'href="',$content);
$content = str_replace ('HRef ="'.$url,'href="',$content);
$content = str_replace ('HRef = "'.$url,'href="',$content);
$content = str_replace ('hREf="'.$url,'href="',$content);
$content = str_replace ('hREf= "'.$url,'href="',$content);
$content = str_replace ('hREf ="'.$url,'href="',$content);
$content = str_replace ('hREf = "'.$url,'href="',$content);
$content = str_replace ('hrEF="'.$url,'href="',$content);
$content = str_replace ('hrEF= "'.$url,'href="',$content);
$content = str_replace ('hrEF ="'.$url,'href="',$content);
$content = str_replace ('hrEF = "'.$url,'href="',$content);
$content = str_replace ('HreF="'.$url,'href="',$content);
$content = str_replace ('HreF= "'.$url,'href="',$content);
$content = str_replace ('HreF ="'.$url,'href="',$content);
$content = str_replace ('HreF = "'.$url,'href="',$content);
$content = str_replace ('HrEf="'.$url,'href="',$content);
$content = str_replace ('HrEf= "'.$url,'href="',$content);
$content = str_replace ('HrEf ="'.$url,'href="',$content);
$content = str_replace ('HrEf = "'.$url,'href="',$content);
$content = str_replace ('hReF="'.$url,'href="',$content);
$content = str_replace ('hReF= "'.$url,'href="',$content);
$content = str_replace ('hReF ="'.$url,'href="',$content);
$content = str_replace ('hReF = "'.$url,'href="',$content);

$content = str_replace ('href="'.'http','hrff="'.'http',$content);
$content = str_replace ('href= "'.'http','hrff="'.'http',$content);
$content = str_replace ('href ="'.'http','hrff="'.'http',$content);
$content = str_replace ('href = "'.'http','hrff="'.'http',$content);
$content = str_replace ('HREF="'.'http','hrff="'.'http',$content);
$content = str_replace ('HREF= "'.'http','hrff="'.'http',$content);
$content = str_replace ('HREF ="'.'http','hrff="'.'http',$content);
$content = str_replace ('HREF = "'.'http','hrff="'.'http',$content);
$content = str_replace ('Href="'.'http','hrff="'.'http',$content);
$content = str_replace ('Href= "'.'http','hrff="'.'http',$content);
$content = str_replace ('Href ="'.'http','hrff="'.'http',$content);
$content = str_replace ('Href = "'.'http','hrff="'.'http',$content);
$content = str_replace ('hRef="'.'http','hrff="'.'http',$content);
$content = str_replace ('hRef= "'.'http','hrff="'.'http',$content);
$content = str_replace ('hRef ="'.'http','hrff="'.'http',$content);
$content = str_replace ('hRef = "'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEf="'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEf= "'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEf ="'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEf = "'.'http','hrff="'.'http',$content);
$content = str_replace ('hreF="'.'http','hrff="'.'http',$content);
$content = str_replace ('hreF= "'.'http','hrff="'.'http',$content);
$content = str_replace ('hreF ="'.'http','hrff="'.'http',$content);
$content = str_replace ('hreF = "'.'http','hrff="'.'http',$content);
$content = str_replace ('HRef="'.'http','hrff="'.'http',$content);
$content = str_replace ('HRef= "'.'http','hrff="'.'http',$content);
$content = str_replace ('HRef ="'.'http','hrff="'.'http',$content);
$content = str_replace ('HRef = "'.'http','hrff="'.'http',$content);
$content = str_replace ('hREf="'.'http','hrff="'.'http',$content);
$content = str_replace ('hREf= "'.'http','hrff="'.'http',$content);
$content = str_replace ('hREf ="'.'http','hrff="'.'http',$content);
$content = str_replace ('hREf = "'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEF="'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEF= "'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEF ="'.'http','hrff="'.'http',$content);
$content = str_replace ('hrEF = "'.'http','hrff="'.'http',$content);
$content = str_replace ('HreF="'.'http','hrff="'.'http',$content);
$content = str_replace ('HreF= "'.'http','hrff="'.'http',$content);
$content = str_replace ('HreF ="'.'http','hrff="'.'http',$content);
$content = str_replace ('HreF = "'.'http','hrff="'.'http',$content);
$content = str_replace ('HrEf="'.'http','hrff="'.'http',$content);
$content = str_replace ('HrEf= "'.'http','hrff="'.'http',$content);
$content = str_replace ('HrEf ="'.'http','hrff="'.'http',$content);
$content = str_replace ('HrEf = "'.'http','hrff="'.'http',$content);
$content = str_replace ('hReF="'.'http','hrff="'.'http',$content);
$content = str_replace ('hReF= "'.'http','hrff="'.'http',$content);
$content = str_replace ('hReF ="'.'http','hrff="'.'http',$content);
$content = str_replace ('hReF = "'.'http','hrff="'.'http',$content);

$content = str_replace ('href="'.'https','hrff="'.'https',$content);
$content = str_replace ('href= "'.'https','hrff="'.'https',$content);
$content = str_replace ('href ="'.'https','hrff="'.'https',$content);
$content = str_replace ('href = "'.'https','hrff="'.'https',$content);
$content = str_replace ('HREF="'.'https','hrff="'.'https',$content);
$content = str_replace ('HREF= "'.'https','hrff="'.'https',$content);
$content = str_replace ('HREF ="'.'https','hrff="'.'https',$content);
$content = str_replace ('HREF = "'.'https','hrff="'.'https',$content);
$content = str_replace ('Href="'.'https','hrff="'.'https',$content);
$content = str_replace ('Href= "'.'https','hrff="'.'https',$content);
$content = str_replace ('Href ="'.'https','hrff="'.'https',$content);
$content = str_replace ('Href = "'.'https','hrff="'.'https',$content);
$content = str_replace ('hRef="'.'https','hrff="'.'https',$content);
$content = str_replace ('hRef= "'.'https','hrff="'.'https',$content);
$content = str_replace ('hRef ="'.'https','hrff="'.'https',$content);
$content = str_replace ('hRef = "'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEf="'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEf= "'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEf ="'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEf = "'.'https','hrff="'.'https',$content);
$content = str_replace ('hreF="'.'https','hrff="'.'https',$content);
$content = str_replace ('hreF= "'.'https','hrff="'.'https',$content);
$content = str_replace ('hreF ="'.'https','hrff="'.'https',$content);
$content = str_replace ('hreF = "'.'https','hrff="'.'https',$content);
$content = str_replace ('HRef="'.'https','hrff="'.'https',$content);
$content = str_replace ('HRef= "'.'https','hrff="'.'https',$content);
$content = str_replace ('HRef ="'.'https','hrff="'.'https',$content);
$content = str_replace ('HRef = "'.'https','hrff="'.'https',$content);
$content = str_replace ('hREf="'.'https','hrff="'.'https',$content);
$content = str_replace ('hREf= "'.'https','hrff="'.'https',$content);
$content = str_replace ('hREf ="'.'https','hrff="'.'https',$content);
$content = str_replace ('hREf = "'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEF="'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEF= "'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEF ="'.'https','hrff="'.'https',$content);
$content = str_replace ('hrEF = "'.'https','hrff="'.'https',$content);
$content = str_replace ('HreF="'.'https','hrff="'.'https',$content);
$content = str_replace ('HreF= "'.'https','hrff="'.'https',$content);
$content = str_replace ('HreF ="'.'https','hrff="'.'https',$content);
$content = str_replace ('HreF = "'.'https','hrff="'.'https',$content);
$content = str_replace ('HrEf="'.'https','hrff="'.'https',$content);
$content = str_replace ('HrEf= "'.'https','hrff="'.'https',$content);
$content = str_replace ('HrEf ="'.'https','hrff="'.'https',$content);
$content = str_replace ('HrEf = "'.'https','hrff="'.'https',$content);
$content = str_replace ('hReF="'.'https','hrff="'.'https',$content);
$content = str_replace ('hReF= "'.'https','hrff="'.'https',$content);
$content = str_replace ('hReF ="'.'https','hrff="'.'https',$content);
$content = str_replace ('hReF = "'.'https','hrff="'.'https',$content);

$content = str_replace ('href="','href="'.$url.'/',$content);
$content = str_replace ('hrff="','href="',$content);

$content = str_replace ('background="'.$url,'background="',$content);
$content = str_replace ('background= "'.$url,'background="',$content);
$content = str_replace ('background ="'.$url,'background="',$content);
$content = str_replace ('background = "'.$url,'background="',$content);

$content = str_replace ('background="'.'http','backgrounnn="http',$content);
$content = str_replace ('background= "'.'http','backgrounnn="http',$content);
$content = str_replace ('background ="'.'http','backgrounnn="http',$content);
$content = str_replace ('background = "'.'http','backgrounnn="http',$content);

$content = str_replace ('background="'.'https','backgrounnn="https',$content);
$content = str_replace ('background= "'.'https','backgrounnn="https',$content);
$content = str_replace ('background ="'.'https','backgrounnn="https',$content);
$content = str_replace ('background = "'.'https','backgrounnn="https',$content);



$content = str_replace ('background="','background="'.$url.'/',$content);
$content = str_replace ('backgrounnn="','background="',$content);


?>
<?=$content?>

</body>
</html>