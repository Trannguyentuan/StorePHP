<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of roleDTO
 *
 * @author pynamic
 */
class roleDTO {
    //put your code here
    public $id;
    public $role;
    public function __construct($id, $role) {
        $this->id = $id;
        $this->role = $role;
    }

}
