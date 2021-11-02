  <script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
  <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
  <script type="text/javascript" src="https://unpkg.com/@zxing/library@0.18.3-dev.7656630/umd/index.js"></script>
  <script type="text/javascript">
    window.addEventListener('load', function () {
      let selectedDeviceId;
      const codeReader = new ZXing.BrowserMultiFormatReader()
      console.log('ZXing code reader initialized')
      codeReader.listVideoInputDevices()
        .then((videoInputDevices) => {
          const sourceSelect = document.getElementById('sourceSelect')
          selectedDeviceId = videoInputDevices[0].deviceId
          if (videoInputDevices.length >= 1) {
            videoInputDevices.forEach((element) => {
              const sourceOption = document.createElement('option')
              sourceOption.text = element.label
              sourceOption.value = element.deviceId
              sourceSelect.appendChild(sourceOption)
            })

            sourceSelect.onchange = () => {
              selectedDeviceId = sourceSelect.value;
            };

            const sourceSelectPanel = document.getElementById('sourceSelectPanel')
            sourceSelectPanel.style.display = 'block'
          }

          document.getElementById('startButton').addEventListener('click', () => {
            codeReader.decodeFromVideoDevice(selectedDeviceId, 'video', (result, err) => {
              if (result) {
                console.log(result)
		$('#informasi-toko').load('/ajax/toko?id=' + result.text);
		if (navigator.geolocation) {
		   navigator.geolocation.getCurrentPosition(showPosition);
  		} else { 
     		    console.log("Geolocation is not supported by this browser.");
  		}
		function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
		    var R = 6371; // Radius of the earth in km
		    var dLat = deg2rad(lat2-lat1); //deg2rad below
		    var dLon = deg2rad(lon2-lon1);
		    var a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon/2) * Math.sin(dLon/2);
		    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
		    var d = R * c; // Distance in km
		    return d;
		}
		function deg2rad(deg) {
		    return deg * (Math.PI/180);
		}
	    	function showPosition(position) {
		    var rataacc = (Number($('#accuracy-toko').html()) + Number(position.coords.accuracy)) / 2;
		    var jarak = getDistanceFromLatLonInKm(Number($('#latitude-toko').html()), Number($('#longitude-toko').html()), Number(position.coords.latitude), Number(position.coords.longitude));
		    var status;
		    if(jarak <= rataacc){
		    	status = true;
		    } else {
			status = false;
		    }
		    $('#informasi-titik-kunjungan').load('/ajax/kunjungan?status=' + status + '&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude + '&accuracy=' +position.coords.accuracy);
                }
	      }
              if (err && !(err instanceof ZXing.NotFoundException)) {
                console.error(err)
                document.getElementById('result').textContent = err;
              }
            })
            console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
          })

          document.getElementById('resetButton').addEventListener('click', () => {
            codeReader.reset()
            document.getElementById('result').textContent = '';
            console.log('Reset.')
          })

        })
        .catch((err) => {
          console.error(err)
        })
    })
  </script>