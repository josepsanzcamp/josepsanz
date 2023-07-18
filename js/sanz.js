
"use strict";
var lang=window.location.href.split("/").pop().split(".")[1];
$.cookie("lang",lang,{expires:365,path:"/"});
