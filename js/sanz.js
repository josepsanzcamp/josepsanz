
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
			".btn-primary:disabled":{
				"color":"#345678",
				"background-color":"#234567",
				"border-color":"#234567",
			},
			".btn-primary:hover":{
				"color":"#ffffff",
				"background-color":"#123456",
				"border-color":"#123456",
			},
			".btn-primary:focus":{
				"box-shadow":"0 0 0 0.2rem rgba(50,100,150, 0.5)",
			},
			".btn-primary:active":{
				"color":"#ffffff",
				"background-color":"#123456!important",
				"border-color":"#123456!important",
				"box-shadow":"0 0 0 0.2rem rgba(50,100,150, 0.5)!important",
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
			".btn-outline-light:focus":{
				"box-shadow":"0 0 0 0.2rem rgba(50,100,150, 0.5)",
			},
			".btn-outline-light:active":{
				"color":"#234567!important",
				"background-color":"#345678!important",
				"border-color":"#345678!important",
				"box-shadow":"0 0 0 0.2rem rgba(50,100,150, 0.5)!important",
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
			},
			".floating-label-form-group-with-focus label":{
				"color":"#234567",
			}
		}
	};
	var counter=0;
	var nombre=["color1","color2","color3","color4","color5","color6","color7","color8","color9","color10"];
	var color1=["2c3e50","9cc3d5","0061f2","e30059","1f2d41","A13941","c2af89","f4a100","daa03d","fc766a"];
	var color2=["1abc9c","0063b2","6900c7","f76400","00cfd5","e7b633","343148","6900c7","616247","5b84b1"];
	var color3=[];
	var color4=["ffffff","ffffff","ffffff","ffffff","ffffff","ffffff","ffffff","ffffff","ffffff","ffffff"];
	var color5=["2c3e50","0063b2","6900c7","e30059","1f2d41","A13941","343148","6900c7","616247","5b84b1"];
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
		if(e.ctrlKey || e.shiftKey || e.altKey) {
			counter=(counter+nombre.length-1)%nombre.length;
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
