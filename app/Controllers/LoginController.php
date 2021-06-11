<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class LoginController extends BaseController
{
	public function index(){
		$session = \config\Services::session();
		if(!$session->get('user')){
			echo view('layout/header');
			echo view('login_view');
			echo view('layout/footer');
		}else{
			return redirect()->to("/my-apartments");
		}
	}

	public function login(){
		$request = \Config\Services::request();
		$session = \config\Services::session();
		$userModel = new UserModel();
		$email = $request->getPost('inputEmail');
		$pass = $request->getPost('inputPassword');
		$user = $userModel->loginUser($email,$pass);
		if(count($user) > 0){
			$newData= [
				'username' => $user[0]->username,
				'email' => $user[0]->email,
				'rol' => $user[0]->id_rol
			];
			$session->set(["user"=>$newData]);
			return redirect()->to("/my-apartments");
		}else{
			return redirect()->to("/login");
		}
	}

	public function logout(){
		$session = \config\Services::session();
		$session->remove("user");
		return redirect()->to("/login");
	}
}
