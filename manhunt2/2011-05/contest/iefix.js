function evilIE(){
	var d = new Date();
	document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="800" height="550" id="splash" align="middle">');
	document.write('<param name="allowScriptAccess" value="always" /><param name="menu" value="false" />');
	document.write('<param name="movie" value="top.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" />	<embed src="top.swf" quality="high" bgcolor="#000000" menu="false" width="800" height="550" name="splash" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
	document.write('</object>');
}