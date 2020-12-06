<?php
$html=file("php/index.php",FILE_IGNORE_NEW_LINES);
$css=array();
$js=array();
foreach($html as $key=>$val) {
	$val=trim($val);
	$pos1=strpos($val,'<script src="');
	$pos2=strpos($val,'"></script>');
	$pos3=strpos($val,'<link href="');
	$pos4=strpos($val,'" rel="stylesheet">');
	if($pos1!==false && $pos2!==false) {
		$len1=strlen('<script src="');
		$js[]=substr($val,$pos1+$len1,$pos2-$pos1-$len1);
		unset($html[$key]);
	} elseif($pos3!==false && $pos4!==false) {
		$len3=strlen('<link href="');
		$css[]=substr($val,$pos3+$len3,$pos4-$pos3-$len3);
		unset($html[$key]);
	} elseif($val=="</head>") {
		$val='<link href="css/all.min.css" rel="stylesheet">'.$val;
		$html[$key]=$val;
	} elseif($val=="</body>") {
		$val='<script src="js/all.min.js"></script>'.$val;
		$html[$key]=$val;
	}
}

include_once("php/minify.php");

$html=implode("\n",$html);
$html=html_minify($html);
file_put_contents("index.php",$html);
foreach(array("ca","es","en") as $lang) passthru("php index.php ${lang} > index.${lang}.html");
if(file_exists("index.php")) unlink("index.php");

$data=array();
foreach($js as $file) $data[]=file_get_contents($file);
$data=implode("\n",$data);
$data=js_minify($data);
file_put_contents("js/all.min.js",$data);

$data=array();
foreach($css as $file) $data[]=file_get_contents($file);
$data=implode("\n",$data);
$data=str_replace("images/","../pdfjs/images/",$data);
$data=css_minify($data);
file_put_contents("css/all.min.css",$data);

$data=file_get_contents("js/index.js");
$data=html_minify($data);
file_put_contents("index.html",$data);

?>