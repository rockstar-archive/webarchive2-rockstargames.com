<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
function whyDidntRockstarUseJavascriptForThis(){
    document.getElementById('screenHere').src = "images/screens/fullsize/vcs_" + getParameterByName("screen") + ".jpg"; 
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="gtavcs.css" type="text/css" rel="stylesheet" />
<link href="screens.css" type="text/css" rel="stylesheet" />
<title>Grand Theft Auto: Vice City Stories: Screens</title>

</head>

<body onLoad="whyDidntRockstarUseJavascriptForThis();">
<div id="container" class="container_screens">	
		<a href="screens.html"><img id="screenHere" src="" width="480" height="272" border="0"  /></a>
	
	<!-- FOOTER -->
	<div id="footer" class="footer_screens">
		<div id="return_to_screens"><a href="screens.html"><span>RETURN TO SCREENS</span></a></div>
	</div>
	
</div>
</body>
</html>
