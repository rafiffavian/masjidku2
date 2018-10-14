@extends('adminlte::page')

@section('title', 'Jadwal Shalat Jumat')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jadwal Shalat Jumat</h3>
            </div>
	    <div class="box-body">
			<div class="row">
				<div class="col-md-12">
					@include('admin.erorr-form')
					<form method="POST" action="{{route('admin.jadwal.shalat-jumat.update', $jadwalsaya->id)}}">
							@csrf
							<input type="hidden" name="_method" value="put">
							<div class="form-group">
							  <label for="khatib">Nama Khatib</label>  
							  <input id="khatib" name="khatib"  class="form-control" required="" type="text" value="{{($jadwalsaya->khatib)}}">
							</div>

							<div class="form-group">
							  <label for="imam">Nama Imam</label>  
							  <input id="imam" name="imam"  class="form-control" required="" type="text" value="{{($jadwalsaya->imam)}}">
							</div>

							<div class="form-group">
							  <label for="muadzin">Nama Muadzin</label>  
							  <input id="muadzin" name="muadzin"  class="form-control" required="" type="text" value="{{($jadwalsaya->muadzin)}}">
							</div>

							<div class="form-group">
							  <label for="date">Date</label>  
							  <input id="date" name="date" class="form-control" required="" type="date" value="{{($jadwalsaya->date)}}">
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

