@extends('adminlte::page')

@section('title', 'Gambar Masjid')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
	    	<div class="box-header with-border">
	    		<h3 class="box-title">Tambah Member masjid</h3>
	    	</div>
	    <div class="box-body">
	    		<div class="col-md-12">
	    			<a href="{{ route('admin.member.create') }}">
	    				<button class="btn btn-primary btn-xs">
	    					<i class="fa fa-plus"></i> Tambah
	    				</button>
	    			</a>
	    				<table class="table table-striped table-bordered" id="datatable">
	    					<thead>
	    						<tr>
	    							<td>Nama</td>
	    							<td>Posisi</td>
	    							<td>Phone</td>
	    							<td>Email</td>
	    							<td>Created_at</td>
	    							<td>Updated_at</td>
	    							<td>Action</td>
	    						</tr>
	    					</thead>
	    					<tbody>
							  {{-- @foreach($member as $v)
	    						<tr>
	    							<td>{{$v->name}}</td>
	    							<td>{{$v->position}}</td>
	    							<td>{{$v->phone}}</td>
	    							<td>{{$v->email}}</td>
	    							<td>{{$v->created_at}}</td>
	    							<td>{{$v->updated_at}}</td>
	    							<td>
	    								<a href="{{ route('admin.member.edit',$v->id) }}" class="btn btn-warning btn-xs">
	    									<i class="fa fa-pencil"> Edit</i>
	    								</a>
	    								<a href="" class="btn btn-danger btn-xs">
	    									<i class="fa fa-pencil"> Hapus</i>
	    								</a>
	    							</td>
	    						</tr>
	    					  @endforeach --}}
	    					</tbody>
	    				</table>
	    		</div>
	    	</div>	

    </div>
@stop
@section('js')
    <script>
	$(document).ready(function() {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.member.getJsonData') !!}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'position', name: 'position' },
            { data: 'phone', name: 'phone' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
	});</script>
@stop