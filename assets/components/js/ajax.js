let page_two = function () {
	$(document).ready();
	let data = {action: 'get_resources'};
	$.post('/ajax', data, function(data) {
		console.log(data);
		document.getElementById("div_two").innerHTML = data;
	});
};
let page_one = function () {
	$(document).ready();
	let data = {action: 'get_resources'};
	$.post('/ajax', data, function(data) {
		document.getElementById("div_two").innerHTML = "";
	});
};
