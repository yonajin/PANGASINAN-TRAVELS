<?php 
$host="localhost";
$dbname='auth1';
$username='root';
$password='';

$pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
//$pdo = new PDO("mysql:host=localhost;dbname=user_auth", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
