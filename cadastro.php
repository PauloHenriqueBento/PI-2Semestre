<?php 
session_start(); 
include('header.php');
?>
<body>
    <main class="container position-relative">
        <section class="login position-absolute top-50 start-50 translate-middle login-bg py-5 px-5">
            <div class="">
                    <h2 class="text-center font-weight-bold">Criar usuário</h2>
                    <?php
                        if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="alert alert-success" role="alert">
                        Usuario cadastrado!
                    </div>
                    <?php 
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

                    <div class="alert alert-danger" role="alert">
                        Usuário já existe
                    </div>
                    <?php 
                        if(isset($_SESSION['senhas_diferem'])):
                    ?>
                    <div class="alert alert-warning" role="alert">
                        Senhas não combinam
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['senhas_dierem']);
                    ?>

                    <form action="cadastrar.php" method="POST" class="justify-content-center">
                        <input type="text" name="username" id="username" placeholder="Usuário" class="d-flex justify-content-center my-3 input-login <?php echo(!empty($username_err)) ? 'invalido' : '' ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        <input type="password" name="password" id="password" placeholder="Senha" class="d-flex justify-content-center my-3 input-login <?php echo(!empty($password_err)) ? 'invalido' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmar senha" class="d-flex justify-content-center my-3 input-login <?php echo(!empty($confirm_password_err)) ? 'invalido' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        <button type="submit" class="btn btn-primary btnBackground col-12 my-3">Enviar</button>
                    </form>
                    <a href="index.php" class="py-3">Já tem conta?</a>
            </div>
            
        </section>
    </main>
</body>
</html>