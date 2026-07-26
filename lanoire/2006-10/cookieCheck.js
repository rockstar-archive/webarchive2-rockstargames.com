var _____WB$wombat$assign$function_____=function(name){return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name))||self[name];};if(!self.__WB_pmw){self.__WB_pmw=function(obj){this.__WB_source=obj;return this;}}{
let window = _____WB$wombat$assign$function_____("window");
let self = _____WB$wombat$assign$function_____("self");
let document = _____WB$wombat$assign$function_____("document");
let location = _____WB$wombat$assign$function_____("location");
let top = _____WB$wombat$assign$function_____("top");
let parent = _____WB$wombat$assign$function_____("parent");
let frames = _____WB$wombat$assign$function_____("frames");
let opens = _____WB$wombat$assign$function_____("opens");
function cookieChck() {

  var allcookies = document.cookie;
  var detectCookie = allcookies.indexOf("rockstar_lan_check=");

	if (detectCookie != -1) {

		var start = detectCookie + 19; //start of cookie value
		var end = allcookies.indexOf(";",start); //end of cookie value

		if (end==-1) end = allcookies.length;

		var userAge = allcookies.substring(start,end); //extract the birthdate
		userAge = unescape(userAge); //decode value

		var age = new Date(userAge);
		//check if over 17
		if (over17(age)){
			//location.replace("warriors.html");
		}
		else	
		{
			location.replace("noentry.html");
		}
	}
	else { location.replace("./index.html"); }
}

function over17(age) {
	var ageDate = new Date();
	var ageYear = ageDate.getFullYear()-17;
	ageDate.setFullYear(ageYear);

	if (age <= ageDate) {return true;}
	else {return false;}
}

cookieChck();

}