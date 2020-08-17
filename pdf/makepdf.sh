#!/bin/bash

#~ pdfseparate -f 4 -l 6 cv_josep_sanz_catalan.pdf cv_josep_sanz_catalan_preview_%d.pdf
#~ pdfunite cv_josep_sanz_catalan_preview_*.pdf cv_josep_sanz_catalan_preview.pdf
#~ rm -f cv_josep_sanz_catalan_preview_*.pdf

#~ pdfseparate -f 4 -l 6 cv_josep_sanz_spanish.pdf cv_josep_sanz_spanish_preview_%d.pdf
#~ pdfunite cv_josep_sanz_spanish_preview_*.pdf cv_josep_sanz_spanish_preview.pdf
#~ rm -f cv_josep_sanz_spanish_preview_*.pdf

#~ pdfseparate -f 4 -l 6 cv_josep_sanz_english.pdf cv_josep_sanz_english_preview_%d.pdf
#~ pdfunite cv_josep_sanz_english_preview_*.pdf cv_josep_sanz_english_preview.pdf
#~ rm -f cv_josep_sanz_english_preview_*.pdf

for i in catalan spanish english; do
	gs -sDEVICE=pdfwrite -dPDFSETTINGS=/ebook -dPrinted=false -dNOPAUSE -dBATCH -dSAFER -sOutputFile=cv_josep_sanz_${i}_full.pdf cv_josep_sanz_${i}.pdf
	gs -sDEVICE=pdfwrite -dPDFSETTINGS=/ebook -dPrinted=false -dNOPAUSE -dBATCH -dSAFER -dFirstPage=5 -dLastPage=7 -sOutputFile=cv_josep_sanz_${i}_preview.pdf cv_josep_sanz_${i}.pdf
	rm cv_josep_sanz_${i}.pdf
done

