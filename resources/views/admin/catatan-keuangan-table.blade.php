@extends('adminlte::page')

@section('title', 'Catatan Keuangan')

@section('content_header')

@stop

@section('content')
    <div class="box box-primary">
    	<div class="box-header with-border">
    		<h3 class="box-title">Catatan Keuangan</h3>
    	</div>
    	<div class="box-body">
	    	<div class="col-md-12">
	    		<a href="{{ route('admin.akuntansi.catatan-keuangan.create') }}">
	    			<button class="btn btn-primary btn-xs">
	    				<i class="fa fa-plus"></i> Tambah
	    			</button>
	    		</a>
	    		<table class="table table-striped table-bordered" id="datatable">
	    				<thead>
	    					<tr>
	    						<th>Tanggal</th>
	    						<th>Tipe Catatan</th>
	    						<th>Nominal</th>
	    						<th>Keterangan</th>
	    						<th>Aksi</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					{{-- @foreach($listKeuangan as $uang)
	    					<tr>
	    						<td>{{$uang->date}}</td>
	    						<td>{{$uang->tipeCatatan->name}}</td>
	    						<td>{{$uang->amount}}</td>
	    						<td>{{$uang->description}}</td>
	    						<td>
	    							<div class="btn btn-group">
												<a href="{{ route('admin.akuntansi.catatan-keuangan.edit', $uang->id) }}" class="btn btn-warning btn-xs">
													<i class="fa fa-pencil"> Edit</i>
												</a>
												<a href="" class="btn btn-danger btn-xs">
				                                	<i class="fa fa-trash"> Hapus</i>
				                                </a>
									</div>
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
        ajax: '{!! route('admin.akuntansi.getJsonData') !!}',
        method: "GET",
        columns: [
            { data: 'date', name: 'date' },
            { data: 'id_finance_type', name: 'id_finance_type' },
            { data: 'amount', name: 'amount' },
            { data: 'description', name: 'description' },
            { data: 'id', name: 'id' }
        ]
    });
		} );
    </script>
@stop