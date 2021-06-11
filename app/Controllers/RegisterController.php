<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class RegisterController extends BaseController
{
	public function index()
	{
        echo view('layout/header');
		echo view('register_view');
        echo view('layout/footer');
	}

	public function register(){
		$request = \Config\Services::request();
		$userModel = new UserModel();

		$username = $request->getPost("username");
		$name = $request->getPost("name");
		$email = $request->getPost("email");
		$country = $request->getPost("country");
		$department = $request->getPost("department");
		$city = $request->getPost("city");
		$password = $request->getPost("password");
		$idRol = $request->getPost("rol");
		$review = $request->getPost("review");
		$file = $request->getFile('Image');

		$imageName = $file->getRandomName();

		$imageUrl='';
		if($file->isValid() && !$file->hasMoved()){
			$file->move('./uploads/images/',$imageName);	
			$imageUrl = base_url() . "/uploads/images/" . $imageName;
		}
		
		$result = $userModel->addUser($username,$name,$email,$country,$department,$city,$review,$imageUrl,$password,$idRol);
		if($result){
			return redirect()->to("/register");	
		}else{
			return redirect()->to("/login");
		}	
	}
}
