@extends('template.master')
@section('lokal-css')
    @include('customer.data.lokal-css')
@endsection
@section('isi')
	   <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
		    @if(session()->has('success'))
			<div class="alert alert-success" role="alert">
  			    {{ session('succcess') }}
			</div>
		    @endif
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Customer</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
					    @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->nama }}</td>
                                                <td>{{ $customer->alamat }}</td>
						@if ($customer->foto == null)
						    <td><img src="{{ $customer->filepath }}"></td>
						@else
						    <td><img src="{{ $customer->foto }}"></td>
						@endif
                                            </tr>
					    @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
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
    @include('customer.data.lokal-js')
@endsection