<?php
//tinh tien discount and cart
function pricediscount($price,$discount)
{
    return $price-($price*$discount/100);
}
function totalpricecart()
{
    
}
function num($num)
{  
    return number_format($num).' VND';
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

