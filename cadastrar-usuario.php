<?php

    include 'bd/conexao.php';

   
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    $sql = "INSERT INTO `tbl_usuario`(`id_usuario`, `login`, `senha`) VALUES ('[value-1]','$login', '$password')";
    
    $cadastrar = mysqli_query($conexao, $sql);

    $sql2 = "UPDATE `tbl_usuario` SET `senha`= MD5($password) WHERE 1";
    $criptografar = mysqli_query($conexao, $sql2);

?>
<script>
    javascript:alert('Cadastro feito com sucesso!');
    javascript:window.location='index.php';
</script>

