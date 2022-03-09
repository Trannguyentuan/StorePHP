<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of productDTO
 *
 * @author pynamic
 */
class productDTO {
    //put your code here
    public $id;
    public $name;
    public $imageUrl;
    public $category;
    public $price;
    public function __construct($id,$name,$imageUrl,$category,$price){
        $this->id=$id;
        $this->name=$name;
        $this->imageUrl=$imageUrl;
        $this->category=$category;
        $this->price=$price;
    }
    
}
