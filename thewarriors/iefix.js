// effin flash fix ie stinks like ish
oTag='';
oTag='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="900" height="700" id="home" align="middle">';
oTag+='<param name="allowScriptAccess" value="sameDomain" />';
oTag+='<param name="movie" value="home.swf" />';
oTag+='<param name="quality" value="high" />';
oTag+='<param name="bgcolor" value="#000000" />';
oTag+='<embed src="home.swf" quality="high" bgcolor="#000000" width="900" height="700" name="home" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
oTag+='</object>';

document.write(oTag);