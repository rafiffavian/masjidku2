<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\mosque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MosqueProfileController extends Controller
{
    public function index()
    {
    	return view('admin.profile-masjid');
    }
    public function save(Request $request)
    {
    	$request->validate([
    		'name' => 'required|min:3|max:100',
    		'phone' => 'required|numeric|min:2',
    		'longtitude' => 'required|numeric|',
    		'latitude' => 'required|numeric',
    		'address' => 'required'
    	]);

    	// cara1
    	$id_mosque_user = Auth::user()->mosque_id;
    	// if($id_mosque_user == null){

    	// 	// create
    	// 	$mosque = new mosque;
    	// 	$mosque->name = $request->name;
    	// 	$mosque->phone = $request->phone;
    	// 	$mosque->longtitude = $request->longtitude;
    	// 	$mosque->latitude = $request->latitude;
    	// 	$mosque->address = $request->address;
    	// 	$mosque->save();
    	// 	Auth::user()->mosque_id = $mosque->id;
    	// 	Auth::user()->save();
    	// }
    	// else{
    	// 	$mosque = mosque::find(Auth::user()->mosque_id);
    	// 	$mosque->name = $request->name;
    	// 	$mosque->phone = $request->phone;
    	// 	$mosque->longtitude = $request->longtitude;
    	// 	$mosque->latitude = $request->latitude;
    	// 	$mosque->address = $request->address;
    	// 	$mosque->save();
    	// }
    	if(!Auth::user()->masjid){

    		$mosque = new mosque;
    		$mosque->fill($request->except('_token'))->save();
    		Auth::user()->mosque_id = $mosque->id;
    		Auth::user()->save();
    	}
    	else{
    		Auth::user()->masjid->fill($request->except('_token'))->save();
    	}
    	return redirect(route('admin.profile.masjid'));
    }
}
