@extends('adminlte::page')

@section('title', 'Catatan Keuangan')

@section('content_header')
    
@stop

@section('content')
	
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Catatan Keuangan</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.erorr-form')
          		<form action="{{ route('admin.akuntansi.catatan-keuangan.update', $catatanKu->id) }}" {{-- itu $jadwal->id ,id nya itu namanya harus sama kyk database, si $jadwal kita dapet dari controllernya --}} method="post">
          			@csrf
                <input type="hidden" name="_method" value="put">
          			<div class="form-group">
          				<label for="pengisi_acara">Tanggal</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="date" id="date" class="form-control" required="" value="{{$catatanKu->date}}">
          			</div>
          			<div class="form-group">
          				<label for="amount">Amount</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="amount" id="amount" class="form-control" required="" value="{{$catatanKu->amount}}">
          			</div>
          			<div class="form-group">
          				<label for="description">Description</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="description" id="description" class="form-control" required="" value="{{$catatanKu->description}}">
          			</div>
          			<div class="form-group">
          				<label for="finance_type">Tipe Catatan</label>
	          				
	          					<select name="id_finance_type" id="id_finance_type">
									   		@foreach(App\Finance_Type::all() as $item)
									   			<option value="{{$item->id}}"@if($catatanKu->id_finance_type == $item->id) selected='selected' @endif>{{$item->name}}</option>
									   		@endforeach
								 </select>
	          				
          			</div>
          			

          			<div class="form-group text-right">
          				<button class="btn btn-primary" type="submit">Simpan</button>
          			</div>
          		</form>
          	</div>
          </div>
      </div>
    </div>

@endsection