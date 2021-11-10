<!DOCTYPE html>
<html>
<head>
<style>
@page {
  margin: 0cm;
}
</style>
</head>
<body>

    <?php $bool=false;
     $max=count($barang);
     $count=0; ?>
    <table>
	@for($i = 1;$i <= 8;$i++)
	<tr>
	    @for($j = 1;$j <= 5;$j++)
	    <td style="">
		@if($i == $baris && $j == $kolom)
		<?php $bool=true; ?>
		@endif
		@if($bool)
		<div style="text-align: center;width: 130px;height: 53px;margin-right: 15px;margin-bottom: 16px;"><?php echo DNS1D::getBarcodeSVG($barang[$count]->id_barang, 'C128',1); ?><br>
		{{ $barang[$count]->nama }}
		</div>
		<?php $count++; ?>
		@else
		<div style="width: 130px;height: 53px;margin-right: 15px;margin-bottom: 16px;"><br></div>
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