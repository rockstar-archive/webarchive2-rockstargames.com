function dasFlashWriter(){ 
	
	var userVisit = 0;
	//skip intro param
	//alert("userVisit dix "+userVisit);
	if(userVisit=="1"){addthisparam="?skipIntro=0";}
	else{addthisparam="?skipIntro=0";
	}
	
	//alert(addthisparam);
	var oeTags = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'
	    + 'width="100%" height="100%"'
	    + 'codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">'
	    + '<param name="movie" value="main.swf'+addthisparam+'" /><param name="menu" value="false" /><param name="quality" value="high" /><param name="noscale" value="noscale" /><param name="bgcolor" value="#000000" />'
	    + '<embed src="main.swf'+addthisparam+'" menu="false" quality="high" scale="noscale" bgcolor="#000000" '
	    + 'width="100%" height="100%" name="main" align="middle"'
	    + 'play="true"'
	    + 'loop="false"'
	    + 'quality="high"'
	    + 'allowScriptAccess="sameDomain"'
	    + 'type="application/x-shockwave-flash"'
	    + 'pluginspage="http://www.macromedia.com/go/getflashplayer">'
	    + '<\/embed>'
	    + '<\/object>';
	   document.write(oeTags);
}
/*
AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '100%',
			'height', '100%',
			'src', 'main',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'noscale',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'main',
			'bgcolor', '#000000',
			'name', 'main',
			'menu', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'main',
			'salign', ''
			); //end AC code
			
			*/