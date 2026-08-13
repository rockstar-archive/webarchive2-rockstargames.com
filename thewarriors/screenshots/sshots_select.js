function getSshot(sshot) {
	location.href="screenshots"+sshot+".html";
}

function buildSelectList(sshot) {
	numScreens=30;
	document.write("		<select onChange='javascript:getSshot(this.options[this.selectedIndex].value)'>");
	for (x=1;x<=numScreens;x++) {
		if (x==sshot) document.write("		<option value='"+x+"' SELECTED>"+x+"</option>");
		else document.write("		<option value='"+x+"'>"+x+"</option>");
	}
	document.write("		</select>");
}
