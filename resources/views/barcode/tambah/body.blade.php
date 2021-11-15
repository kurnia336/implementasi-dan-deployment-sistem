@extends('template.master')
@section('lokal-css')
    @include('barcode.tambah.lokal-css')
@endsection
@section('isi')
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/barcode/tambah" method="post" autocomplete="off">
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
                                            <div class="col-lg-8 ml-auto">
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
@endsection
@section('lokal-js')
    @include('barcode.tambah.lokal-js')
@endsection