
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=undo" />
</head>
<body>
    <main>
        <section id="cadastro">
                <div class="titulo-conteudo">
                    <h1>Cadastrar Empresa</h1>
                </div>
                <div class="conteudo">
                    <div>
                        <form id="formulario" action="cadastrar-empresa.php" method="post" autocomplete="off">
                            <div>
                                <label>Nome</label>
                                <input type="text" name="nome" placeholder="Digite seu nome completo" required>
                                <div class="content">
                                    <button class="btn-cadastrar" type="submit" name="cadastrarEmpresa">Cadastrar</button>
                                    <button class="btn-limpar" type="reset" name="limpar">Limpar</button>
                                    <button class="btn-voltar" type="reset" name="limpar">
                                        <a href="index.php">Voltar</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
        </section>
        
    </main>
</body>
</html>