<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\mykajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalKajianController extends Controller
{
    public function index()
    {
    	$kajianJadwal = mykajian::all();

    	return view('admin.jadwal-kajian-table',compact('kajianJadwal'));
    }
    public function create()
    {
    	return view('admin.jadwal-kajian-create');
    }
    public function store(Request $request)
    {
    	
    		$request->validate([

    			'date' => 'required',
    			'pengisi_acara' => 'required|min:3',
    			'tema' => 'required|min:3',
    			'kategori' => 'required'
    		]);

    		Auth::user()->masjid->jadwalKajian()->create($request->except('_token'));
    		return redirect(route('admin.jadwal.kajian'));
    	
    }
}
