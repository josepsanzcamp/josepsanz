
"use strict";

$(function() {
	var colores={
		"template":{
			".divider-custom .divider-custom-line":{
				"background-color":"#123456",
				"border-color":"#123456",
			},
			".divider-custom .divider-custom-icon i":{
				"color":"#123456",
			},
			".divider-custom.divider-light .divider-custom-line":{
				"background-color":"#345678",
				"border-color":"#345678",
			},
			".divider-custom.divider-light .divider-custom-icon i":{
				"color":"#345678",
			},
			".bg-primary":{
				"background-color":"#234567!important",
			},
			".text-primary":{
				"color":"#234567",
			},
			".btn-primary":{
				"color":"#345678",
				"background-color":"#234567",
				"border-color":"#234567",
			},
			".btn-primary:hover":{
				"color":"#ffffff",
				"background-color":"#123456",
				"border-color":"#123456",
			},
			".masthead.text-white":{
				"color":"#345678!important",
			},
			"#about .text-white":{
				"color":"#345678!important",
			},
			".bg-secondary":{
				"background-color":"#123456!important",
			},
			".text-secondary":{
				"color":"#123456!important",
			},
			"#portfolio .portfolio-item-caption":{
				"background-color":"rgba(50,100,150,.9)",
			},
			"#portfolio img":{
				"background-color":"#234567",
			},
			".portfolio-modal img":{
				"background-color":"#234567",
			},
			".portfolio-modal .close":{
				"color":"#123456",
			},
			".portfolio-modal a":{
				"color":"#123456",
				"text-decoration":"underline",
			},
			".portfolio-modal a:hover":{
				"text-decoration":"none",
			},
			".footer":{
				"color":"#345678",
				"background-color":"#234567",
			},
			".copyright":{
				"background-color":"#123456",
			},
			".copyright a":{
				"color":"#ffffff",
				"text-decoration":"underline",
			},
			".copyright a:hover":{
				"text-decoration":"none",
			},
			".btn-outline-light":{
				"color":"#345678",
				"border-color":"#345678",
			},
			".btn-outline-light:hover":{
				"color":"#234567",
				"background-color":"#345678",
				"border-color":"#345678",
			},
			"#mainNav .nav-link.active":{
				"background-color":"#234567!important",
				"color":"#345678!important",
			},
			"#mainNav .nav-link:hover":{
				"background-color":"#234567",
				"color":"#345678!important",
			},
			"#mainNav button":{
				"color":"#345678!important",
			},
			"#mainNav button:hover":{
				"background-color":"#345678!important",
				"color":"#234567!important",
			},
			".form-control:focus":{
				"border-color":"#234567!important",
			}
		}
	};
	var counter=0;
	var nombre=["original","blue","green","red","yellow"];
	var color1=["2c3e50","1a3561","144321","5d1a15","644b02"];
	var color2=["1abc9c","4285f4","34a853","ea4335","fbbc05"];
	var color3=[];
	var color4=["ffffff","ffffff","ffffff","ffffff","000000"];
	var color5=["15997f","4285f4","2f994c","ea4335","cc9904"];
	for(var k in nombre) {
		var color=nombre[k];
		colores[color]={};
		color3[k]=parseInt(color1[k].substr(0,2),16)+","+parseInt(color1[k].substr(2,2),16)+","+parseInt(color1[k].substr(4,2),16);
		for(var i in colores["template"]) {
			colores[color][i]={};
			for(var j in colores["template"][i]) {
				colores[color][i][j]=colores["template"][i][j].replace("123456",color1[k]).replace("234567",color2[k]).replace("50,100,150",color3[k]).replace("345678",color4[k]);
			}
		}
	}

	$("body").on("color",function() {
		var color=nombre[counter];
		for(var i in colores[color]) {
			for(var j in colores[color][i]) {
				$("body").append("<style>"+i+"{"+j+":"+colores[color][i][j]+"}</style>");
			}
		}
		color=color2[counter];
		$("meta[name='theme-color']").attr("content","#"+color);
		color=color5[counter];
		$("#viewerContainer").attr("data-color",color);
	});

	$("body").on("click",function(e) {
		if($(e.target).is("a")) return;
		if($(e.target).is("button")) return;
		if($(e.target).is("i")) return;
		if($(e.target).is("div.portfolio-item-caption")) return;
		if($(e.target).is("input")) return;
		if($(e.target).is("textarea")) return;
		if(e.ctrlKey || e.shiftKey) {
			counter=counter-1;
			if(counter<0) counter+=nombre.length;
		} else {
			counter=(counter+1)%nombre.length;
		}
		$("body").trigger("color");
		$("body").trigger("pdfjs");
		$.cookie("color",counter,{expires:365,path:"/"});
	});

	counter=parseInt($.cookie("color"));
	//~ if(isNaN(counter)) counter=Math.floor(Math.random()*nombre.length);
	if(isNaN(counter)) counter=0;
	$("body").trigger("color");
	$("body").trigger("pdfjs");
	$.cookie("color",counter,{expires:365,path:"/"});

	var lang=window.location.href.split("/").pop().split(".")[1];
	$.cookie("lang",lang,{expires:365,path:"/"});
});

