
SHELL := /bin/bash

all: clean
	time -p php php/program.php

clean:
	rm -f index.*.html
	rm -f css/all.min.css
	rm -f js/all.min.js
	rm -f gralla/index.html
