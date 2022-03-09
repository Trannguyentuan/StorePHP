<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of cartDTO
 *
 * @author pynamic
 */
class cartDTO {
    //put your code here
    public $userid;
    public $productid;
    public $productimage;
    public $productName;
    public $quantity;
    public $total;
    public function __construct($userid, $productid, $productimage, $productName, $quantity, $total) {
        $this->userid = $userid;
        $this->productid = $productid;
        $this->productimage = $productimage;
        $this->productName = $productName;
        $this->quantity = $quantity;
        $this->total = $total;
    }

}
