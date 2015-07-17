<?php

class UserController extends BaseController{
	public function signup(){
		if(Auth::check()){
			//redirect
			return Redirect::intended('dashboard');
		}

		$user = new User();
		if(Input::has('login')){
			$login = Input::get('login');
			$mail = Input::get('email');
			$pass = Input::get('password');

			$valid = Validator::make(

			array(
				'login' => $login,
				'email' => $mail,
				'password' => $pass,
				'password_confirmation' => input::get('password_confirmation'),
			),
			array(
				'login' => 'required|unique:users,login|min:4|max:20',
				'email' => 'required|unique:users,email|email|',
				'password' => 'required|confirmed|min:6',
				'password_confirmation' => 'same:password'
			),
			array(
				'required' => 'No required field :attribute',
				'email' => 'email will be correct',
				'unique' => 'This :attribute are used',
				'min' => 'The field :attribute must have minium :min symbols',
				'max' => 'The field :attribute mast have maximum :max symbols',
				'confirmed' => 'Password not the same'
		  	)		  	
			);

			if ($valid->fails()){
				$errorMessages = $valid->messages();
				$errors = "";
				foreach ($errorMessages->all() as $message) {
					$errors .= ' - '.$message . "\n" . nl2br("\n");
				}
			}else{
				//registration
				$user->fill(Input::all());
				if($user->signup()){
					$success = "User successfully register!";
				}
			}

		}
		return View::make('signup', array('title'=>'Registration',
			'errors' => isset($errors) ? $errors : null,
			'success' => isset($success) ? $success : null));
	}

	public function login(){
		if(Auth::check()){
			//redirect
			return Redirect::intended('dashboard');
		}
		if(Input::has('login')){
			$login = Input::get('login');
			$pass = Input::get('password');

			$valid = Validator::make(

			array(
				'login' => $login,
				'password' => $pass,
			),
			array(
				'login' => 'required|min:4|max:20',
				'password' => 'required|min:6',
			),
			array(
				'required' => 'No required field :attribute',
				'min' => 'The field :attribute must have minimum :min symbols',
				'max' => 'The field :attribute mast have maximum :max symbols',
		  	)		  	
			);
			if ($valid->fails()){
				$errorMessages = $valid->messages();
				$errors = "";
				foreach ($errorMessages->all() as $message) {
					$errors .= ' - '.$message . "\n" . nl2br("\n");
				}
			}else{
				//authenticated
				if(Auth::attempt(array('login' => $login, 'password' => $pass))){
					return Redirect::intended('dashboard');
				}else{
					$message = "Error authenticated!";	
				};
			}
		}	

		return View::make('login', array('title' => 'Login',
			'errors' => isset($errors) ? $errors : null,
			'success' => isset($success) ? $success : null,
			'messageauth' => isset($message) ? $message : null));

	}

	public function dashboard(){
		$uname = Auth::user()->login;
		return View::make('dashboard', array('title' => 'Dashbord',
			'uname' => $uname));
	}

	public function logout(){
			Auth::logout();
	        return Redirect::to('/');
	}
}