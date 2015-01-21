var menuOn = false;

document.getElementById('menu').onclick = function () {
	if (!menuOn) {
		$(document.getElementById('mobile-navigation')).show();
		menuOn = true;
	} else {
		$(document.getElementById('mobile-navigation')).hide();
		menuOn = false;
	}
}
