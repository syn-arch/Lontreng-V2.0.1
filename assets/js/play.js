$(function(){

	$("#audio").hide()

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

	function get(parameterName) {
		var result = null,
		tmp = [];
		location.search
		.substr(1)
		.split("&")
		.forEach(function (item) {
			tmp = item.split("=");
			if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
		});
		return result;
	}

	function cek() {

		$.ajax({
			url : '../../proses/check.php',
			type: 'post',
			data: { 
				"jam" : $('#time').text(),
				"tipe" : get("tipe")
			},
			success : function (datas){
				if (datas != '') {
					var data = JSON.parse(datas)
					$("#audio").show()
					$("#audio").attr('src', '../../assets/audio/' + data.audio)
					document.getElementById('audio').play();
					$("#jadwal").html(data.nm_kategori)
					$("#next").html(data.next)
				}
			}
		});
	}

	$('.play').click(function(e){
		e.preventDefault()
		console.log('ngens')
		document.getElementById('audio').play();
	})


	setInterval(function(){
		time()
		cek()
	}, 1000)

})