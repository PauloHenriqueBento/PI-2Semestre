<?php
include ("app/conf.php");

$sql = 'SELECT id, serial, modelo, fabricante, data, sistema_operacional, observacoes FROM maquinas';

$_GET['apagado'] = $_GET['apagado'] ?? false;

if($_GET['apagado'] == 1) {
    echo "<font color = green> Apagado com sucesso</font>";
}

$_GET['gravado'] = $_GET['gravado'] ?? false;

if($_GET['gravado'] == 1) {
    echo "<font color = green> Gravado com sucesso</font>";
} 

echo '<form action ="apagar-maquina.php" method="post">
<table border="1" class="table table-striped table-hover">
<tr>
    <th>Serial</th><th>Modelo</th><th>Fabricante</th><th>Data</th><th>Sistema Operacional</th><th>Observacoes</th>
<tr>';

foreach($bd->query($sql) as $registro) {
    echo "<tr>
                <td>{$registro['serial']}</td>
                <td>{$registro['modelo']}</td>
                <td>{$registro['fabricante']}</td>
                <td>{$registro['data']}</td>
                <td>{$registro['sistema_operacional']}</td>
                <td>{$registro['observacoes']}</td>
                <td><button name='apagar' value='{$registro['id']}'>apagar</button><td>
        </tr>";
}

echo '</table>
    </form>';