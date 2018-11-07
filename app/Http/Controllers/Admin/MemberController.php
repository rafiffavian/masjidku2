<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mosque_member;
use Datatables;

class MemberController extends Controller
{
    public function index()
    {
        $member = Mosque_member::all();

    	return view('admin.member-masjid-table',compact('member'));
    }
    public function create()
    {
    	return view('admin.member-masjid-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'name' => 'required',
    		'position' => 'required',
    		'phone' => 'required|numeric',
    		'email' => 'required'
    	]);
    	Auth::user()->masjid->memberMosque()->create($request->except('_token'));
    	return redirect(route('admin.member'));
    }
    public function edit(Request $request, $id)
    {
        $memberMasjid = Auth::user()->masjid->memberMosque()->findOrFail($id);
        return view('admin.member-masjid-edit',[

            'member' => $memberMasjid

        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'position' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required'
        ]);
        $memberkuy = Auth::user()->masjid->memberMosque()->findOrFail($id);
        $memberkuy->fill($request->except(['_token','_method']))->save();
        return redirect(route('admin.member'));
    }
    public function getJsonData(Request $request)
    {
       return Datatables::of(Auth::user()->masjid->memberMosque())->make(true);
    }
}
