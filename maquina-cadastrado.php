<?php
session_start();
include('verifica_session.php');
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
    <header>
      <nav class="navbar navbar-expand-sm menu">
        <div class="container-sm position-relative">
          <div class="div-logo">
            <a class="navbar-brand" href="#"><img src="image/logo.png" class="logo"></a>
            <div class="div-titulo align-middle me-3">
              <h1 class="text-white">Active</h1>
            </div>
          </div>
                
          <div class="btn-group position-absolute end-0">
            <div class="dropdown">
              <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    Funcionário
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="funcionario-cadastrado.php">Visualizar Funcionário</a></li>
                    <li><a class="dropdown-item" href="form_cadastro.php">Cadastrar Funcionário</a></li>
                  </ul>
              </div>
            </div>

            <div class="dropdown">
              <div class="btn-group">
                <button type="button" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                  Máquina
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="maquina-cadastrado.php">Visualizar Máquina</a></li>
                  <li><a class="dropdown-item" href="form_cadastro_maquina.php">Cadastrar Máquina</a></li>
                </ul>
              </div>
            </div>
            <div class="collapse navbar-collapse d-flex justify-content-end ms-1 me-2" id="expandir">
              <button class="btn btn-secondary text-white">Logout</button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <h2 class="text-center mt-5">Informações Máquinas</h2>

    <table class="table border tabela container-sm mt-5">
      <thead>
        <tr>
          <th scope="col" class="text-center">ID</th>
          <th scope="col" class="text-center">Número Serial</th>N
          <th scope="col" class="text-center">Modelo</th>
          <th scope="col" class="text-center">Fabricante</th>
          <th scope="col" class="text-center">Data Cadastro</th>
          <th scope="col" class="text-center">Sistema Operacional</th>
          <th scope="col" class="text-center">Observações</th>
          <th scope="col" class="text-center">Editar</th>
          <th scope="col" class="text-center">Apagar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border text-center"><a href="#"><img src="image/editar.png" class="modificar"></img></a></td>
            <td class="border text-center"><a href="#"><img src="image/excluir.png" class="modificar"></img></a></td>
        
        </tr>
        <tr>
          <th scope="row" class="border">2</th>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border text-center"><a href="#"><img src="image/editar.png" class="modificar"></img></a></td>
            <td class="border text-center"><a href="#"><img src="image/excluir.png" class="modificar"></img></a></td>
        </tr>
        <tr>
          <th scope="row" class="border">3</th>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border text-center"><a href="#"><img src="image/editar.png" class="modificar"></img></a></td>
            <td class="border text-center"><a href="#"><img src="image/excluir.png" class="modificar"></img></a></td>
        </tr>
      </tbody>
    </table>  
  <body>
</html>