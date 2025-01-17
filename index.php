
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">   
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    
</head>
<body>
    <main>
        <section id="lista-funcionario">
                <div class="titulo-conteudo">
                    <h1>Lista de Funcionários cadastrados</h1>
                </div>
                <div>
                    
                </div>
                <div id="conteudo" class="conteudo">
                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>CPF</td>
                                <td>RG</td>
                                <td>E-mail</td>
                                <td>Id da Empresao</td>
                                <td>Data de Cadastro</td>
                                <td>Salário</td>
                                <td>Bonificação</td>
                                <td>Ação</td>
                            </tr>
                        </thead>
                                <?php 
                                    include 'bd/conexao.php';
                                    
                                    
                                    $sql = "SELECT * FROM tbl_funcionario";
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
                        <tr
                            <?php 
                            
                            $dataAtual = date("Y");
                            $data = date("Y", strtotime($data_cadastro));
                            $verifica_periodo = $dataAtual - $data;

                            if($verifica_periodo >= 1 && $verifica_periodo <= 5){
                                
                                $bonificacao = $salario + ($salario * 0.10);
                            ?> class = "blue"
                            <?php }
                            elseif($verifica_periodo > 5){
                                $bonificacao = $salario + ($salario * 0.20); ?>
                                class = "red" 
                            <?php }
                            else{
                                $bonificacao = 0;
                            }    
                            ?>        
                        >
                                <td><?php echo $id_funcionario?></td>
                                <td><?php echo $nome?></td>
                                <td><?php echo $cpf?></td>
                                <td><?php echo $rg?></td>
                                <td><?php echo $email?></td>
                                <td><?php echo $id_empresa?></td>
                                <td><?php echo $data = date("d/m/Y", strtotime($data_cadastro)); ?></td>                              
                                <td><?php 
                                        $valorString = number_format($salario, 2, ',', '.');
                                        $salario = $valorString;
                                        echo "R$" . $salario;
                                ?></td>
                                <td><?php 
                                        $valorString = number_format($bonificacao, 2, ',', '.');
                                        $bonificacao = $valorString;            
                                        echo "R$" . $bonificacao; 
                                ?></td>
                                <td>
                                    <a href="editar-funcionario.php?id=<?php echo $id_funcionario ?>"><button class="btn-editar" type="submit" name="editar">Editar</button></a>

                                    <a href="excluir-funcionario.php?id=<?php echo $id_funcionario ?>"><button class="btn-excluir" type="submit" name="excluir">Excluir</button></a>
                                </td>
                                <?php } ?>
                                
                        </tr>
                    </table>
                    <div class="content">
                        <a href="cadastro-funcionario.php"><button class="btn-cadastrar" type="submit" name="cadastrarFuncionario">Cadastrar Funcionário</button></a>

                        <a href="cadastro-empresa.php"><button class="btn-cadastrar" type="submit" name="cadastrarEmpresa">Cadastrar Empresa</button></a>

                        <button id="btn-exportar" type="submit" name="exportar-pdf" onclick="gerarPdf ()">Exportar PDF</button>

                        <a href="login.php"><button id="btn-sair" type="submit" name="sair">Sair</button></a>
                    </div>
                </div>
        </section>
        
    </main>
</body>
</html>







