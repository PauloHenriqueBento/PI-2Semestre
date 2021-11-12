<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Máquinas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
    crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-primary bg-primary">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">Logo</a>
                <h1 class="text-white">Nome empresa</h1>
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
        <form class="pt-3">
            <label for="serial" class="mt-1">Número de serial</label>
            <input class="form-control p-2" id="serial" type="number" placeholder="Número de serial" required></input>

            <label for="marca" class="mt-2">Marca</label>
            <input class="form-control p-2" id="marca" type="text" placeholder="Marca"required></input>

            <label for="dt-cadastro" class="mt-2">Data Cadastro</label>
            <input class="form-control p-2" id="dt-cadastro" type="date" placeholder="dd/mm/aaaa" maxlength="8" autocomplete="on" required></input>

            <select class="form-select mt-3"  aria-label="Default select example">
                <option>Selecione uma opção</option>
                    <option value="windows">Windows</option>
                    <option value="linux">Linux</option>
                    <option value="macOS">MacOS</option>
            </select>

            <section class="form-floating mt-3">
                <textarea class="form-control" placeholder="Observações"></textarea>
                <label for="observacoesMaquinas">Observações</label>
            </section>

            <input type="submit" value="enviar" class="btn btn-primary form-control p-2 mt-5"></input>
        </form>
    </main>
</body>
</html>