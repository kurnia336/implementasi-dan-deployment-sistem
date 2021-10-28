@extends('template.master')
@section('lokal-css')
    @include('geolocation.titik-kunjungan.lokal-css')
@endsection
@section('isi')
	   <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
<section class="container" id="demo-content">
      <div>
        <a class="btn btn-primary" role="button" id="startButton">Start</a>
        <a class="btn btn-primary" role="button" id="resetButton">Reset</a>
      </div>
	<br>

      <div>
        <video id="video" width="300" height="200" style="border: 1px solid gray"></video>
      </div>
	<br>

      <div id="sourceSelectPanel" style="display:none">
        <label for="sourceSelect">Change video source:</label>
        <select id="sourceSelect" style="max-width:400px">
        </select>
      </div>
	<br>
      <div id="informasi-toko">
      </div>
      <div id="informasi-titik-kunjungan">
      </div>
    </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('lokal-js')
    @include('geolocation.titik-kunjungan.lokal-js')
@endsection