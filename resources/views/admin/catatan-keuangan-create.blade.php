@extends('adminlte::page')

@section('title', 'Jadwal Kajian')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
	    	<div class="box-header with-border">
	    		<h3 class="box-title">Tambah Catatan Keuangan</h3>
	    	</div>
	    <div class="box-body">
	    		<div class="col-md-12">
	    			@include('admin.erorr-form')
	    			<form action="{{ route('admin.akuntansi.catatan-keuangan.store') }}" method="post">
	    				@csrf
	    				<div class="form-group">
							  <label for="date">Date</label>  
							  <input id="date" name="date" class="form-control" required="" type="date" value="{{old('date')}}">
							</div>			
	    					<div class="form-group">
							  <label for="amount">Amount</label>  
							  <input id="amount" name="amount"  class="form-control" required="" type="text" value="{{old('amount')}}">
							</div>

							<div class="form-group">
							  <label for="description">Description</label>  
							  <input id="description" name="description"  class="form-control" required="" type="text" value="{{old('description')}}">
							</div>

							<div class="form-group">
								  <label for="id_finance_type">Finance Type</label><br>
								  <div style="margin-left: 30px">
									   <select name="id_finance_type" id="id_finance_type">
									   		@foreach(App\Finance_Type::all() as $item)
									   			<option value="{{$item->id}}">{{$item->name}}</option>
									   		@endforeach
									   </select>
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