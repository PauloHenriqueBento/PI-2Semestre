<?php
session_start();
require_once('app/conflogin.php');
if(!isset($_GET['id'])){
    die('Máquina inexistente');
}
//Pega ID
$id = $_GET['id'];

//Seleciona no banco e verifica
$sql = "SELECT * FROM `maquinas` where id = $id";
$result = $mysqli->query($sql);

if($result->num_rows != 1){
    die('Máquina não encontrada');
}
//Armazena o resultado
$data = $result->fetch_assoc();

//include('verifica_session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Máquina</title>
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
    <main class="container">
    <h2 class="d-flex justify-content-center mt-4">Editar Máquinas</h2>
        <form method="post" action="editar-maquina.php?id=<?= $id ?>" class="pt-3">
            <label for="serial" class="mt-1">Número de serial</label>
            <input class="form-control p-2 inputs" type="number" name="serial" id="serial" required value="<?= $data['serial'] ?>"></input>

            <section class="row">
                <div class="col">
                    <label for="modelo" class="mt-2">Modelo</label>
                    <input class="form-control p-2 inputs" name="modelo"  type="text" id="modelo" required value="<?= $data['modelo'] ?>"></input>
                </div>

                <div class="col">
                    <label for="fabricante" class="mt-2">Fabricante</label>
                    <input class="form-control p-2 inputs" type="text" name="fabricante" id="fabricante" required value="<?= $data['fabricante'] ?>"></input>
                </div>
            </section>

            <section class="row">
                <div class="col">
                    <label for="data" class="mt-2">Data Cadastro</label>
                    <input class="form-control p-2 col inputs" type="date" name="data" id="data" placeholder="dd/mm/aaaa" 
                        maxlength="8" autocomplete="on" required value="<?= $data['data'] ?>"></input>
                </div>

                <div class="col">
                    <label for="sistema_operacional" class="mt-2">Sistema Operacional</label>
                    <select class="form-select mt-1 inputs" type="text" name="sistema_operacional" id="sistema_operacional" aria-label="Default select example" value="<?= $data['sistema_operacional'] ?>">
                        <option>Selecione uma opção</option>
                            <option value="windows">Windows</option>
                            <option value="linux">Linux</option>
                            <option value="macOS">MacOS</option>
                    </select>
                </div>
            </section>

            <div class="form-floating mt-3">
                <textarea class="form-control inputs obs" name="observacoes" id="observacoes"><?= $data['observacoes'] ?></textarea>
                <label for="floatingTextarea">Observações</label>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn text-white p-2 mt-5 mb-3 btn-lg botao" name='editarForm'>Atualizar</button>
            </div>
        </form>
    </main>
</body>
</html>