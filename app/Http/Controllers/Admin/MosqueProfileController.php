<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MosqueProfileController extends Controller
{
    public function index()
    {
    	return view('admin.profile-masjid');
    }
}
