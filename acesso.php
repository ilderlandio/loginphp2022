<?php
$userForm = $_POST['usuario']; 
$passForm = $_POST['senha']; 
include_once("conexao.php");
try{
  $stmt = $conn->prepare("SELECT * FROM usuarios");
  $stmt->execute(); 

  $result = $stmt->fetch(PDO::FETCH_ASSOC); 
  $userBd = $result['user'];
  $passBd = $result['pass'];

if(password_verify($userForm,$userBd) && 
	password_verify($passForm,$passBd)){
	session_start(); 
    $_SESSION['usuario'] = $userForm;
    header("location:protegida.php");  
}else{
	echo "Usuário ou senha incorretos!";
}
  // echo $userForm." - ".$passForm." - ".$userBd." - ".$passBd; 
}catch(Exception $e){
  echo "Erro:".$e->getMessage(); 
}