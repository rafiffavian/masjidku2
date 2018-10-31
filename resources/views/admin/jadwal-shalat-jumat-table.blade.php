@extends('adminlte::page')

@section('title', 'Jadwal Shalat Jumat')

@section('content_header')
    
@stop

@section('content')
	    <div class="box box-primary">
	            <div class="box-header with-border">
	 		        <h3 class="box-title">Jadwal Shalat Jumat</h3>
	            </div>
		    <div class="box-body">
	    		<div class="col-md-12">
	    			<a href="{{ route('admin.jadwal.shalat-jumat.create') }}">
	    				<button class="btn btn-primary btn-xs">
	    					<i class="fa fa-plus"></i>Tambah
	    				</button>
	    			</a>
	    			<table class="table table-striped table-bordered">
	    				<thead>
	    					<tr>
	    						<th>Tanggal</th>
	    						<th>Khatib</th>
	    						<th>Imam</th>
	    						<th>Muadzin</th>
	    						<th>Created At</th>
	    						<th>Update At</th>
	    						<th>Aksi</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					@foreach(Auth::user()->masjid->jadwalJumatan()->get() as $v)
	    					<tr>
	    						<td>{{$v->date}}</td>
	    						<td>{{$v->khatib}}</td>
	    						<td>{{$v->imam}}</td>
	    						<td>{{$v->muadzin}}</td>
	    						<td>{{$v->created_at}}</td>
	    						<td>{{$v->updated_at}}</td>
	    						<td>
		    						<div class="btn btn-group">
		    							<a href="{{ route('admin.jadwal.shalat-jumat.edit', $v->id) }}" class="btn btn-warning btn-xs">
		    								<i class="fa fa-pencil"> Edit</i>
		    							</a>
		    							<a href="" class="btn btn-danger btn-xs">
		    								<i class="fa fa-trash"> Hapus</i>
		    							</a>
		    						</div>
	    						</td>
	    					</tr>
	    					@endforeach
	    				</tbody>
	    			</table>
	    		</div>
			</div>
		</div>		
@endsection