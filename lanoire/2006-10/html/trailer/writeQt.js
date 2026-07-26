var _____WB$wombat$assign$function_____=function(name){return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name))||self[name];};if(!self.__WB_pmw){self.__WB_pmw=function(obj){this.__WB_source=obj;return this;}}{
let window = _____WB$wombat$assign$function_____("window");
let self = _____WB$wombat$assign$function_____("self");
let document = _____WB$wombat$assign$function_____("document");
let location = _____WB$wombat$assign$function_____("location");
let top = _____WB$wombat$assign$function_____("top");
let parent = _____WB$wombat$assign$function_____("parent");
let frames = _____WB$wombat$assign$function_____("frames");
let opens = _____WB$wombat$assign$function_____("opens");
function writeQt(src, width, height) {

	var qt = '<OBJECT CLASSID="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" WIDTH="'+width+'" HEIGHT="'+height+'" CODEBASE="http://www.apple.com/qtactivex/qtplugin.cab">';
	qt += '<PARAM name="SRC" VALUE="'+src+'">';
	qt += '<PARAM name="AUTOPLAY" VALUE="true">';
  	qt += '<EMBED SRC="'+src+'" WIDTH="'+width+'" HEIGHT="'+height+'" AUTOPLAY="true" PLUGINSPAGE="http://www.apple.com/quicktime/download/">';
	qt += '</EMBED></OBJECT>';

	document.write(qt);
}
}