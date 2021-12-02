<?php
session_start();
include('verifica_session.php');
//Juntar o listar-maquina.php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
        crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/cadastro-maquina.css">
    <link rel="stylesheet" href="style/usuario-cadastradoo.css">
</head>
  <body>
    <?php include ("./navbar.php"); ?>
    <h2 class="text-center mt-5">Informações Máquinas</h2>
    <?php 
        if(isset($_SESSION['status_atualizado'])):
    ?>
    <div class="alert alert-success text-center" role="alert">
        Maquina atualizada!
    </div>
    <?php
        endif;
        unset($_SESSION['status_atualizado']);
    ?>

    <table class="table border tabela container-sm mt-5">
    <!--  
    <thead>
        <tr>
          <th scope="col" class="text-center">ID</th>
          <th scope="col" class="text-center">Número Serial</th>
          <th scope="col" class="text-center">Modelo</th>
          <th scope="col" class="text-center">Fabricante</th>
          <th scope="col" class="text-center">Data Cadastro</th>
          <th scope="col" class="text-center">Sistema Operacional</th>
          <th scope="col" class="text-center">Observações</th>
          <th scope="col" class="text-center">Editar</th>
          <th scope="col" class="text-center">Apagar</th>
        </tr>
      </thead>
-->

      
      <tbody>
      <?php include("./listar-maquina.php"); ?>
        <tr>
         <!-- <th scope="row">1</th>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border text-center"><a href="#"><img src="image/editar.png" class="modificar"></img></a></td>
            <td class="border text-center"><a href="#"><img src="image/excluir.png" class="modificar"></img></a></td>
-->
          </tr>
      </tbody>
    </table>  
  <body>
</html>