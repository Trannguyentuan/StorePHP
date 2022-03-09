0<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (session_id() === '') 
    session_start();
include_once(__DIR__ . '/../../model/repository.php');

$db=new repository();


try {
	$userName = $_POST['userName'];
	$pwd = $_POST['password'];
        $hashpwd = md5($pwd);
	if (empty($userName) || empty($pwd)) {
		header('location: ../../views/login.php?error=emptyLogin');
		exit();
	} else {		
		if (!($db->checkacc($userName, $hashpwd))) {
                    
			header('location: ../views/login.php?error=wrongLogin');
			exit();
		} else {
			$role = $db->getPermission($userName, $hashpwd);
			$userRole = $role['role'];
			$tmpuser =$db-> checkacc($userName, $hashpwd);
                        $userid=$tmpuser['id'];
                        
			//initialize SESSION.
			$_SESSION['role'] = $userRole;
			$_SESSION['uid'] = $userid;
                        $_SESSION['username']=$userName;
			if ($userRole == 'Admin') { //admin
				$_SESSION["userID"] = $userName;
                                echo "admin".$userid;
				//header('location: adminProfile.php');
				//exit();
			} else//user
				//nav to product
				header('location: ../../index.php');
				exit();
		}
	}
} catch (Exception $ex) {
	echo $ex->getMessage();
}
