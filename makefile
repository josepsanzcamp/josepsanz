
all:
	rm -f index.*.html css/all.min.css js/all.min.js
	time -p php php/build.php

