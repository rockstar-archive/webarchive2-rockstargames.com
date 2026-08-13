function writeQt(src, width, height) {

	var qt = '<OBJECT CLASSID="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" WIDTH="'+width+'" HEIGHT="'+height+'" CODEBASE="http://www.apple.com/qtactivex/qtplugin.cab">';
	qt += '<PARAM name="SRC" VALUE="'+src+'">';
	qt += '<PARAM name="AUTOPLAY" VALUE="true">';
  	qt += '<EMBED SRC="'+src+'" WIDTH="'+width+'" HEIGHT="'+height+'" AUTOPLAY="true" PLUGINSPAGE="http://www.apple.com/quicktime/download/">';
	qt += '</EMBED></OBJECT>';

	document.write(qt);
}