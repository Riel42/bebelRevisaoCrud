<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar nome</title>
    <style>
        body{
            margin: auto;
            width: 55%;
            text-align: center;
        }
        a{
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
    <?php 
        include_once "../../factory/conexao.php";
        $pesquisa = $_POST["cxpesquisa"];
        $consulta = "select * from tbprodutos where produto = '$pesquisa'";
        $executar = mysqli_query($caminho, $consulta);
        $linha = mysqli_fetch_array($executar);
        if($linha){
    ?>
    <label for="">Produto:</label> <br>
    <input type="text" value="<?php echo $linha["produto"]?>"><br>

    <label for="">Fabricante</label> <br>
    <input type="text" value="<?php echo $linha["fabricante"]?>"><br>

    <label for="">Valor:</label> <br>
    <input type="text" value="<?php echo $linha["valor"]?>"><br>
    <?php } else{
        echo "<script>
            alert('Dados não encontrados!');
            window.location.href = '../../view/produto/telaconsultanome.php';
        </script>";
    }?>
    <a href="">Alterar</a> |
    <a href="excluirproduto.php?produto=<?php echo $pesquisa?>">Excluir</a>
</body>
</html>