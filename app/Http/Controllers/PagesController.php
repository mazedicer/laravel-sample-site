<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller{

	public function getHome(){
		return view( 'home' );
	}

	public function getContact(){
		return view( 'contact' );
	}

	public function login(Request $request){
		$email = $request->input('email');
		$password = $request->input('password');
		if( Auth::attempt( [ 'email' => $email, 'password' => $password ] ) ){
			
			// Authentication passed...
			return redirect()->intended( '/contact' );
		}else{
			return redirect()->intended( '/' );
		}
	}

}
