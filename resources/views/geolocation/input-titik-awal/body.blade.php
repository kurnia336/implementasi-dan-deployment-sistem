@extends('template.master')
@section('lokal-css')
    @include('geolocation.input-titik-awal.lokal-css')
@endsection
@section('isi')
	   <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/geolocation/inputtitikawal" method="post">
					@csrf
                                        <div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <input type="text" class="form-control @error('store_name') is-invalid @enderror" id="nama_toko" name="store_name" placeholder="Store Name" autocomplete required value="{{ old('store_name') }}">
                                            </div>
					    @error('store_name')
						<div class="offset-lg-1 col-lg-9">
						    <p class="text-danger">
						    	{{ $message }}
						    </p>
						</div>
					    @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude" name="latitude" placeholder="Latitude" autocomplete required value="{{ old('latitude') }}">
                                            </div>
					    @error('latitude')
						<div class="offset-lg-1 col-lg-9">
						    <p class="text-danger">
						    	{{ $message }}
						    </p>
						</div>
					    @enderror
                                        </div>
					<div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude" name="longitude" placeholder="Longitude" autocomplete required value="{{ old('longitude') }}">
                                            </div>
					    @error('longitude')
						<div class="offset-lg-1 col-lg-9">
						    <p class="text-danger">
						    	{{ $message }}
						    </p>
						</div>
					    @enderror
                                        </div>
					<div class="form-group row">
                                            <div class="offset-lg-1 col-lg-9">
                                                <input type="text" class="form-control @error('accuracy') is-invalid @enderror" id="accuracy" name="accuracy" placeholder="Accuracy" autocomplete required value="{{ old('accuracy') }}">
                                            </div>
					    @error('accuracy')
						<div class="offset-lg-1 col-lg-9">
						    <p class="text-danger">
						    	{{ $message }}
						    </p>
						</div>
					    @enderror
                                        </div>
					<div class="form-group row">
                                            <div class="col-lg-1 offset-md-7">
                                                <button type="button" class="btn btn-primary" id="geoloc">Geoloc</button>
                                            </div>
					    <div class="col-lg-1">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
@section('lokal-js')
    @include('geolocation.input-titik-awal.lokal-js')
@endsection