function isset(varname)  {
  if(typeof( window[ varname ] ) != "undefined") return true;
  else return false;
}

function writeVCS(jumptotrailer,jumptosection) {
var wr = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%" id="gtavcs" align="top">';
wr+='<param name="scale" value="noscale" />';
if (jumptotrailer=="true") {

	wr+='<param name="movie" value="gtavcs.swf?trailer='+jumptotrailer+'" />';
}
else if (jumptosection!=false) {

	wr+='<param name="movie" value="gtavcs.swf?section='+jumptosection+'" />';
}
else {

	wr+='<param name="movie" value="gtavcs.swf" />';
}
wr+='<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />';
if (jumptotrailer=="true") wr+='<embed src="gtavcs.swf?trailer='+jumptotrailer+'" quality="high" scale="noscale" bgcolor="#ffffff" width="100%" height="100%" name="gtavcs" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
else if (jumptosection!=false) wr+='<embed src="gtavcs.swf?section='+jumptosection+'" quality="high" scale="noscale" bgcolor="#ffffff" width="100%" height="100%" name="gtavcs" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
else wr+='<embed src="gtavcs.swf" quality="high" scale="noscale" bgcolor="#ffffff" width="100%" height="100%" name="gtavcs" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
wr+='</object>';

document.write(wr);

}