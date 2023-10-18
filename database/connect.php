<?php 
 $lch = 'mysql:host = localhost;dbname=trangsuc';
 $username = 'root';
 $pass = '';
 try {
    $db = new PDO($lch, $username,$pass);
 } catch(PDOException $e){
    $err = $e->getMessage();
    include 'errorrs';
    exit;
 }
 function display_db_error($error_mess){
    global $app_path;
    include 'errors/db_error.php';
    exit;
 }



?>