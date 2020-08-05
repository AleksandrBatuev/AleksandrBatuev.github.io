let page_two = function () {
	$(document).ready();
	$.ajax({
		url: "page_two.html",
		dataType: "html",
			success: function(response) {
			document.getElementById("div_two").innerHTML = response;
		}
	});
};
let page_one = function () {
	$(document).ready();
	$.ajax({
		url: "page_one.html",
		dataType: "html",
			success: function(response) {
			document.getElementById("div_two").innerHTML = "";
		}
	});
};
