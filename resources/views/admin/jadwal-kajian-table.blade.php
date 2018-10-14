@extends('adminlte::page')

@section('title', 'Jadwal Kajian')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
	    	<div class="box-header with-border">
	    		<h3 class="box-title">Jadwal Kajan</h3>
	    	</div>
	    <div class="box-body">
	    		<div class="col-md-12">
	    			<a href="{{ route('admin.jadwal.kajian.create') }}">
	    				<button class="btn btn-primary btn-xs">
	    					<i class="fa fa-plus"></i> Tambah
	    				</button>
	    			</a>
	    			<table class="table table-striped table-bordered">
	    				<thead>
	    					<tr>
	    						<th>Tanggal</th>
	    						<th>Pengisi Acara</th>
	    						<th>Tema Kajian</th>
	    						<th>Kategori</th>
	    						<th>Created_At</th>
	    						<th>Updated_At</th>
	    						<th>Action</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    				@foreach($kajianJadwal as $v)
	    					<tr>
	    						<td>{{$v->date}}</td>
	    						<td>{{$v->pengisi_acara}}</td>
	    						<td>{{$v->tema}}</td>
	    						<td>{{$v->kategori}}</td>
	    						<td>{{$v->created_at}}</td>
	    						<td>{{$v->updated_at}}</td>
	    						<td>
	    							<div class="btn btn-group">
	    								<a href="" class="btn btn-warning btn-xs">
	    									<i class="fa fa-pencil"> Edit</i>
	    								</a>
	    								<a href="" class="btn btn-danger btn-xs">
	    									<i class="fa fa-pencil"> Hapus</i>
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
@stop