@extends('template.master')
@section('lokal-css')
    @include('excel.lokal-css')
@endsection
@section('isi')
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
		    @if(session()->has('success'))
			<div class="alert alert-success" role="alert">
  			    {{ session('success') }}
			</div>
		    @endif
		    @if(session()->has('failures'))
			<table class="table table-danger">
			    <tr>
				<th>Row</th>
				<th>Atrribute</th>
				<th>Errors</th>
				<th>Value</th>
			    </tr>
			    @foreach(session()->get('failures') as $validation)
				<tr>
				    <td>{{ $validation->row() }}</td>
				    <td>{{ $validation->attribute() }}</td>
				    <td>
					<ul>
					    @foreach($validation->errors() as $e)
						<li>{{ $e }}</li>
					    @endforeach
					</ul>
				    </td>
				    <td>{{ $validation->values()[$validation->attribute()] }}</td>
				</tr>
			    @endforeach
			</table>
		    @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/excel" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group offset-lg-1 col-lg-9">
                                            <input type="file" class="form-control-file @error('excel') is-invalid @enderror" name="excel">
					    @error('excel')
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
    @include('excel.lokal-js')
@endsection