@extends('adminlte::page')

@section('title', 'Profile Masjid')

@section('content_header')
    <h1>Setting Profile Anda</h1>
@stop

@section('content')
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profile Masjid</h3>
            </div>
	    <div class="box-body">
    	@if ($errors->any())
	    	<div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

			<form class="form-horizontal" method="POST" action="{{route('admin.profile.masjid.save')}}">
				@csrf
			<fieldset>

			<!-- Form Name -->


			<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="name">name</label>  
					  <div class="col-md-4">
					  <input id="name" name="name" placeholder="name" class="form-control input-md" required="" type="text" value="{{Auth::user()->masjid ? Auth::user()->masjid->name : old('name')}}">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="phone">phone</label>  
					  <div class="col-md-4">
					  <input id="phone" name="phone" placeholder="phone" class="form-control input-md" required="" type="text" value="{{Auth::user()->masjid ? Auth::user()->masjid->phone : old('phone')}}">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="latitude">latitude</label>  
					  <div class="col-md-4">
					  <input id="latitude" name="latitude" placeholder="latitude" class="form-control input-md" required="" type="text" value="{{Auth::user()->masjid ? Auth::user()->masjid->latitude : old('latitude')}}">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="longtitude">longtitude</label>  
					  <div class="col-md-4">
					  <input id="longtitude" name="longtitude" placeholder="longtitude" class="form-control input-md" required="" type="text" value="{{Auth::user()->masjid ? Auth::user()->masjid->longtitude : old('longtitude')}}">
					    
					  </div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="address">address</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="address" name="address">{{Auth::user()->masjid ? Auth::user()->masjid->address : old('address')}}</textarea>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label"></label>
					  <div class="col-md-4">                     
					    <button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>

			</fieldset>
			</form>
		</div>
	</div>		

@stop

