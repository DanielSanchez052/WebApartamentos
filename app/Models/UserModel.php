<?php 
namespace App\Models;
use CodeIgniter\Model;


Class UserModel extends Model{

    function addUser($username,$name,$email,$country,$department,$city,$review,$urlImage,$password,$idRol){
        $sql = "INSERT INTO USER(USERNAME,FULL_NAME, EMAIL, COUNTRY, DEPARTMENT, CITY, REVIEW, URL_IMAGE, PASSWORD, ACTIVE, ID_ROL) 
        VALUES ('{$username}','{$name}','{$email}','{$country}','{$department}','{$city}','{$review}','{$urlImage}','{$password}',1,'{$idRol}')";
        $this->db->query($sql);
        $result=0;
        if($this->db->error()["message"]){
            $result = 0;
        }else{
            $result = 1;
        }
    }

    function getUser($username){
        $sql = "SELECT id_user,username,full_name,country,department,city,review,url_image FROM USER WHERE username='{$username}'";
        $users = $this->db->query($sql)->getResult(); 
        
        return $users;
    }

    function getUserById($idUser){
        $sql = "SELECT id_user,username,full_name,country,department,city,review,url_image FROM USER WHERE id_user={$idUser}";
        $users = $this->db->query($sql)->getResult(); 
        
        return $users;
    }

    function updateUser($name,$username,$country,$department,$city,$review,$url_image){
        $sql = "UPDATE USER SET full_name='{$name}',country='{$country}',department='{$department}',city='{$city}',review='{$review}',url_image='{$url_image}' WHERE username='{$username}'";
        $this->db->query($sql);
        $result=0;
        echo($this->db->error()["message"]);
        if($this->db->error()["message"]){
            $result = 0;
        }else{
            $result = 1;
        }
    }

    function loginUser($email,$password){
        $sql = "SELECT*FROM USER WHERE email='{$email}' AND password='{$password}'";
        $users = $this->db->query($sql)->getResult(); 
        return $users;
    }
}