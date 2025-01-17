<?php 
    
    include 'bd/conexao.php';
    include 'script/validacao.php';

    $loginUsuario = $_POST['login'];
    $senhaUsuario = $_POST['password'];

    $sql = "SELECT login, senha FROM tbl_usuario WHERE login = '$loginUsuario' ";
    $consultaSql = mysqli_query($conexao, $sql);

    $total = mysqli_num_rows($consultaSql);

        if($total > 0){
            
                header('Location: index.php');
           
        }else{
            header('Location: erro.php');
        }
    
?>