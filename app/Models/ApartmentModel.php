<?php 
namespace App\Models;

use App\Models\UserModel;
use CodeIgniter\Model;
use Exception;

Class ApartmentModel extends Model{

    function getApartments($username=''){
        $sql="";
        if(strlen($username)>0){
            $sql="SELECT A.id_apartment, A.city, A.department, A.country, A.direction, A.maps_ubication, A.rooms, A.image, A.image1, A.image2,  A.value_night, A.review FROM APARTMENT A INNER JOIN
            APARTMENT_USER AP ON AP.id_apartment=A.id_apartment INNER JOIN
            USER US ON US.id_user=AP.id_user
            WHERE US.username='{$username}' AND A.active=1";
        }else{
            $sql="SELECT US.id_user,US.username,A.id_apartment, A.city, A.department, A.country, A.direction, A.maps_ubication, A.rooms, A.image, A.image1, A.image2, A.value_night, A.review FROM APARTMENT A INNER JOIN
            APARTMENT_USER AP ON AP.id_apartment=A.id_apartment INNER JOIN
            USER US ON US.id_user=AP.id_user WHERE A.active=1";
        }

        $apartment = $this->db->query($sql)->getResult(); 
        return $apartment;
    }

    function addApartment($username,$country,$department,$city,$direction,$rooms,$value_night,$maps_ubication,$image,$image1,$image2,$review){
        $sql="INSERT INTO `APARTMENT`(`city`, `department`, `country`, `direction`, `maps_ubication`, `rooms`, `image`, `image1`, `image2`, `value_night`, `review`, `active`) 
                            VALUES ('{$city}','{$department}','{$country}','{$direction}','{$maps_ubication}',{$rooms},'{$image}','{$image1}','{$image2}',{$value_night},'{$review}',1)";
        $this->db->query($sql);
        if($this->db->error()["message"]){
            return $this->db->error()["message"];
        }else{
            $userModel = new UserModel();

            $userId = $userModel->getUser($username)[0]->id_user;
            $last_id = $this->db->query("SELECT MAX(id_apartment) as last_id FROM APARTMENT")->getResult()[0]->last_id;
            $last_id= ($last_id===Null)?1:$last_id;
            $sql="INSERT INTO APARTMENT_USER(id_user, id_apartment) VALUES ({$userId},{$last_id})";
            $this->db->query($sql); 
        }
    }

    function removeApartment($id_apartment){
        $userModel = new UserModel();
        $sql ="UPDATE APARTMENT SET active=0 WHERE id_apartment={$id_apartment}";
        $this->db->query($sql);
        if($this->db->error()["message"]){
            return $this->db->error()["message"];
        }
        return false;
    } 

    function updateApartment($id_apartment,$country,$department,$city,$direction,$rooms,$value_night,$maps_ubication,$image='',$image1='',$image2='',$review){
        $sql="imagen: $image imagen: $image1 imagen: $image2";
        if($image!=='' && $image1!=='' && $image2!==''){
            $sql = "UPDATE APARTMENT SET city='{$city}',department='{$department}',country='{$country}',direction='{$direction}',maps_ubication='{$maps_ubication}',rooms={$rooms},image='{$image}',image1='{$image1}',image2='{$image2}',value_night={$value_night},review='{$review}' WHERE id_apartment=$id_apartment";
        }else{
            $sql = "UPDATE APARTMENT SET city='{$city}',department='{$department}',country='{$country}',direction='{$direction}',maps_ubication='{$maps_ubication}',rooms={$rooms},value_night={$value_night},review='{$review}' WHERE id_apartment=$id_apartment";
        }
        $this->db->query($sql);
        if($this->db->error()["message"]){
            $result = $this->db->error()["message"];
        }else{
            $result = 0;
        }
        return $result;
    }
}