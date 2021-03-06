@extends('adminlte::page')

@section('title', 'Gambar Masjid')

@section('content_header')
    
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Gambar Masjid</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.erorr-form')
          		<form action="{{ route('admin.image.store') }}" method="post" enctype="multipart/form-data">
          			@csrf
          			<div class="form-group">
          				<label for="file">Upload Gambar</label>
          				<input type="file" name="file" id="file" class="form-control" required=""  value="{{old('file')}}">
          			</div>
          			<div class="form-group text-right">
	                  <button class="btn btn-primary" type="submit">Simpan</button>
	                </div>
          		</form>
          	</div>
          </div>
      </div>
    </div>
@stop