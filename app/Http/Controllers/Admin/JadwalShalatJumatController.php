<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\FridaySchedule;
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
	public function edit(Request $request, $idku)

		{
			$jadwalku = Auth::user()->masjid->jadwalJumatan()->findOrFail($idku);

			return view('admin.jadwal-shalat-jumat-form-edit',[
				'jadwalsaya' => $jadwalku
			]);
		}
		public function update(Request $request, $idl)
		{
			$request->validate([

				'khatib' => 'required',
				'imam' => 'required',
				'muadzin' => 'required',
				'date' => 'required'
			]);

			$jadwal = Auth::user()->masjid->jadwalJumatan()->findOrFail($idl);
			$jadwal->fill($request->except(['_token','_method']))->save();
			return redirect(route('admin.jadwal.shalat-jumat'));
		}
 }
