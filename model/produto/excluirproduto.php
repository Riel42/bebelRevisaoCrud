<?php
    include_once "../../factory/conexao.php";
    $produto = $_GET['produto'];
    $sql = "delete from tbprodutos where produto = '$produto'";
    $executar = mysqli_query($caminho, $sql);
    echo "
    <script>
        alert('Produto cadastrado com sucesso!');
        document.location.href = '../../index.php';
    </script>";
?>

