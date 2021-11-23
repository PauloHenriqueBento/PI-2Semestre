<?php 
session_start(); 
include('header.php');
?>
<body>
    <main class="container position-relative">
        <section class="login position-absolute top-50 start-50 translate-middle login-bg py-5 px-5">
            <div class="">
                    <h2 class="text-center font-weight-bold">Login</h2>
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
                        <a href="cadastro.php" class="py-3">Novo? Crie uma conta</a>
                    </form>
            </div>
            
        </section>
    </main>
</body>
</html>