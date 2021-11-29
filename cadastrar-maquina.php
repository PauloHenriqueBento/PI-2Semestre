<?php
//session_start();
include("app/conf.php");

$_POST['serial'] = $_POST['serial'] ?? '';
$_POST['modelo'] = $_POST['modelo'] ?? '';
$_POST['fabricante'] = $_POST['fabricante'] ?? '';
$_POST['data'] = $_POST['data'] ?? '';
$_POST['sistema_operacional'] = $_POST['sistema_operacional'] ?? '';
$_POST['observacoes'] = $_POST['observacoes'] ?? '';

$stmt = $bd->prepare("INSERT INTO maquinas (serial, modelo, fabricante, data, sistema_operacional, observacoes)
         VALUES (:serial, :modelo, :fabricante, :data, :sistema_operacional, :observacoes)");

$valores[':serial'] = $_POST['serial'];
$valores[':modelo'] = $_POST['modelo'];
$valores[':fabricante'] = $_POST['fabricante'];
$valores[':data'] = $_POST['data'];
$valores[':sistema_operacional'] = $_POST['sistema_operacional'];
$valores[':observacoes'] = $_POST['observacoes'];

if($stmt->execute($valores)){
    header('Location: listar-maquina.php?gravado=1');
} else {
    echo "<br><br> Erro, Nao consegui gravar no banco";
}