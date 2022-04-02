<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of product_details
 *
 * @author pynamic
 */
class product_details {
    //put your code here
    public $productId;
    public $color;
    public $quantity;
    public $size;
    public function __construct($productId, $color, $quantity, $size) {
        $this->productId = $productId;
        $this->color = $color;
        $this->quantity = $quantity;
        $this->size = $size;
    }

}
