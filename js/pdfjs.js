
"use strict";

var pdfViewer=null;
var pdfColor=null;

$(function() {
	if(!$("#viewerContainer").length) return;

	var width=$(window).width();
	$(window).on("resize",function() {
		if(width==$(window).width()) return;
		width=$(window).width();
		pdfViewer.currentScaleValue="page-width";
	});

	$("body").on("pdfjs",function() {
		var color=$("#viewerContainer").attr("data-color");
		pdfColor=[parseInt(color.substr(0,2),16),parseInt(color.substr(2,2),16),parseInt(color.substr(4,2),16)];
		if(pdfViewer==null) {
			pdfjsLib.GlobalWorkerOptions.workerSrc="pdfjs/pdf.worker.min.js";
			var file=$("#viewerContainer").attr("data-file");
			pdfjsLib.getDocument(file).promise.then(function(pdfDocument) {
				var container=document.getElementById("viewerContainer");
				pdfViewer=new pdfjsViewer.PDFViewer({
					container:container
				});
				var fn1=function() {
					pdfViewer.currentScaleValue="page-width";
				};
				var fn2=function() {
					$("a",container).each(function() {
						$(this).attr("target","_blank");
					});
				};
				document.addEventListener("pagesinit",fn1);
				document.addEventListener("textlayerrendered",fn2);
				pdfViewer.removePageBorders=true;
				pdfViewer.setDocument(pdfDocument);
			},function(message,exception) {
				console.log(message);
				console.log(exception);
			});
		} else {
			pdfViewer.currentScaleValue=pdfViewer.currentScale*2; // TRUC PER FORZAR EL REDIBUIXAT DEL PDF
			pdfViewer.currentScaleValue="page-width";
		}
	}).trigger("pdfjs");
});
