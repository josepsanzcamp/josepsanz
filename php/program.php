<?php

include_once("php/minify.php");

$html=file_get_contents("php/index.php");
list($html,$js,$css)=html_minify2($html);
$html=html_minify($html);
$js=js_minify($js);
$css=css_minify($css);
$html=js_minify2($html,"js/all.min.js");
$html=css_minify2($html,"css/all.min.css");
file_put_contents("index.php",$html);
file_put_contents("js/all.min.js",$js);
$css=str_replace("images/","../pdfjs/images/",$css);
file_put_contents("css/all.min.css",$css);
foreach(array("ca","es","en") as $lang) passthru("php index.php ${lang} > index.${lang}.html");
unlink("index.php");

$data=file_get_contents("js/index.js");
$data=html_minify($data);
file_put_contents("index.html",$data);

$data=file_get_contents("js/gralla.js");
$data=html_minify($data);
file_put_contents("gralla/index.html",$data);
