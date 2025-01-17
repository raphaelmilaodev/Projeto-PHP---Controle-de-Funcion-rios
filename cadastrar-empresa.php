<?php

    include 'bd/conexao.php';

   
    $nome = $_REQUEST['nome'];

    $sql = "INSERT INTO `tbl_empresa`(`id_empresa`, `nome`) VALUES ('[value-1]','$nome')";
    
    
    $cadastrar = mysqli_query($conexao, $sql);
?>
<script>
    javascript:alert('Cadastro feito com sucesso!');
    javascript:window.location='index.php';
</script>

