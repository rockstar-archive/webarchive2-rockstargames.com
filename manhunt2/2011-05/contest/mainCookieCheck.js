function cookieChck() {

  var allcookies = document.cookie;
  var detectCookie = allcookies.indexOf("rockstar_mh2_check=");
	if (detectCookie != -1) {
		var start = detectCookie + 19; //start of cookie value
		var end = allcookies.indexOf(";",start); //end of cookie value

		if (end==-1) end = allcookies.length;

		var userAge = allcookies.substring(start,end); //extract the birthdate
		userAge = unescape(userAge); //decode value
		
		var detectVisit = allcookies.indexOf("rockstar_mh2_visit=");
		var userVisit = allcookies.substring(detectVisit+19,100); //extract user visit
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
	else { location.replace("../index.html?contest=yes"); }
}

var expireDate = new Date();
var year = expireDate.getYear(); 
year = (year < 1900) ? year + 1900 : year;
expireDate.setYear(year + 3);

//creates a cookie with the values passed in
function my_setCookie(nam, val, expire, domain, path) {
	var cookie_str = "";
	cookie_str += nam + "=" + escape(val); 
	//cookie_str += "; domain=" + domain;//deleted because the cookie wasn't 
	//cookie_str += "; path=" + path;    //getting detected and they're not needed
	cookie_str += "; expires=" + expireDate.toGMTString();
	document.cookie = cookie_str;
};

function setCookie() {    
 //if the date is valid, create a cookie
	my_setCookie("rockstar_mh2_visit", "0" , expireDate, ".rockstargames.com", "/");
} 

function over17(age) {
	var ageDate = new Date();
	var ageYear = ageDate.getFullYear()-17;
	ageDate.setFullYear(ageYear);

	if (age <= ageDate) {return true;}
	else {return false;}
}

if(params && (params == "trailer" || params == "trailer2")){
	var allcookies = document.cookie;
	var detectCookie = allcookies.indexOf("rockstar_mh2_check=");
	if (detectCookie == -1) {
		var user_age = new Date();

		user_age.setMonth(1);
		user_age.setDate(1);
		user_age.setFullYear(1990);
	
		var expireDate = new Date();
		var year = expireDate.getYear(); 
		year = (year < 1900) ? year + 1900 : year;
		expireDate.setYear(year + 3);
	
		my_setCookie("rockstar_mh2_check", user_age.toUTCString() , expireDate, ".rockstargames.com", "/");
		my_setCookie("rockstar_mh2_visit", "0" , expireDate, ".rockstargames.com", "/");
	}
}

cookieChck();
