<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MosqueDonation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datatables;

class DonationController extends Controller
{
    public function index()
    {
    	// $listDonasi = MosqueDonation::all();
    	// return view('admin.donation-table',compact('listDonasi'));
        return view('admin.donation-table');
    }
    public function create()
    {
    	return view('admin.donation-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'minimal' => 'required|numeric',
    		'id_master_donation' => 'required',
    		'status' => 'required',
    		'keterangan' => 'required'

    	]);
    	Auth::user()->masjid->Donasi()->create($request->except('_token'));
    	return redirect(route('admin.donation'));
    }
    public function edit(Request $request, $id)
    {
    	$tipeDonasi = Auth::user()->masjid->Donasi()->findOrFail($id);
    	return view('admin.donation-edit',[

    		'tipe' => $tipeDonasi
    	]);
    }
    public function update(Request $request, $id)
    {
    	$request->validate([

    		'minimal' => 'required|numeric',
    		'id_master_donation' => 'required',
    		'status' => 'required',
    		'keterangan' => 'required'
    	]);

    	$ourdonation = Auth::user()->masjid->Donasi()->findOrFail($id);
    	$ourdonation->fill($request->except(['_token','_method']))->save();
    	return redirect(route('admin.donation'));

    }
    public function getJsonData(Request $request)
    {
        return Datatables::of(Auth::user()->masjid->Donasi())->make(true);
    }
}
