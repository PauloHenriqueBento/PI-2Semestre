<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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
        <h2 class="d-flex justify-content-center mt-4">Cadastro</h2>
        <form class="pt-1">
            <label for="nome" class="mt-2">Nome completo</label>
            <input class="form-control p-2" id="nome" type="text" placeholder="Nome completo" required></input>

            <label for="RG" class="mt-2">RG</label>
            <input class="form-control p-2" id="rg" type="text" placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ required></input>

            <label for="cpf" class="mt-2">CPF</label>
            <input class="form-control p-2" id="cpf" type="text" placeholder="CPF" pattern="\d{2}\.\d{3}\.\d{3}-\d{2}" \ required></input>

            <label for="dt-nasc" class="mt-2">Data de Nascimento</label>
            <input class="form-control p-2" id="dt-nasc" type="date" placeholder="dd/mm/aaaa" maxlength="8" autocomplete="on" required></input>

            <section class="form-check mt-2">
                <input class="form-check-input" type="radio" name="sexo"></input>
                <labe class="form-check-label" for="masculino">Masculino</label>
            </section>
            <section class="form-check mt-2">
                <input class="form-check-input" type="radio" name="sexo"></input>
                <labe class="form-check-label" for="feminino">Feminino</label>
            </section>
            <section class="form-floating mt-2">
                <textarea class="form-control" placeholder="Observações"></textarea>
                <label for="observacoes">Observações</label>
            </section>

            <input type="submit" value="enviar" class="btn btn-primary form-control p-2 mt-5 mb-3"></input>
        </form>
    </main>
</body>
</html>