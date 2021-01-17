<?php 

namespace App\Http\Controllers;
use App\Models\Penjual;
use App\Models\Pembeli;
Use Auth;


class AuthController extends controller
{

	function showLogin (){
		return view ('login');

	}

	function loginProcess (){
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			$user = Auth::user();
			if($user->level == 1) return redirect('beranda/admin')->with('success', 'Login Berhasil');
			if($user->level == 0) return redirect('beranda/pengguna')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
		}

			//$email = request('email');
			//$user = Pembeli::where('email', $email)->first();
			//dd($user);
			//if($user){
				//dd($user);
				//$guard = 'pembeli';
			//} else {
				//$user = Penjual::where('email', $email)->first();
				//if($user) {
					//$guard = 'penjual';
				//} else {
					//$guard = false;
				//}
			//}

			//jika Tidak Ada Guard
			//if(!$guard){
				//return back()->with('danger', 'Login Gagal, Email Tidak Ditemukan Di Database');
			//} else {
				//if(Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])){
					//return redirect("beranda/$guard")->with('success', 'Login Berhasil');
				//}else{
					//return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
				//}

			//}


		//if(request('login_as') == 1){
			//if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
				//return redirect('beranda/pembeli')->with('success', 'Login Berhasil');
			//}else{
				//return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
			//}

		//}else{
			//if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
				//return redirect('beranda/penjual')->with('success', 'Login Berhasil');
			//}else{
				//return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
			//}


		//}

	}

	function logout (){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return redirect('beranda');

	}

	function registration (){

	}
	
	function forgotPassword (){

	}
	
}