<?php 

namespace app/Http/Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controllers

{   public function getDashboard(){
	
	return view ('dashboard');
	
}
	
	public function postSignUp(Request $request)
	{
		$email = $request['email'];
		$first_name  = $request['first_name'];
		$password = bcrypt($request['password']);
		
		$user => save();
		
		Auth::login($user);
		
		return redirect()->route['dashboard'];
		
	}
	
		public function postSignIn(Request $request)
	{
		if (Auth::attempt(['email' = > $request['email'], 'password' = $request['password'])) {
			return redirect () -> route ('dashboard');
			
		}
		
		return redirect()->back();
		
	}
	
}
