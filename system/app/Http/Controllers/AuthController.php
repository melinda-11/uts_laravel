<?php 


namespace App\Http\Controllers;
use Auth;
use App\Models\User;
/**
 * 
 */
class AuthController extends Controller
{
	
	function showLogin()
	{
		return view('login');	
	}
	
	function prosesLogin()
	{
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('dashboard')->with('success', 'Login berhasil');
		} else {
			return back()->with('danger', 'Login anda gagal, mohon periksa email atau password anda!');
		}
	}

	function showRegister()
	{
		return view('register');	
	}

	function prosesRegister()
	{
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('login')->with('success', 'Login berhasil');
		} else {
			return back()->with('danger', 'Login anda gagal, mohon periksa email atau password anda!');
		}
	}

	
	function logout()
	{
		Auth::logout();
		return redirect('/');
	}


	function store()
	{
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('login')->with('success', 'Selamat! Anda Berhasil Mendaftar. Silahkan Login');
	}
	
	function forgotPassword()
	{
		
	}

}