<?php

require_once "app/conf.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Verificar username
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor digite um nome";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$', trim($_POST["username"]))){
        $username_err = "Nome só pode conter apenas letras, números e sublinhados.";
    }else{
        //Statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_username);

            $param_username = trim($_POST['username']);

            if($stmt->execute()){
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $username_err = "Username em uso!";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Algo de errado aconteceudo. Tente novamente!";
            }

            $stmt->close();
        }

    }

    //Verificar senha e confirmar senha
    if(empty(trim($_POST['password']))){
        $password_err = "Insirá uma senha";
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Senha tem que ter no mínimo 6 caracteres";
    } else {
        $password = trim($_POST['password']);
    }
    //Confirmar senha
    if(empty(trim($_POST['confirm_password']))){
        $confirm_password_err = "Por favor, confirme a senha!";
    } else {
        $confirm_password = trim($_POST['confirm_password']);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "As senhas não combinam";
        }
    }

    //Verificar possivel erro antes de inserir no banco
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $sql = "INSERT INTO user (username, password) VALUE (?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("ss", $param_username, $param_password);

            //definir parametros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if($stmt->execute()){
                header("location: index.php");
            } else {
                echo "Algo de errado aconteceu! Tente novamente";
            }

            $stmt->close();
        }
    }

    $mysqli->close();
}

?>



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
                    <h2 class="text-center font-weight-bold">Criar usuário</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="justify-content-center">
                        <input type="text" name="username" id="username" placeholder="Usuário" class="d-flex justify-content-center my-3 input-login <?php echo(!empty($username_err)) ? 'invalido' : '' ?>" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        <input type="password" name="password" id="password" placeholder="Senha" class="d-flex justify-content-center my-3 input-login <?php echo(!empty($password_err)) ? 'invalido' : ''; ?>" value="<?php echo $password; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmar senha" class="d-flex justify-content-center my-3 input-login <?php echo(!empty($confirm_password_err)) ? 'invalido' : ''; ?>" value="<?php echo $confirm_password; ?>">
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        <input type="submit" class="btn btn-primary btnBackground col-12 my-3"></input>
                    </form>
                    <a href="index.php" class="py-3">Já tem conta?</a>
            </div>
            
        </section>
    </main>
</body>
</html>