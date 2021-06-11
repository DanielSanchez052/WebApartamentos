<?php

namespace App\Controllers;
use App\Models\ApartmentModel;

class Home extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		$apartmentModel = new ApartmentModel();

		$apartments = $apartmentModel->getApartments();
		// print_r($apartments);
		$user = $session->get('user');

		$context=[
			"data"=>$apartments
		];

		echo view('layout/header',["username"=>"$user[username]"]);
		echo view('home_view',$context);
		echo view('layout/footer');
	}
}
