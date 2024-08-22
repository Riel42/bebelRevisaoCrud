<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar produto</title>
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
    <form action="../../model/amigos/consultanome.php" method="POST">
        <label for="">Digite o nome do usuário:</label><br>
        <input type="text" name="cxpesquisa" id="">

        <input type="submit" value="Pesquisar">
    </form>
</body>
</html>