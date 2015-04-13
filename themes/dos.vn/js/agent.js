function showUser(str) {
	if (str == "") {
		document.getElementById("loadContent").innerHTML = "";
		return;
	}
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("loadContent").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "/site/loadagents/id/" + str, true);
	xmlhttp.send();
}
function changeparent(userid) {
	window.opener.document.getElementById("Username_agent_sale").value = userid;
	self.close();
}