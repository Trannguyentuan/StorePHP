<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of userDTO
 *
 * @author pynamic
 */
class userDTO {
    //put your code here
        public $id;
        public $username;
        public $password;
        public $name;
        public $email;
        public $imageUrl;
        public $phone;
        public $role;
        public $createAt;
        public $updateAt;

        public function __construct($id, $username, $name, $password, $email, $imageUrl, $phone, $role, $createAt, $updateAt)
        {
            $this->userID = $id;
            $this->userName = $userame;     
            $this->password = $password;           
            $this->name = $name;   
            $this->email = $email;     
            $this->role = $role;
            $this->phone = $phone;            
            $this->imageUrl = $imageUrl;  
            $this->createAt = $createAt;
            $this->updateAt = $updateAt;         
        }
}
