<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Repository
 *
 * @author pynamic
 */
include_once(__DIR__ . '/DTO/productDTO.php');
include_once(__DIR__ . '/DTO/cartDTO.php');
include_once(__DIR__ . '/DTO/orderDTO.php');
include_once(__DIR__ . '/DTO/order_details.php');
include_once(__DIR__ . '/DTO/userDTO.php');
include_once(__DIR__ . '/dbconnection.php');
class repository {
    //put your code here
//cart
    public function getCartById($id)
    {
        $query="Select * from `carts` where `userId`=$id";
        $get=mysqli_query(connect(), $query);
        return $get;
    }
    public function addCart(cartDTO $cartDTO)
    {
        $query = "INSERT 
		INTO `carts` (`userid`, `productid`, `productimage`, `productName`, `quantity`, `total`)
		VALUES('"  . $cartDTO->userid ."','" . $cartDTO->productid . "','" . $cartDTO->productimage . "','" . $cartDTO->productName . "','" . $cartDTO->quantity . "','" . $cartDTO->total. "')";
        $get=mysqli_query(connect(), $query);
        return $get;
    }
    public function delCart(cartDTO $cartDTO)
    {
        $query="DELETE FROM `carts` WHERE `carts`.`userId` ='".$cartDTO->userId. "' AND `carts`.`productId` = '". $cartDTO->productId;
        $get=mysqli_query(connect(), $query);
        return $get;
    }
    public function editCart(cartDTO $cartDTO)
    {
        $query="UPDATE `carts` SET `quantity`='".$cartDTO->quantity." WHERE `userId`='".$cartDTO->userId ;
        $get=mysqli_query(connect(), $query);
        return $get;
    }
//category
//order
    public function addOrder(orderDTO $orderDTO)
    {
        $query = "INSERT INTO `orders`(`id`, `userId`, `description`, `address`, `phone`, `total`, `isFinished`) 
            VALUES ('" . $orderDTO->userId . "','" . $orderDTO->description . "','" . $orderDTO->address . "','" . $orderDTO->phone . "','".$orderDTO->total."','".$orderDTO->isFinished."')";
        $get=mysqli_query(connect(), $query);
        return $get;
    }
//order details
    public function addOrder_details(order_details $order_details) {
        return true;
    }
//product
    public function getAllProduct() {
        $query='Select * from products';
        $get=mysqli_query(connect(), $query);
        return $get;
    }
    public function getProductById($id) {
        $query="Select * from products where id=$id";
        $get=mysqli_query(connect(), $query);
        return $get;
    }
    public function getProductByCategory($cateid) {
        $query="Select * from products where categoryId=$cateid";
        $get=mysqli_query(connect(), $query);
        return $get;
    }
    public function getBestSeller()
    {
        return 1;
    }

//user
    public function addUser(userDTO $userDTO) {
        $query='INSERT INTO `users`(`username`, `password`, `name`, `phone`, `email`, `imageUrl`, `roleId`) '
                . 'VALUES (:username,:password,:name,:phone,:email,:imageUrl,:role)';
        $$stmt = connectPDO()->prepare($query);
		$stmt->bindValue(':username', $userDTO->username);
		$stmt->bindValue(':password', $userDTO->password);
		$stmt->bindValue(':email', $userDTO->email);
		$stmt->bindValue(':phone', $userDTO->phone);
		$stmt->bindValue(':address', $userDTO->address);
                $stmt->bindValue(':roleId', $userDTO->role);

		$stmt->execute();
		if ($stmt->rowCount() > 0)
			return true;
		return false;
    }
    public function editUser(userDTO $userDTO) {
        $query="UPDATE `users` "
                . "SET `username`='". $userDTO->username."',`password`='".$userDTO->password."',`name`='".$userDTO->name."',`phone`='".$userDTO->phone."',`email`='".$userDTO->email."',`imageUrl`='".$userDTO->imageUrl."',`roleId`='".$userDTO->role."' WHERE `id`='". $userDTO->id."'";
        $get=mysqli_query(connect(), $query);
        return $get;
        
    }
    public function checkacc($username,$pwd)
    {
       // $hashpwd = md5($pwd);
        $query='SELECT * from `users` where `username`=:uname and `password`= :pwd';
        $stmt = connectPDO()->prepare($query);
        $stmt->bindValue(':uname', $username);
        $stmt->bindValue(':pwd', $pwd);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getPermission($username, $pwd)
    {
        $query = 'SELECT * from roles JOIN users ON roles.id = users.roleId WHERE users.username = :uname AND users.password = :pwd';
        $stmt = connectPDO()->prepare($query);

        //Binding value to parameter
        $stmt->bindValue(':uname', $username);
        $stmt->bindValue(':pwd', $pwd);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
