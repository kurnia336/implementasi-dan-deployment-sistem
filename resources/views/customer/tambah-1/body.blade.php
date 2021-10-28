@extends('template.master')
@section('lokal-css')
    @include('customer.tambah-1.lokal-css')
@endsection
@section('isi')
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/customer/tambah1" method="post" autocomplete="off">
					@csrf
                                        <div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="name" placeholder="Name" required value="{{ old('name') }}">
                                            </div>
					    @error('name')
						<div class="offset-lg-1 col-lg-9">
						    <p class="text-danger">
						    	{{ $message }}
						    </p>
						</div>
					    @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="alamat" name="address" placeholder="Address" required value="{{ old('address') }}">
                                            </div>
					    @error('address')
						<div class="offset-lg-1 col-lg-9">
						    <p class="text-danger">
						    	{{ $message }}
						    </p>
						</div>
					    @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <select class="form-control" id="val-provinsi" name="province">
                                                    <option value="">Province</option>
						    @foreach ($provinsis as $provinsi)
                                                    <option value="{{ $provinsi->prov_id}}">{{ $provinsi->prov_name}}</option>
						    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <select class="form-control" id="val-kota" name="city">
                                                    <option value="">City</option>
                                                </select>
                                            </div>
                                        </div>
					<div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <select class="form-control" id="val-kecamatan" name="district">
                                                    <option value="">District</option>
                                                </select>
                                            </div>
                                        </div>
					<div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <select class="form-control" id="val-kelurahan" name="subdistrict">
                                                    <option value="">Subdistrict</option>
                                                </select>
                                            </div>
                                        </div>
					<div class="form-group" id="formulir">
					    <input type='hidden' id="form-foto" name='photo'>
					    <div class="row">
                                            	<div class="offset-lg-1 col">
						    <div class="border" style="width: 225px; height: 125px;" id="foto"></div>
                                            	</div>
					    </div>
					    <div class="row">
					    	@error('photo')
						    <div class="offset-lg-1 col-lg-9">
						    	<p class="text-danger">
						    	    {{ $message }}
						    	</p>
						    </div>
					    	@enderror
					    </div>
					    <div class="row">
					    	<div class="col-1 offset-5">
						    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Ambil Foto</button>
                                            	</div>
					    	<div class="col-1 offset-2">
						    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                            	</div>
					    </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->

				    <!-- Modal -->
                                    <div class="modal fade" id="Modal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal ambil Foto</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="modal-body">
						    <div class="row">
							<div class="col-6">
						    	    <video autoplay="true" id="video-webcam" style="width: 225px; height: 125px;">
								Browsermu tidak mendukung, upgrade!
						    	    </video>
							</div>
							<div class="col-6">
						    	    <div id="canvas"></div>
							</div>
						    </div>
						    <div class="row">
							<div class="col-md-1 offset-md-7">
						    	<button type="button" class="btn btn-primary" onclick="takeSnapshot()">Ambil Foto</button>
						    </div>
						</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" id="simpan-foto" data-dismiss="modal">Simpan Foto</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
@endsection
@section('lokal-js')
    @include('customer.tambah-1.lokal-js')
@endsection