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
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/cadastro-maquina.css">
    <link rel="stylesheet" href="style/telaPrincipal.css">
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

                <div class="collapse navbar-collapse d-flex justify-content-end position-absolute end-0 me-5" id="expandir">
                    <form action="logout.php">
                        <button type="submit" class="btn btn-secondary text-white">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="div-lateral mt-5">
            <div class="mt-5">
                <h2 class="fs-4 text-center">
                    Seja Bem Vindo
                </h2>
                <div class="mt-5 text-center">
                    <img src="image/user.png" class="icon">
                </div>
                <div class="text-center">
                    <span class="nome-usuario fs-4 pt-2 mb-4">Nome do Usuário</span>
                </div>
            </div>
        </div>
        <div class="div-central ms-5 mt-5">
            <div class="row text-center">
                <div class="col  border ms-3 div-opcoes">
                    <div class="mt-5">
                        <a href="form_cadastro.php"><img src="image/cadastrar-usu.png" class="icon"></a>
                    </div>
                    <div class="mt-4">
                        <button class="botao"><a href="form_cadastro.php" class="link-dark  text-white">Cadastrar Usuário</a></button>
                    </div>
                </div>

                <div class="col border ms-5 div-opcoes">
                    <div class="mt-5">
                        <a href="form_cadastro.php"><img src="image/mostrar-usu.png" class="icon"></a>
                    </div>
                    <div class="mt-4">
                        <button class="botao"><a href="form_cadastro.php" class="link-dark  text-white">Mostrar Usuário</a></button>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5 text-center">
                <div class="col border ms-3 div-opcoes">
                    <div class="mt-5">
                        <a href="form_cadastro.php"><img src="image/cadastrar-maq.png" class="icon"></a>
                    </div>
                    <div class="mt-4">
                        <button class="botao"><a href="form_cadastro.php" class="link-dark  text-white">Cadastrar Máquina</a></button>
                    </div>
                </div>

                <div class="col border ms-5 div-opcoes">
                    <div class="mt-5">
                        <a href="form_cadastro.php"><img src="image/mostrar-maq.png" class="icon"></a>
                    </div>
                    <div class="mt-4">
                        <button class="botao"><a href="form_cadastro.php" class="link-dark  text-white">Mostrar Máquina</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>