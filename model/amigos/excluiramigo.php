<?php
    include_once "../../factory/conexao.php";
    $nome = $_GET['nome'];
    $sql = "delete from tbamigos where amigo = '$nome'";
    $executar = mysqli_query($caminho, $sql);
    echo "
    <script>
        alert('Produto cadastrado com sucesso!');
        document.location.href = '../../index.php';
    </script>";
?>

