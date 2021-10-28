    <script src="{{ asset('plugins/validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('plugins/validation/jquery.validate-init.js')}}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script>
	$(document).ready(function() {
	    //event ketika pilihan dipilih
	    $('#geoloc').on('click', function() {
		if (navigator.geolocation) {
		   navigator.geolocation.getCurrentPosition(showPosition);
  		} else { 
     		    console.log("Geolocation is not supported by this browser.");
  		}
	    });
	    function showPosition(position) {
  		$('#latitude').val(position.coords.latitude);
  		$('#longitude').val(position.coords.longitude);
		$('#accuracy').val(position.coords.accuracy);
	    }
	});
    </script>