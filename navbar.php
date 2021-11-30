
<header>
        <nav class="navbar navbar-expand-sm menu">
            <div class="container-sm position-relative">
                <div class="div-logo">
                    <a class="navbar-brand" href="tela-principal.php"><img src="image/logo.png" class="logo"></a>
                    <div class="div-titulo align-middle me-3">
                        <h1 class="text-white">Active</h1>
                    </div>
                </div>
              
                <div class="btn-group position-absolute end-0">
                    <!--
                    <div class="dropdown">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                                Funcionário
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="funcionario-cadastrado.php">Visualizar Funcionário</a></li>
                                <li><a class="dropdown-item" href="form_cadastro.php">Cadastrar Funcionário</a></li>
                            </ul>
                        </div>
                    </div>
                    -->
                    <div class="mt-1">
                        <span class="text-white fs-5"><a href="tela-principal.php" style="color: inherit; text-decoration: none">Home</a></span>
                    </div>

                    <div class="dropdown">
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                                Máquina
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="maquina-cadastrado.php">Visualizar Máquina</a></li>
                                <li><a class="dropdown-item" href="form_cadastro-maquina.php">Cadastrar Máquina</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse d-flex justify-content-end ms-1 me-2" id="expandir">
                        <form action="logout.php">
                            <button type="submit" class="btn btn-secondary text-white">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>