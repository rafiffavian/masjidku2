@extends('adminlte::page')

@section('title', 'Donation')

@section('content_header')
    
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Tipe Donasi</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
              <form action="{{ route('admin.donation.update', $tipe->id) }}" method="post">
          		@include('admin.erorr-form')
                @csrf
                <input type="hidden" name="_method" value="put">
          			<div class="form-group">
          				<label for="khatib">Minimal</label>
          				<input type="number" name="minimal" id="date" class="form-control" required="" value="{{$tipe->minimal}}">
          			</div>
                <div class="form-group">
                  <label for="amount">Keterangan</label><br> <!-- for di dalem lebel itu merujuk pada id -->
                  <textarea name="keterangan" id="" cols="30" style="margin-left: 20px" rows="2">{{$tipe->keterangan}}</textarea>
                </div>
                <div class="form-group">
                  <label for="description">Status</label><br>
                  <select name="status" id="" style="margin-left: 20px">
                      <option value="aktif"{{$tipe->status == "aktif"?"selected" : ""}}>Aktif</option>
                      <option value="tidak aktif"{{$tipe->status == "tidak aktif"?"selected" : ""}}>Tidak Aktif</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="kategori">Tipe Donasi</label><br>
                    <select name="id_master_donation" id="id_finance_type" style="margin-left: 20px">
                      @foreach(App\MasterDonation::all() as $item)
                        <option value="{{$item->id}}"{{$tipe->id_master_donation == $item->id ? "selected" : ""}}>{{$item->nama}}</option>
                      @endforeach  
                    </select>

          			<div class="form-group text-right">
          				<button class="btn btn-primary" type="submit">Simpan</button>
          			</div>
          		</form>
          	</div>
          </div>
      </div>
    </div>

@endsection