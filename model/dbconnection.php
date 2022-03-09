<?php
// Create connection
   function connectPDO()
{
	$host = 'localhost';
	$dbname = 'ecommerce';
	$username = 'root';
	$password = '';

	try {
		//$conn =new mysqli($host,$username,$password,$dbname);
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
	} catch (Exception $ex) {
			echo $ex->getMessage();
		}
    
	}
        function connect()
{
	$host = 'localhost';
	$dbname = 'ecommerce';
	$username = 'root';
	$password = '';

	try {
		$conn =new mysqli($host,$username,$password,$dbname);
            //$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
            //$conn = new PDO($dsn, $username, $password);
            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
	} catch (Exception $ex) {
			echo $ex->getMessage();
		}
    
	}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */