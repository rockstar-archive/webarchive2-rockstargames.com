function cookieChck() {

  var allcookies = document.cookie;
  var detectCookie = allcookies.indexOf("rockstar_age_check=");

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
	else { location.replace("index.html"); }
}

function over17(age) {
	var ageDate = new Date();
	var ageYear = ageDate.getFullYear()-17;
	ageDate.setFullYear(ageYear);
	if (age <= ageDate) {return true;}
	else {return false;}
}

cookieChck();