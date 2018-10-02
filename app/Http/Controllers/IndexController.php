<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($a, $b)
    {
    	echo "Halaman Utama dari Controller.";
    	echo " 	Hasil Penjumlahan $a + $b = ". ($a+$b);
    }
    public function manggilView()
    {
    	return view('index');
    }
    public function manggilNilai(Request $request)
    {
    	$namaArray = ['xxx','yyy','zzz'];
    	$a = $request->ips;
    	$b = $request->ipa;
    	$c = $request->agama;
    	$d = ($a+$b+$c)/3;

    	return view('index', [
    		'a' => $a,
    		'b' => $b,
    		'c' => $c,
    		'd' => $d,
    		'namaArray' => $namaArray
    	]);
    }
    public function manggilNilai2($a,$b,$c)
    {
    	$namaArray = ['a','b','c'];	
    	$d = ($a+$b+$c)/3;

    	return view('index2', [
    		
    		'a' => $a,
    		'b' => $b,
    		'c' => $c,
    		'd' => $d,
    		'namaArray' => $namaArray
    	]);
    }
    public function manggilIndex()
    {
    	return view('content');
    }
}
