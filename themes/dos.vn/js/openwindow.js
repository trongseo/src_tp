function openwindow(w, h) {
	var left = (screen.width / 2) - (w / 2);
	var top = (screen.height / 2) - (h / 2);
	window.open('/site/getagents', '_blank', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left)
}