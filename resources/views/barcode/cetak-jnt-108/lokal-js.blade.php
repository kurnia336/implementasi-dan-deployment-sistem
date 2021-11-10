    <script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script>
    var count = 0;
	$(document).ready(function() {
	    $('#select_all').click(function(){
		count = count + 1;
		if(count % 2 != 0){
		    $('.select').prop('checked',true);
		}else{
		    $('.select').prop('checked',false);
		}
	    });
	    $('#form').submit(function(e){
		//e.preventDefault();
		var checkbox = $('.select:checked');
		var val;
		for(var i = 0; i < checkbox.length ; i++ ){
		    if(i == 0){
			val = checkbox[i].value;
		    }else{
			val = val + "," + checkbox[i].value;
		    }
		}
		$('#barang').val(val);
	    });
	});
    </script>