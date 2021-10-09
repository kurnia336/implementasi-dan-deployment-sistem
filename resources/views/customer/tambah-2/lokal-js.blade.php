    <script src="{{ asset('plugins/validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('plugins/validation/jquery.validate-init.js')}}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script>
	$(document).ready(function() {
	    //event ketika pilihan dipilih
	    $('#val-provinsi').on('change', function() {
		$('#val-kota').load('/ajax/kota?id=' + $('#val-provinsi').val());
		$('#val-kecamatan').html("<option value=''>District</option>");
		$('#val-kelurahan').html("<option value=''>Subdistrict</option>");
	    });
	    
	    $('#val-kota').on('change', function() {
		$('#val-kecamatan').load('/ajax/kecamatan?id=' + $('#val-kota').val());
		$('#val-kelurahan').html("<option value=''>Subdistrict</option>");
	    });

	    $('#val-kecamatan').on('change', function() {
		$('#val-kelurahan').load('/ajax/kelurahan?id=' + $('#val-kecamatan').val());
	    });
	    $('#simpan-foto').on('click', function() {
		$('#foto').html("<img src='" + $('#foto-modal').attr('src') + "'>")
		$('#form-foto').val($('#foto-modal').attr('src'))
	    });
	});
	// seleksi elemen video
	var video = document.querySelector('#video-webcam');

	// minta izin user
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

	// jika user memberikan izin
	if (navigator.getUserMedia) {
	    // jalankan fungsi handleVideo, dan videoError jika izin ditolak
	    navigator.getUserMedia({ video: true }, handleVideo, videoError);
	}

	// fungsi ini akan dieksekusi jika izin telah diberikan
	function handleVideo(stream) {
	    video.srcObject = stream;
	}

	// fungsi ini akan dieksekusi kalau user menolak izin
	function videoError(e) {
	    // do something
	    alert("izinkan menggunakan webcam untuk demo!")
	}

	function takeSnapshot() {
	    // buat elemen img
	    var img = document.createElement('img');
	    var context;

	    // ambil ukuran video
	    var width = video.offsetWidth, height = video.offsetHeight;

	    // buat elemen canvas
	    canvas = document.createElement('canvas');
	    canvas.width = width;
	    canvas.height = height;

	    //ambil gambar dari video dan masukan ke dalam canvas
	    context = canvas.getContext('2d');
	    context.drawImage(video, 0, 0, width, height);

	    // render hasil dari canvas ke element img
	    img.src = canvas.toDataURL('image/png');
	    img.id = "foto-modal"
	    $("#canvas").html(img);
	}
    </script>
