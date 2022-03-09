<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of categoryDTO
 *
 * @author pynamic
 */
class categoryDTO {
    //put your code here
  public $id;
  public $name;
  public $imageUrl;
  public $createAt;
  public $updateAt;
  public function __construct($id, $name,$imageUrl, $createAt, $updateAt)
  {
    $this->cateID = $id;
    $this->name = $name;
    $this->imageUrl=$imageUrl;
    $this->createAt = $createAt;
    $this->updateAt = $updateAt;
  }
}
