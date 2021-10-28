@extends('template.master')
@section('lokal-css')
    @include('geolocation.list-toko.lokal-css')
@endsection
@section('isi')
	   <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
			@if(session()->has('success'))
			    <div class="alert alert-success" role="alert">
  			    	{{ session('success') }}
			    </div>
		        @endif
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Toko</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Barcode</th>
                                                <th>Nama Toko</th>
                                                <th>Latitude</th>
						<th>Longitude</th>
						<th>Accuracy</th>
						<th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
					    @foreach ($tokos as $toko)
                                            <tr>
                                                <td><?php echo DNS1D::getBarcodeHTML($toko->barcode, 'C128'); ?></td>
                                                <td>{{ $toko->nama_toko }}</td>
						<td>{{ $toko->latitude }}</td>
						<td>{{ $toko->longitude }}</td>
						<td>{{ $toko->accuracy }}</td>
						<td><a class="btn btn-primary" href="/geolocation/listtoko/printbarcode/{{ $toko->barcode }}" role="button">Cetak Barcode</a></td>
                                            </tr>
					    @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Barcode</th>
                                                <th>Nama Toko</th>
                                                <th>Latitude</th>
						<th>Longitude</th>
						<th>Accuracy</th>
						<th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('lokal-js')
    @include('geolocation.list-toko.lokal-js')
@endsection