<?php 
    include 'bd/conexao.php';

    $id = $_GET['id'];
?>


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
                    <h1>Editar Funcionário</h1>
                </div>
                <div class="conteudo">
                    <div>
                        <form id="formulario" action="atualizar-funcionario.php" method="post" autocomplete="off">
                            <?php
                                $sql = "SELECT * FROM `tbl_funcionario` WHERE id_funcionario = $id";
                                $busca = mysqli_query($conexao, $sql);

                                while($array = mysqli_fetch_array($busca)){
                                    $id_funcionario = $array['id_funcionario'];
                                    $nome = $array['nome'];
                                    $cpf = $array['cpf'];
                                    $rg = $array['rg'];
                                    $email = $array['email'];
                                    $id_empresa = $array['id_empresa'];
                                    $data_cadastro = $array['data_cadastro'];
                                    $salario = $array['salario'];
                                    $bonificacao = $array['bonificacao'];
                            ?>
                            <div>
                                <label>Id</label>
                                <input type="text" name="id" value="<?php echo $id?>" disabled>
                                <input type="text" name="id" value="<?php echo $id?>" style = "display: none">
                            </div>
                            <div>
                                <label>Nome</label>
                                <input type="text" name="nome" value="<?php echo $nome?>">
                            </div>
                            <div>
                                <label>CPF</label>
                                <input type="text" name="cpf" value="<?php echo $cpf?>">
                            </div>
                            <div>
                                <label>RG</label>
                                <input type="text" name="rg" value="<?php echo $rg?>">
                            </div>
                            <div>
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $email?>">
                            </div>
                            <div>
                                <label for="iempresa">Empresa</label>
                                <select name="empresa" id="iempresa" value="<?php echo $id_empresa?>">
                                    <option value="" selected>---Selecione a Empresa---</option>
                                    <option value="">Empresa 1</option>
                                </select>
                            </div>
                            <div class="content">
                                <button class="btn-cadastrar" type="submit" name="editarFuncionario">Editar</button>
                                <button class="btn-limpar" type="reset" name="limpar">Limpar</button>
                                <button class="btn-voltar" type="reset" name="limpar">
                                    <a href="index.php">Voltar</a>
                                </button>
                            </div>
                        <?php   } ?>                                                  
                        </form>
                    </div>
                    
                </div>
        </section>
        
    </main>
</body>
</html>