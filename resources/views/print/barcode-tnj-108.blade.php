<!DOCTYPE html>
<html>
<body>
    <?php $bool=false;
     $max=count($barang);
     $count=0; ?>
    <table>
	@for($i = 1;$i <= 8;$i++)
	<tr>
	    @for($j = 1;$j <= 5;$j++)
	    <td style="padding-right: 43px; padding-bottom: 15px; text-align: center;">
		@if($i == $baris && $j == $kolom)
		<?php $bool=true; ?>
		@endif
		@if($bool)
		<?php echo DNS1D::getBarcodeSVG($barang[$count]->id_barang, 'UPCE'); ?>
		{{ $barang[$count]->nama }}
		<?php $count++; ?>
		@else
		<div><br></div>
		@endif
	    </td>
	    @if($count == $max)
	    @break
	    @endif
	    @endfor
	</tr>
	@if($count == $max)
	@break
	@endif
	@endfor
    </table>

    <script>
	window.print();
    </script>
</body>
</html>

