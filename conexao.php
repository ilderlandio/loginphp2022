<?php 
$banco = "login";
$host = "localhost";
$user_bd = "root"; 
$pass_bd = "";
$charset = "utf8";
$config = "mysql:dbname=$banco;";
$config .= "host=$host;";
$config .= "charset=$charset";
$conn = new PDO($config,$user_bd,$pass_bd); 














?>