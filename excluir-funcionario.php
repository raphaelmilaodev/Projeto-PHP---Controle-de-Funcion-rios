
<script>

<?php

include 'bd/conexao.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM `tbl_funcionario` WHERE id_funcionario = $id";

$excluir = mysqli_query($conexao, $sql);
?>
    javascript:alert('Atualização feita com sucesso!');
    javascript:window.location='index.php';
</script>

