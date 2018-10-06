<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalShalatJumatController extends Controller
{
    public function index()
    {
    	return view('admin.jadwal-shalat-jumat-table');
    }

    public function create()
    {
    	return view('admin.jadwal-shalat-jumat-form-create');
	}	

	public function store(Request $request)
	{
			$request->validate([

				'khatib' => 'required|min:3',
				'imam' => 'required',
				'muadzin' => 'required',
				'date' => 'required'
			]);
		Auth::user()->masjid->jadwalJumatan()->create($request->except('_token'));
		return redirect(route('admin.jadwal.shalat-jumat'));

			
}
    }
