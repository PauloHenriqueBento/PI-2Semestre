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
<link rel="stylesheet" href="style/cadastro-maquina.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-primary bg-primary menu">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#"><img src="image/logo.png" class="logo"></a>
                <h1 class="text-white">Active</h1>
                <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#expandir" 
                    aria-controls="expandir" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="expandir">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="Cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Máquinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Sobre</a>
                        </li>
                    </ul>
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

            <section class="form-floating mt-3">
                <label for="observacoes">Observações</label>
                <textarea class="form-control inputs obs" name="observacoes" id="observacoes"></textarea>
            </section>

            <div class="d-flex justify-content-center">
            <button type="submit" class="btn text-white p-2 mt-5 mb-3 btn-lg botao">Enviar</button>
            <button type="reset" class="btn text-white p-2 mt-5 mb-3 ms-2 btn-lg botao" onclick="location.href='listar-maquina.php'">Listar</button>
            </div>
        </form>
    </main>
</body>
</html>