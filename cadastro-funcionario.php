
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
                    <h1>Cadastrar Funcionário</h1>
                </div>
                <div class="conteudo">
                    <div>
                        <form id="formulario" action="cadastrar-funcionario.php" method="post" autocomplete="off">
                            <div>
                                <label>Nome</label>
                                <input type="text" name="nome" placeholder="Digite seu nome completo" required>
                            </div>
                            <div>
                                <label>CPF</label>
                                <input type="text" name="cpf" placeholder="Digite seu CPF" required>
                            </div>
                            <div>
                                <label>RG</label>
                                <input type="text" name="rg" placeholder="Digite seu RG">
                            </div>
                            <div>
                                <label>E-mail</label>
                                <input type="text" name="email" placeholder="Digite seu E-mail" required>
                            </div>
                            <div>
                                
                                <label for="iempresa">Empresa</label>
                                <select name="empresa" id="iempresa" required>
                                    
                                    <?php
                                    include 'bd/conexao.php';
                                    $sql = "SELECT * FROM tbl_empresa";
                                    $busca = mysqli_query($conexao, $sql);

                                    while ($array = mysqli_fetch_array($busca)) {
                                    
                                        $id_empresa = $array['id_empresa'];
                                        $nome = $array['nome'];
                                    ?>
                                    <option><?php echo $nome ?></option>
                                    <?php } ?>
                                </select>
                                <input type="text" name="id_empresa" value="<?php echo $id_empresa?>" style = "display: none" >
                            </div>
                            <div>
                                <label>Salário</label>
                                <input type="number" name="salario" placeholder="Digite seu Salário no formato (10,0)" step="0.01" min="0">
                            </div>
                            <div>
                                <label>Data</label>
                                <input type="date" name="data_cadastro" required>
                            </div>
                            <div class="content">
                                <button class="btn-cadastrar" type="submit" name="cadastrarFuncionario">Cadastrar</button>
                                <button class="btn-limpar" type="reset" name="limpar">Limpar</button>
                                <button class="btn-voltar" type="reset" name="limpar">
                                <a href="index.php">Voltar</a></button>
                            </div>
                                                                              
                        </form>
                    </div>
                    
                </div>
        </section>
        
    </main>
</body>
</html>