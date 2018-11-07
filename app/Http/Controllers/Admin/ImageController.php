<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mosque_Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datatables;

class ImageController extends Controller
{
    public function index()
    {

        return view('admin.image-table');
    	// $image = Mosque_Image::all();
    	// return view('admin.image-table',compact('image'));
    }
    public function create()
    {
    	return view('admin.image-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'file' => 'required'
    	]);

    	 $path = $request->file('file')->store('public/fileupload');
    	 $data = [
    	 	'file' => $path
    	 ];

    	 Auth::user()->masjid->mosqueImage()->create($data);
        return redirect(route('admin.image'));
    }
    public function getJsonData(Request $request)
    {
        return Datatables::of(Auth::user()->masjid->mosqueImage())->make(true);
    }
}
