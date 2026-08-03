#!/bin/bash

for i in catalan spanish english; do
    gs -sDEVICE=pdfwrite -dPDFSETTINGS=/printer -dNOPAUSE -dBATCH -dSAFER -sOutputFile=cv_josep_sanz_${i}.pdf.2 cv_josep_sanz_${i}.pdf
    gs -sDEVICE=pdfwrite -dPDFSETTINGS=/ebook -dNOPAUSE -dBATCH -dSAFER -sOutputFile=cv_josep_sanz_${i}_full.pdf cv_josep_sanz_${i}.pdf.2
    gs -sDEVICE=pdfwrite -dPDFSETTINGS=/ebook -dNOPAUSE -dBATCH -dSAFER -dFirstPage=5 -dLastPage=8 -sOutputFile=cv_josep_sanz_${i}_preview.pdf cv_josep_sanz_${i}.pdf.2
    rm cv_josep_sanz_${i}.pdf
    rm cv_josep_sanz_${i}.pdf.2
done
