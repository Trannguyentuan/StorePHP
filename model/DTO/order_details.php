<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of order_details
 *
 * @author pynamic
 */
class order_details {
    //put your code here
    
public $orderId;
public $productId;	
public $quantity;	
public $discountPercent;	
public $subTotal;
public function __construct($orderId, $productId, $quantity, $discountPercent, $subTotal) {
    $this->orderId = $orderId;
    $this->productId = $productId;
    $this->quantity = $quantity;
    $this->discountPercent = $discountPercent;
    $this->subTotal = $subTotal;
}

}
