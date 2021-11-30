<?php
session_start();
include("app/conflogin.php");

$username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
$password = mysqli_real_escape_string($mysqli, trim(md5($_POST['password'])));
$confirm_password = mysqli_real_escape_string($mysqli, trim(md5($_POST['confirm_password'])));


//Verifica se user já existe

$query = "SELECT COUNT(*) AS total FROM USERS WHERE USERNAME = '$username'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_assoc($result);


if($row['total'] == 1) {//Verifica se já tem usuario cadastrado
   $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
} else {
    //Verifica se senham combinam
    if($password != $confirm_password){
        $_SESSION['senhas_diferem'] = true;
        header('Location: cadastro.php');
        exit;
    } else{
        //Inserir
        $query = "INSERT INTO users (username, password, created_at) VALUES ('$username', '$password', NOW())";

        if($mysqli->query($query) === true){
            $_SESSION['status_cadastro'] = true;
        }

        $mysqli->close();

        header('Location: cadastro.php');
        exit;
    }
}


?>