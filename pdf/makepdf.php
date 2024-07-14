#!/usr/bin/php
<?php
$files=glob("*.t2t");
//~ $files=array("cv_josep_sanz_spanish.t2t");
foreach($files as $file) {
    // GENERATE PDF
    $file=str_replace(".t2t","",$file);
    exec("txt2tags --toc -t tex -i ${file}.t2t -o ${file}.tex");
    $buffer=file_get_contents("${file}.tex");
    $buffer=explode("\n",$buffer);
    $buffer0=array_slice($buffer,0,5);
    $buffer0=str_replace("\\documentclass{article}","\\documentclass[a4paper]{article}",$buffer0);
    $buffer0=str_replace("\\usepackage[urlcolor=blue,colorlinks=true]{hyperref}","\\usepackage[urlcolor=myblue,colorlinks=true,linkcolor=myblue]{hyperref}",$buffer0);
    $babel="english";
    if(strpos($file,"spanish")!==false) $babel="spanish";
    if(strpos($file,"english")!==false) $babel="english";
    if(strpos($file,"catalan")!==false) $babel="catalan";
    $buffer1=array(
        "\\usepackage[sfdefault]{atkinson}",
        "\\usepackage[T1]{fontenc}",
        "\\usepackage[$babel]{babel}",
        "\\usepackage{ucs}",
        "\\usepackage[utf8x]{inputenc}",
        "\\usepackage{eurosym}",
        "\\usepackage{sans}",
        "\\usepackage{fullpage}",
        "\\usepackage{listings}",
        "\\usepackage{xcolor}",
        "\\usepackage{sectsty}",
        "\\allsectionsfont{\\color{myblue}}",
        "\\definecolor{myblue}{RGB}{39,128,227}",
        "\\usepackage{float}",
        "\\lstset{language=xml, frame=single, frameround=tttt, xleftmargin=10mm, framexleftmargin=10mm, numbers=left, basicstyle=\\scriptsize\\ttfamily\\color{myblue}, breaklines=true, aboveskip=\\bigskipamount, belowskip=\\bigskipamount, numberstyle=\\scriptsize\\ttfamily\\color{myblue}}",
        "\\newcommand\\mynewpage{\\clearpage\\ifodd\\value{page}\\else\\hbox{}\\newpage\\fi}",
        "\\setlength{\\parindent}{5mm}",
        "\\setlength{\\parskip}{3mm}",
        "\\plparsep 2.5mm",
        "\\def\\htmladdnormallink#1#2{\\href{#2}{#1}}",
        "\\usepackage{titlesec}",
        "\\usepackage{xhfill}",
        "\\newcommand\\ruleafter[1]{#1~\\xrfill[.7ex]{1pt}}",
        "\\titleformat{\\section}{\\rmfamily\\normalfont\\Large\\bfseries\\color{myblue}}{\\thesection.}{.7ex}{\\ruleafter}",
        "\\titleformat{\\subsection}{\\rmfamily\\normalfont\\large\\bfseries\\color{myblue}}{\\thesubsection.}{.7ex}{\\ruleafter}",
        "\\titleformat{\\subsubsection}{\\rmfamily\\normalfont\\normalsize\\bfseries\\color{myblue}}{\\thesubsubsection.}{.7ex}{\\ruleafter}",
        ""
    );
    $buffer2=array_slice($buffer,5);
    $buffer2=str_replace("\\begin{verbatim}","\\begin{lstlisting}",$buffer2);
    $buffer2=str_replace("\\end{verbatim}","\\end{lstlisting}",$buffer2);
    $buffer2=str_replace("\t",str_repeat(" ",4),$buffer2);
    $buffer2=str_replace("\\item","\\item[\\color{myblue}\$\\bullet\$]",$buffer2);
    $buffer2=str_replace("[newpage]","\\newpage",$buffer2);
    $buffer2=str_replace("[newpage2]","\\mynewpage",$buffer2);
    $buffer2=str_replace("\\maketitle","\\maketitle\n\\thispagestyle{empty}\n\\setcounter{page}{0}",$buffer2);
    foreach($buffer2 as $key=>$val) if(strpos($val,"\\author{")!==false) $buffer2[$key]=str_replace("|","\\\\\n",$val);
    $buffer2=str_replace("[beginleft]","\\noindent\\begin{minipage}{0.80\\textwidth}",$buffer2);
    $buffer2=str_replace("[endleft]","\\end{minipage}",$buffer2);
    $buffer2=str_replace("[beginright]","\\begin{minipage}{0.20\\textwidth}",$buffer2);
    $buffer2=str_replace("[endright]","\\end{minipage}",$buffer2);
    $buffer=array_merge($buffer0,$buffer1,$buffer2);
    $buffer=implode("\n",$buffer);
    // FIX FOR THE IMAGE POSITION
    $pos=strpos($buffer,"\\includegraphics{");
    while($pos!==false) {
        $pos2=strpos($buffer,"}",$pos);
        $data=substr($buffer,$pos+17,$pos2-$pos-17);
        $latex="\\includegraphics[width=\\textwidth]{".$data."}";
        if(isset($removeimages) && $removeimages) $latex="";
        $buffer=substr_replace($buffer,$latex,$pos,$pos2-$pos+1);
        $pos=strpos($buffer,"\\includegraphics{",$pos);
    }
    // CONTINUE
    file_put_contents("${file}.tex",$buffer);
    for($i=0;$i<3;$i++) exec("pdflatex ${file}.tex");
    $exts=array("aux","log","out","toc","tex");
    foreach($exts as $ext) unlink("${file}.${ext}");
    // GENERATE HTML
    //~ exec("txt2tags --no-headers -t xhtml -i ${file}.t2t -o ${file}.html");
    // GENERATE MARKDOWN
    //~ exec("pandoc -s -f html -t markdown_strict -o ${file}.md ${file}.html");
    // GENATE IMAGES
    //~ exec("pdftoppm -r 150 -png ${file}.pdf ${file}");
}
