<?php

//Date time
date_default_timezone_set('Asia/Kolkata'); 

$TodayDate = date( 'Y-m-d', time ());

$dsn = 'mysql:host=localhost;dbname=company_db;charset=utf8';
    
    $user="root";
    $pass="";
    
    try{
	     $pdo = new PDO($dsn ,$user , $pass);
	     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $e){
          die('Error connecting. '. $e->getMessage());
}
?>
