@extends('template.master')
@section('lokal-css')
    @include('barcode.cetak-jnt-108.lokal-css')
@endsection
@section('isi')
	   <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Barang</h4>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#printModal">Cetak Barcode</button>
				<!-- Modal -->
                                    <div class="modal fade" id="printModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
						<form method="post" action="/barcode/printpdf" target="_blank">
						@csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Cetak</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                        	    	<div class="form-group">
                                            		    <input type="text" class="form-control input-default" placeholder="Kolom" name="kolom" required>
                                        		</div>
                                        		<div class="form-group">
                                                	    <input type="text" class="form-control input-default" placeholder="Baris" name="baris" required>
                                        		</div>
						    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
						</form>
                                            </div>
                                        </div>
                                    </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration display nowrap" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                            </tr>
                                        </thead>
                                        <tbody>
					    @foreach ($barangs as $barang)
                                            <tr>
                                                <td>{{ $barang->id_barang }}</td>
                                                <td>{{ $barang->nama }}</td>
                                            </tr>
					    @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
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
    @include('barcode.cetak-jnt-108.lokal-js')
@endsection