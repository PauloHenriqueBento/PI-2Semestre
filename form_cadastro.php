<?php
session_start();
include('verifica_session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
        crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/cadastro-maquina.css">
    <link rel="stylesheet" href="style/usuario-cadastradoo.css">
</head>
<body>
    <?php include ("./navbar.php"); ?>
    <main class="container">
        <h2 class="d-flex justify-content-center mt-4">Cadastro</h2>
        <form method="post" action="#" class="pt-1">
            <label for="nome" class="mt-2">Nome completo</label>
            <input class="form-control p-2 mt-1 inputs" id="nome" maxlength="40" type="text" required>

            <section class="row">
                <div class="col">
                    <label for="RG" class="mt-2">RG</label>
                    <input class="form-control p-2 mt-1 inputs" id="rg" type="text" maxlength="13" pattern="\d{1,2}\.\d{3}\.\d{3}-\d{2}" \ required>
                </div>

                <div class="col">
                    <label for="cpf" class="mt-2">CPF</label>
                    <input class="form-control p-2 mt-1 inputs" id="cpf" type="text" maxlength="14" required>
                </div>    
            </section>

            <section class="row">
                <section class="col">
                    <label for="dt-nasc" class="mt-2">Data de Nascimento</label>
                    <input class="form-control p-2 mt-1 inputs" id="dt-nasc" type="date" placeholder="dd/mm/aaaa" maxlength="8" autocomplete="on" required>
                </section>

                <section class="col d-flex align-items-end justify-content-center">
                    <section class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="sexo"></input>
                        <labe class="form-check-label" for="masculino">Masculino</label>
                    </section>
                    <section class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="sexo"></input>
                        <labe class="form-check-label" for="feminino">Feminino</label>
                    </section>
                </section>

                <div class="d-flex justify-content-center">
                    <input type="button" value="enviar" class="btn text-white p-2 mt-5 mb-3 btn-lg botao">
                </div>
        </form>
        
    </main>
</body>
</html>