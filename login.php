<?php
session_start();
include('app/conflogin.php');

//Redireciona o usuário de volta a tela inicial, caso tnte acessar ilegalmente
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
 
$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "SELECT id, username FROM users WHERE username = '{$usuario}' AND password = md5('{$senha}')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1 ){
    $_SESSION['usuario'] = $usuario;
    header('Location: tela-principal.php');
    exit();
} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}

?>