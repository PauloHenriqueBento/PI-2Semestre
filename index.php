<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active</title>

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main class="container position-relative">
        <section class="login position-absolute top-50 start-50 translate-middle login-bg py-5 px-5">
            <div class="">
                    <h2 class="text-center font-weight-bold">Logar no Sistema</h2>
                    <form action="login.php" method="POST" class="justify-content-center">
                    <?php 
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                     Login ou senha incorreto
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                        <input type="text" name="usuario" id="usuario" placeholder="Usuário" class="d-flex justify-content-center my-3 input-login">
                        <input type="password" name="senha" id="senha" placeholder="Senha" class="d-flex justify-content-center my-3 input-login">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="" id="savePassword">
                            <label for="savePassword" class="form-check-label">Salvar senha</label>
                        </div>
                        <button type="submit" class="btn btn-primary btnBackground col-12 my-3">Entrar</button>
                        <a href="register.php" class="py-3">Novo? Crie uma conta</a>
                    </form>
            </div>
            
        </section>
    </main>
</body>
</html>