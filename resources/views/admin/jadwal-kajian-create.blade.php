@extends('adminlte::page')

@section('title', 'Jadwal Kajian')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
	    	<div class="box-header with-border">
	    		<h3 class="box-title">Tambah Jadwal Kajian</h3>
	    	</div>
	    <div class="box-body">
	    		<div class="col-md-12">
	    			@include('admin.erorr-form')
	    				<form action="{{ route('admin.jadwal.kajian.store') }}" method="post">
	    					@csrf
							<div class="form-group">
							  <label for="date">Date</label>  
							  <input id="date" name="date" class="form-control" required="" type="date" value="{{old('date')}}">
							</div>			
	    					<div class="form-group">
							  <label for="pengisi_acara">Pengisi Acara</label>  
							  <input id="pengisi_acara" name="pengisi_acara"  class="form-control" required="" type="text" value="{{old('pengisi_acara')}}">
							</div>

							<div class="form-group">
							  <label for="tema">Tema</label>  
							  <input id="tema" name="tema"  class="form-control" required="" type="text" value="{{old('tema')}}">
							</div>

							<div class="form-group">
							  <label for="muadzin">Kategori</label>  
							   <div>
							   		<input type="radio" name="kategori" id="kategori" value="Laki-Laki" @if(old('kategori')) checked @endif>Laki-Laki <br>
							   </div>
							   <div>
							   		<input type="radio" name="kategori" id="kategori" value="Perempuan" @if(old('kategori')) checked @endif>Perempuan <br>
							   </div>
							   <div>
							   		<input type="radio" name="kategori" id="kategori" value="Laki-Laki/Perempuan" @if(old('kategori')) checked @endif>Laki-Laki/Perempuan
							   </div>
							</div>

							
							<div class="form-group text-right">
								<button class="btn btn-primary" type="submit">Simpan</button>
							</div>
						</form>	
	    		</div>
	    	</div>	

    </div>
@stop