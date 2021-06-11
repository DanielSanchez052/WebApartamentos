<?php

namespace App\Controllers;
use App\Models\UserModel;

class ProfileController extends BaseController
{
	public function index(){
		$session = \config\Services::session();
		if($session->get('user')){
			$userModel = new UserModel();
			$username = $session->get("user");
			$user = $userModel->getUser($username['username']);
			
			echo view('layout/header',array("username"=>"$username[username]"));
			echo view('profile_view',["data"=>$user]);
			echo view('layout/footer');
		}else{
			return redirect()->to("/login");
		}
	}

	public function updateUser(){
		$request = \Config\Services::request();
		$session = \config\Services::session();
		$userModel = new UserModel();

		$name = $request->getPost('inputName');
		$username = $session->get('user')['username'];
		$country = $request->getPost('inputCountry');
		$department = $request->getPost('inputDepartment');
		$city = $request->getPost('inputCity');
		$review = $request->getPost('inputReview');
		$file = $request->getFile('ImageFile');		

		$imageName = $file->getRandomName();

		$imageUrl='';
		if($file->isValid() && !$file->hasMoved()){
			$file->move('./uploads/images/',$imageName);	
			$imageUrl = base_url() . "/uploads/images/" . $imageName;
		}else{
			$imageUrl = $request->getPost('inputUrlImage');
		}
		$result = $userModel->updateUser($name,$username,$country,$department,$city,$review,$imageUrl);
		$toUrl = (!$result)?"/profile":"/my-apartments";
		return redirect()->to($toUrl);
	}

	public function detailProfile(){
		$request = \Config\Services::request();
		$session = \config\Services::session();
		if($request->getGet('user')){
			$user_id=$request->getGet('user');
			$userModel = new UserModel();
			$username = $session->get("user");
			$user = $userModel->getUserById($user_id);
			
			echo view('layout/header',array("username"=>"$username[username]"));
			echo view('profile_detail_view',["data"=>$user]);
			echo view('layout/footer');
		}else{
			return redirect()->to("/");
		}
	}
}

