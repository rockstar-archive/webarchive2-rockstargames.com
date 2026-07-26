function cookieChck() {

  var allcookies = document.cookie;
  var detectCookie = allcookies.indexOf("contest__lcs_check=");

	if (detectCookie != -1) {
		//location.replace("http://www.rockstargames.com/libertycitystories/contest/rules.html");
		location.replace("rules.html");
	} 
}

cookieChck();
