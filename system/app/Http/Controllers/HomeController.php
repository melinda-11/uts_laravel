<?php 
namespace App\Http\Controllers;

use App\Models\Artikel;

class HomeController extends Controller{
	function showBeranda(){
		$data['list_artikel'] = Artikel::all();
		return view('beranda', $data); 
	}
	function showArtikel(){
		return view('Artikel');
	}
	function showAdmin(){
		return view('admin');
	}
}

