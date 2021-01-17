<?php 

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller{
	function index(){

		if(Auth::guard('pembeli')->check()){
			$data['user'] = Auth::guard('pembeli')->user();
		} else {
			$data['user'] = Auth::guard('penjual')->user();
		}

		//dd($data);
		return view('setting.index', $data);
	}

	function store(){
		//$data = request()->all();
		//dd($data);

		if(request('current')){
			if(Auth::guard('pembeli')->check()){
			    $user = Auth::guard('pembeli')->user();
		    } else {
			     $duser = Auth::guard('penjual')->user();
		    }
			     
			//dd($user);
			$check = Hash::check(request('current'), $user->password);
			//dd($check);
			//if(request('current')){
			if($check){
				if(request('new') == request('confirm')){

					//$user->password = request('new');
					$user->password = bcrypt(request('new'));
					$user->save();

					return back()->with('success', 'Password Berhasil Diganti');

					//ika ingin lansung terlogout
					//Auth::logout();
					//return redirect('login');

				}else{
				     return back()->with('danger', 'Password Baru Tidak Cocok');
			    }

			}else{
				return back()->with('danger', 'Password Sekarang Salah');

			}	

		}else{
			return back()->with('danger', 'Password Kosong');
		}
		
	}

}