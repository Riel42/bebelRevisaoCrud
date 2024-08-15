<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>
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
    <a href="../../index.php" style="color: red; text-decoration: none">Voltar para o index</a>
    <hr>
    <form action="../../model/produto/inserirproduto.php" method="post">
        <label for="">Produto:</label><br>
        <input type="text" name="cxproduto" id="">
        <br>
        <label for="">Fabricante:</label><br>
        <input type="text" name="cxfabricante" id="">
        <br>
        <label for="">Valor:</label><br>
        <input type="text" name="cxvalor" id="">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>