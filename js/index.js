<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script>
var lang=navigator.language || navigator.systemLanguage;
lang=lang.toLowerCase();
lang=lang.substr(0,2);
document.cookie.split(';').forEach(function(val,key) {
	val=val.trim().split('=');
	if(val[0]='lang') lang=val[1];
});
if(lang=='ca') window.location.href='index.ca.html';
else if(lang=='es') window.location.href='index.es.html';
else if(lang=='en') window.location.href='index.en.html';
else window.location.href='index.ca.html';
</script>
</body>
</html>
