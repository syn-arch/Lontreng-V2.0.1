function time() {
	var d = new Date();
	var s = d.getSeconds();
	var m = d.getMinutes();
	var h = d.getHours();
	var ss = (s < 10) ? "0" : "";
	var mm = (m < 10) ? "0" : "";
	var hh = (h < 10) ? "0" : "";
	var now = hh + h + ":" + mm + m + ":" + ss + s;

	document.getElementById('time').textContent = now;
}

function cek() {

	var time = document.getElementById('time').textContent;

	$.ajax({
		url : '../../proses/check.php',
		type: 'post',
		data: { jam : time },
		success : function (data){
			if (data != '') {
				$("#response").html(data)
			}
		}
	});

}


setInterval(function(){
	time()
	cek()
}, 1000)
