<html>
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
</script>
</head>
<body onLoad="document.getElementById('screenHere').src = getParameterByName('img'); ">
<img id="screenHere" src="screens.php"/>
</body>
</html>