<?php
include("app/conf.php");

$stmt = $bd->prepare('DELETE FROM maquinas WHERE id = :id');

$success = $stmt->execute([':id' => $_POST['apagar']]);

header('Location: listar-maquina.php?apagado =' . $success);