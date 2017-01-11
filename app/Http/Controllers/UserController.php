<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Model;

class UserController extends Controller
{

	public function login(){
		session_start();
		$emailOK = 0;
		$passOK = 0;
		$userEmail = DB::table('users')->select('user_email')->where('user_email', '=', $_POST['userEmail'])->get();
		if($userEmail->first()){
			echo "mail OK";
			$emailOK = 1;
		}
		else{
			echo "mail NOK";
		}
		$hashDBValue = "";
		$postPassword = $_POST['userPassword'];
		$postHash = password_hash($postPassword, PASSWORD_DEFAULT);
		$hashDB = DB::table('users')->select('user_password')->where('user_email', '=', $_POST['userEmail'])->get();
		foreach ($hashDB as $key => $value) {
			$hashDBValue = $value->user_password;
		}
		$isPasswordCorrect = password_verify($postPassword, $hashDBValue);
		if($isPasswordCorrect){
			echo "pass OK";
			$passOK = 1;
		}
		else{
			echo "pass NOK";
		}
		if($emailOK && $passOK){
			$userLoggedIn = $_POST['userEmail'];
			$_SESSION["userLoggedIn"] = $userLoggedIn;
			$data = "";
			return redirect()->away('/');			
		}
		else {
			return redirect()->away('/');
		}
	}

	public function logout(){
		session_start();
		session_destroy(); 
		return redirect()->away('/');
	}

    public function register(){
    	$password = $_POST['userPassword'];
    	$passHash = password_hash($password, PASSWORD_DEFAULT);
    	$userEmail = DB::table('users')->select('user_email')->where('user_email', '=', $_POST['userEmail'])->get();
    	if ($userEmail->first()) {
    		echo "E LUAT";
    		return redirect()->away('/');
    	}
    	else {
    		$data = array('user_name' => $_POST['userName'], 'user_email' => $_POST['userEmail'], 'user_password' => $passHash );
    		DB::table('users')->insert($data);
    		echo $data['user_name'];
    		return redirect()->away('/');
    	} 	
    }

}
