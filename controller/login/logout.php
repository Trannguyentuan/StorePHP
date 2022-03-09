<?php
//xoa sesion cookie
// remove all session variables
session_start();
session_unset();

// destroy the session
session_destroy();
header('location: ../../index.php');
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

