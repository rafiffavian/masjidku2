@extends('adminlte::page')

@section('title', 'Catatan Keuangan')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Catatan Keuangan</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.erorr-form')
          		<form action="{{ route('admin.donation.store') }}" method="post">
          			@csrf
          			<div class="form-group">
          				<label for="date">Minimal</label>
          				<input type="number" name="minimal" id="date" class="form-control" required="" value="{{old('minimal')}}">
          			</div>
                <div class="row">
                  <div class="form-group col-md-10">
                    <label for="id_finance_type">Tipe Donasi</label>
                    <select name="id_master_donation" id="select" class="form-control">
                      @foreach(App\MasterDonation::all() as $ea)
                        <option value="{{$ea->id}}">{{$ea->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                 </div>
                 <div class="row">
                  <div class="form-group col-md-10">
                    <label for="amount">Status</label> <!-- for di dalem lebel itu merujuk pada id -->
                    <select name="status" id="selectkuy" class="form-control">
                      <option value="aktif">Aktif</option>
                      <option value="tidak aktif">Tidak Aktif</option>
                    </select>
                  </div>
                </div> 
                <div class="form-group">
                  <label for="description">Keterangan</label>
                  <br><textarea name="keterangan" id="" cols="30" rows="2" class="form-control">{{old('keterangan')}}</textarea>
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

@section('js')
    <script>
    $(document).ready(function() {
      $('#select').select2();
  } );
    $(document).ready(function() {
      $('#selectkuy').select2();
  } );
  </script> 
@stop
  