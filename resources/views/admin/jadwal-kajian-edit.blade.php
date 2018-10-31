@extends('adminlte::page')

@section('title', 'Jadwal Kajian Edit')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jadwal Kajian</h3>
            </div>
	    <div class="box-body">
			<div class="row">
				<div class="col-md-12">
					@include('admin.erorr-form')
					<form method="POST" action="{{ route('admin.jadwal.kajian.update', $jadwal->id) }}">
							
							@csrf
							<input type="hidden" name="_method" value="put">
							<div class="form-group">
							  <label for="khatib">Pengisi Acara</label>  
							  <input id="pengisi_acara" name="pengisi_acara"  class="form-control" required="" type="text" value="{{($jadwal->pengisi_acara)}}">
							</div>

							<div class="form-group">
							  <label for="imam">Tema</label>  
							  <input id="tema" name="tema"  class="form-control" required="" type="text" value="{{($jadwal->tema)}}">
							</div>

							<div class="form-group">
							  <label for="kategori">Kategori</label>	
							  <div style="margin-left: 30px">
								  <div class="radio">
									  <label>
									    <input type="radio" name="kategori" id="kategori" value="Laki-Laki"{{$jadwal->kategori == 'Laki-Laki' ? 'checked' : ''}}>
									    Laki-Laki
									  </label>
								   </div>
								   <div class="radio">
									  <label>
									    <input type="radio" name="kategori" id="kategori" value="Perempuan"{{$jadwal->kategori == 'Perempuan' ? 'checked' : ''}}>
									    Perempuan
									  </label>
									</div>
									<div class="radio disabled">
									  <label>
									    <input type="radio" name="kategori" id="kategori" value="Laki-laki&Perempuan"{{$jadwal->kategori == 'Laki-laki&Perempuan' ? 'checked' : ''}}>
									    Laki-Laki&Perempuan
									  </label>
									</div>
							   </div>	
							</div>

							<div class="form-group">
							  <label for="date">Date</label>  
							  <input id="date" name="date" class="form-control" required="" type="date" value="{{($jadwal->date)}}">
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

