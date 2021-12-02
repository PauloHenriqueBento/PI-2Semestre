<?php 
require_once('./app/conflogin.php');
session_start();

if(isset($_GET['id']) && isset($_POST['editarForm'])){
    $id = $_GET['id'];
    $serial = $_POST['serial'];
    $modelo = $_POST['modelo'];
    $fabricante = $_POST['fabricante'];
    $data = $_POST['data'];
    $sistema_operacional = $_POST['sistema_operacional'];
    $oservacoes = $_POST['observacoes'];

    $sql = "UPDATE `maquinas` SET 
            `serial`='$serial',
            `modelo`='$modelo',
            `fabricante`='$fabricante',
            `data`='$data',
            `sistema_operacional`='$sistema_operacional',
            `observacoes`='$oservacoes' 
            WHERE id = $id";
    if($mysqli->query($sql) === true){
        $_SESSION['status_atualizado'] = true;
        header('Location: maquina-cadastrado.php');
    } else{
        $_SESSION['erro_atualizar'] = true;
        header('Location: maquina-cadastrado.php');
    }
} else {
    echo 'erro';
}

?>