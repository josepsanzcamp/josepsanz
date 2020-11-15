<?php
$index=file("index.php",FILE_IGNORE_NEW_LINES);
$css=array();
$js=array();
foreach($index as $key=>$val) {
	$val=trim($val);
	$pos0=strpos($val,'<script src="http');
	$pos1=strpos($val,'<script src="');
	$pos2=strpos($val,'"></script>');
	$pos3=strpos($val,'<link href="');
	$pos4=strpos($val,'" rel="stylesheet">');
	if($pos0!==false && $pos2!==false) {
		// NOTHING TO DO
	} elseif($pos1!==false && $pos2!==false) {
		$len1=strlen('<script src="');
		$js[]=substr($val,$pos1+$len1,$pos2-$pos1-$len1);
		unset($index[$key]);
	} elseif($pos3!==false && $pos4!==false) {
		$len3=strlen('<link href="');
		$css[]=substr($val,$pos3+$len3,$pos4-$pos3-$len3);
		unset($index[$key]);
	} elseif($val=="</head>") {
		$val='<link href="css/all.min.css" rel="stylesheet">'.$val;
		$index[$key]=$val;
	} elseif($val=="</body>") {
		$val='<script src="js/all.min.js"></script>'.$val;
		$index[$key]=$val;
	}
}

if(file_exists("../index.php")) unlink("../index.php");
file_put_contents("../index.php",implode("\n",$index));
passthru("time java -jar htmlcompressor-1.3.1.jar --type=html --charset=utf-8 --compress-js --compress-css ../index.php -o ../index.php");
foreach(array("ca","es","en") as $lang) passthru("php ../index.php ${lang} > ../index.${lang}.html");
if(file_exists("../index.php")) unlink("../index.php");

if(file_exists("../js/all.js")) unlink("../js/all.js");
if(file_exists("../js/all.min.js")) unlink("../js/all.min.js");
foreach($js as $file) file_put_contents("../js/all.js",file_get_contents("../${file}")."\n",FILE_APPEND);
passthru("time java -jar closure-compiler-v20200614.jar --js ../js/all.js --js_output_file ../js/all.min.js -W QUIET --language_in ECMASCRIPT5 --language_out ECMASCRIPT5");
//copy("../js/all.js","../js/all.min.js");
if(file_exists("../js/all.js")) unlink("../js/all.js");

if(file_exists("../css/all.css")) unlink("../css/all.css");
if(file_exists("../css/all.min.css")) unlink("../css/all.min.css");
foreach($css as $file) file_put_contents("../css/all.css",str_replace("images/","../pdfjs/images/",file_get_contents("../${file}"))."\n\n",FILE_APPEND);
//passthru("time java -jar yuicompressor-2.4.7.jar --type=css --charset=utf-8 ../css/all.css -o ../css/all.min.css");
$buffer=file_get_contents("../css/all.css");
$buffer=str_replace(array("\n","\r","\t"),"",$buffer);
for($i=0;$i<100;$i++) $buffer=str_replace("  "," ",$buffer);
foreach(array(":",";","{","}",",") as $temp) $buffer=str_replace(array(" ${temp} "," ${temp}","${temp} "),$temp,$buffer);
file_put_contents("../css/all.min.css",$buffer);
//copy("../css/all.css","../css/all.min.css");
if(file_exists("../css/all.css")) unlink("../css/all.css");

?>