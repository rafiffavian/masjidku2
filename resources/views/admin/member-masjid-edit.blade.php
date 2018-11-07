@extends('adminlte::page')

@section('title', 'Member Edit')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Member Masjid</h3>
            </div>
	    <div class="box-body">
				<div class="row">
					<div class="col-md-12">
						@include('admin.erorr-form')
						<form action="{{ route('admin.member.update',$member->id) }}" method="post">
							@csrf
							<input type="hidden" name="_method" value="put">
							<div>
								<label for="">Nama</label>
								<input type="text" name="name" class="form-control" required="" value="{{$member->name}}">
							</div>
							<div>
								<label for="">Posisi</label>
									<input type="text" name="position" class="form-control" value="{{$member->position}}" required="">
							</div>
							<div>
								<label for="">Phone</label>
									<input type="number" name="phone" class="form-control" value="{{$member->phone}}" required="">
							</div>
							<div>
								<label for="">Email</label>
									<input type="email" name="email" class="form-control" value="{{$member->email}}" required="">
							</div><br>
							<div class="form-group text-right">
								<button class="btn btn-primary" type="submit">Simpan</button>
							</div>
						</form>
					</div>
				</div>
    	
		</div>
	</div>		

@stop
