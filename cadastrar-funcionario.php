<?php

    include 'bd/conexao.php';
    
   
    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $rg = $_REQUEST['rg'];
    $email = $_REQUEST['email'];
    $empresa = $_REQUEST['id_empresa'];
    $salario = $_REQUEST['salario'];
    $data_cadastro = $_REQUEST['data_cadastro'];
    
    $dataAtual = date("Y");
    $data = date("Y", strtotime($data_cadastro));
    $verifica_periodo = $dataAtual - $data;

    if($verifica_periodo >= 1 && $verifica_periodo <= 5){
        
        $bonificacao = $salario + ($salario * 0.10);
    }
    elseif($verifica_periodo > 5){
        $bonificacao = $salario + ($salario * 0.20); 
    }
    else{
        $bonificacao = 0;
    }    
    
    $sql = "INSERT INTO `tbl_funcionario`(`id_funcionario`, `nome`, `cpf`, `rg`, `email`, `id_empresa`, `salario`, `data_cadastro`, `bonificacao` ) VALUES ('[value-1]','$nome','$cpf','$rg','$email','$empresa', '$salario', '$data_cadastro', $bonificacao)";
    
    
    $cadastrar = mysqli_query($conexao, $sql);
?>

<script>
    javascript:alert('Cadastro feito com sucesso!');
    javascript:window.location='index.php';
</script>