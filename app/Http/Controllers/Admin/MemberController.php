<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mosque_member;

class MemberController extends Controller
{
    public function index()
    {
    	return view('admin.member-masjid-table');
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
}
