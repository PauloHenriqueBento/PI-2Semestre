<?php
session_start();
//include('verifica_session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Máquinas</title>
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
                        <form action="logout.php">
                            <button type="submit" class="btn btn-secondary text-white">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
    <h2 class="d-flex justify-content-center mt-4">Cadastro Máquinas</h2>
        <form method="post" action="cadastrar-maquina.php" class="pt-3">
            <label for="serial" class="mt-1">Número de serial</label>

            <input class="form-control p-2 inputs" type="number" name="serial" id="serial" required></input>

            <section class="row">
                <div class="col">
                    <label for="modelo" class="mt-2">Modelo</label>
                    <input class="form-control p-2 inputs" name="modelo"  type="text" id="modelo" required></input>
                </div>

                <div class="col">
                    <label for="fabricante" class="mt-2">Fabricante</label>
                    <input class="form-control p-2 inputs" type="text" name="fabricante" id="fabricante" required></input>
                </div>
            </section>

            <section class="row">
                <div class="col">
                    <label for="data" class="mt-2">Data Cadastro</label>
                    <input class="form-control p-2 col inputs" type="date" name="data" id="data" placeholder="dd/mm/aaaa" 
                        maxlength="8" autocomplete="on" required></input>
                </div>

                <div class="col">
                    <label for="sistema_operacional" class="mt-2">Sistema Operacional</label>
                    <select class="form-select mt-1 inputs" type="text" name="sistema_operacional" id="sistema_operacional" aria-label="Default select example">
                        <option>Selecione uma opção</option>
                            <option value="windows">Windows</option>
                            <option value="linux">Linux</option>
                            <option value="macOS">MacOS</option>
                    </select>
                </div>
            </section>

            <div class="form-floating mt-3">
                <label for="observacoes" class="form-label">Observações</label>
                <textarea class="form-control inputs obs" name="observacoes" id="observacoes"></textarea>
            </div>

            <div class="d-flex justify-content-center">
            <button type="submit" class="btn text-white p-2 mt-5 mb-3 btn-lg botao">Enviar</button>
            <button type="reset" class="btn text-white p-2 mt-5 mb-3 ms-2 btn-lg botao" onclick="location.href='listar-maquina.php'">Listar</button>
            </div>
        </form>
    </main>
</body>
</html>