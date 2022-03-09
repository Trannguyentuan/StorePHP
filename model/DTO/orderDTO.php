<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of orderDTO
 *
 * @author pynamic
 */
class orderDTO {
    //put your code here
    public $id;
public $userId;	
public $description;
public $address;	
public $phone;	
public $total;	
public $createdAt;	
public $isFinished;
public function __construct($id, $userId, $description, $address, $phone, $total, $createdAt, $isFinished) {
    $this->id = $id;
    $this->userId = $userId;
    $this->description = $description;
    $this->address = $address;
    $this->phone = $phone;
    $this->total = $total;
    $this->createdAt = $createdAt;
    $this->isFinished = $isFinished;
}

}
