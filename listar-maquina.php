<?php
include ("app/conf.php");

$sql = 'SELECT id, serial, modelo, fabricante, data, sistema_operacional, observacoes FROM maquinas';

$_GET['apagado'] = $_GET['apagado'] ?? false;

if($_GET['apagado'] == 1) {
    echo "<font color = red> Apagado com sucesso</font>";
}

$_GET['gravado'] = $_GET['gravado'] ?? false;

if($_GET['gravado'] == 1) {
    echo "<font color = green> Gravado com sucesso</font>";
} 

echo '<form action ="apagar-maquina.php" method="post">
<table class="table border tabela container-sm mt-5">
    <tr>
        <thead>
            <th class="text-center">Número Serial</th>
            <th class="text-center">Modelo</th>
            <th class="text-center">Fabricante</th>
            <th class="text-center">Data</th>
            <th class="text-center">Sistema Operacional</th>
            <th class="text-center">Observações</th>
            <th class="text-center">Editar</th>
            <th class="text-center">Apagar</th>
        </thead>
    <tr>';

    foreach($bd->query($sql) as $registro) {
        echo "<tr>
                    <td class='border text-center'>{$registro['serial']}</td>
                    <td class='border text-center'>{$registro['modelo']}</td>
                    <td class='border text-center'>{$registro['fabricante']}</td>
                    <td class='border text-center'>{$registro['data']}</td>
                    <td class='border text-center'>{$registro['sistema_operacional']}</td>
                    <td class='border text-center'>{$registro['observacoes']}</td>
                    <td class='border text-center'><a class='btn btn-secondary' name='editar' value='{$registro['id']}' href='form_edita-maquina.php?id={$registro['id']}'>Editar</a></td>
                    <td class='border text-center'><button class='btn btn-danger' name='apagar' value='{$registro['id']}'>apagar</button></td>
            </tr>";
    }

echo '</table>
    </form>';