window.onload = function() {

	if(location.href.search("/product/") !== -1 && location.href.search("/?start_customizing=yes") === -1) {
		window.location = (location.href + "?start_customizing=yes");
	}
}
