<?php
//use App\Models\UserModel;

namespace App\Controllers;
use App\Models\ApartmentModel;
use CodeIgniter\HTTP\Request;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\JsonDecoder;

class MyApartmentsController extends BaseController{
	public function index(){
		$request = \Config\Services::request();
		$session = \Config\Services::session();
		$apartmentModel = new ApartmentModel();
		if ($session->get('user') == "") {
			echo "No tiene permisos para acceder";
		} else if ($session->get('user')['rol'] == 1) {
			$state = $request->getGet('state');
			$user = $session->get('user');
			$apartments = $apartmentModel->getApartments($user['username']);
			// print_r($apartments);
			$context=[
				"username"=>"$user[username]",
				"data"=> $apartments,
				"state"=>$state
			];
			echo view('layout/header',$context);
			echo view('my_apartments_view',);
			echo view('layout/footer');
		}
		else{
			echo "Debes tener permisos de administrador para acceder a esta sección";
		}
	}

	public function addApartment(){
		$request = \Config\Services::request();
		$session = \Config\Services::session();
		$apartmentModel = new ApartmentModel();
		if ($session->get('user') == "") {
			return redirect()->to("/login");
		} else {
			$username=$session->get('user')['username'];
			$country = $request->getPost("inputCountry");
			$department= $request->getPost("inputDepartment");
			$city= $request->getPost("inputCity");
			$direction= $request->getPost("inputAdress");
			$rooms= $request->getPost("inputRoms");
			$value_night= $request->getPost("inputNight");
			$maps_ubication= $request->getPost("inputUbication");
			$image=$this->uploadFile($request->getFile("inputImage"));
			$image1=$this->uploadFile($request->getFile("inputImage1"));
			$image2=$this->uploadFile($request->getFile("inputImage2"));
			$review= $request->getPost("review");

			if ($session->get('user')['rol'] == 1 &&$username!==''&&$country!==''&&$department!==''&&$city!==''&&$direction!==''&&$rooms>0 &&$value_night!==''&&$maps_ubication!==''&&$image!==''&&$image1!==''&&$image2!==''&&$review!=='') {
				$apartments = $apartmentModel->addApartment($username,$country,$department,$city,$direction,$rooms,$value_night,$maps_ubication,$image,$image1,$image2,$review);
				print_r($apartments);
				return redirect()->to("/my-apartments?state=added");
			}
			else{
				return redirect()->to("/my-apartments?state=error");
			}
		}
	}

	public function removeApartment(){
		$request = \Config\Services::request();
		$session = \Config\Services::session();

		if ($session->get('user') == "") {
			return redirect()->to("/login");
		} else {
			if ($session->get('user')['rol'] == 1){
				$username=$session->get('user')['username'];
				$apartmentModel = new ApartmentModel();
				$id_apartment = $request->getPost('id_apartment');
				$result = $apartmentModel->removeApartment($id_apartment);
				if(!$result){
					return redirect()->to("/my-apartments?state=deleted");
				}else{
					return redirect()->to("/my-apartments?state=error");
				}
			}
		}
	}

	public function updateApartment(){
		$request = \Config\Services::request();
		$session = \Config\Services::session();

		if ($session->get('user') == "") {
			return redirect()->to("/login");
		} else {
			if ($session->get('user')['rol'] == 1){
				$username=$session->get('user')['username'];
				$country = $request->getPost("inputCountry");
				$department= $request->getPost("inputDepartment");
				$city= $request->getPost("inputCity");
				$direction= $request->getPost("inputAdress");
				$rooms= $request->getPost("inputRoms");
				$value_night= $request->getPost("inputNight");
				$maps_ubication= $request->getPost("inputUbication");
				$image= $request->getFile("inputImage");
				$image1= $request->getFile("inputImage1");
				$image2= $request->getFile("inputImage2");
				$review= $request->getPost("review");

				$apartmentModel = new ApartmentModel();
				$id_apartment = $request->getPost('id_apartment');
				if($session->get('user')['rol'] == 1 && $id_apartment!==''&&$country!==''&&$department!==''&&$city!==''&&$direction!==''&&$rooms!==''&&$value_night!==''&&$maps_ubication!==''&&$review!=='') {
					$image=$this->uploadFile($image);
					$image1=$this->uploadFile($image1);
					$image2=$this->uploadFile($image2);
					$result = $apartmentModel->updateApartment($id_apartment,$country,$department,$city,$direction,$rooms,$value_night,$maps_ubication,$image,$image1,$image2,$review);
					return redirect()->to("/my-apartments?state=updated");
				}
				else{
					return redirect()->to("/my-apartments?state=error");
				}
			}
		}
	}

	private function uploadFile($file){
		$imageName = $file->getRandomName();

		$imageUrl='';
		if($file->isValid() && !$file->hasMoved()){
			$file->move('./uploads/images/',$imageName);	
			$imageUrl = base_url() . "/uploads/images/" . $imageName;
		}
		return $imageUrl;
	}
}
