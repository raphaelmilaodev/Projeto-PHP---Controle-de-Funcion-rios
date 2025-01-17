<?php

    include 'bd/conexao.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];

    $sql = "UPDATE `tbl_funcionario` SET `nome`='$nome',`cpf`='$cpf',`rg`='$rg',`email`='$email',`id_empresa`='$empresa' WHERE id_funcionario = $id";
    
    $atualizar = mysqli_query($conexao, $sql);
?>
<script>
    javascript:alert('Atualização feita com sucesso!');
    javascript:window.location='index.php';
</script>

