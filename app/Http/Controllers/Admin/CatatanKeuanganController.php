<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Finance;

class CatatanKeuanganController extends Controller
{
    public function index()
    {
    	$listKeuangan = Finance::all();
    	return view('admin.catatan-keuangan-table',compact('listKeuangan'));
    }
    public function create()
    {
    	return view('admin.catatan-keuangan-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'date' => 'required',
    		'id_finance_type' => 'required',
    		'amount' => 'required',
    		'description' => 'required'

    	]);

    	Auth::user()->masjid->keuanganMasjid()->create($request->except('_token'));
    	return redirect(route('admin.akuntansi.catatan-keuangan'));
    }
    public function edit(Request $request, $id)
    {
    	$catatan = Auth::user()->masjid->keuanganMasjid()->findOrFail($id);
    	return view('admin.catatan-keuangan-edit',[

    		'catatanKu' => $catatan
    	]);
    }
    public function update(Request $request, $idl)
    {
        $request->validate([

            'date' => 'required',
            'id_finance_type' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ]);

        $crayonSinchan = Auth::user()->masjid->keuanganMasjid()->findOrFail($idl);
        $crayonSinchan->fill($request->except(['_token','_method']))->save();
        return redirect(route('admin.akuntansi.catatan-keuangan'));
    }
}

