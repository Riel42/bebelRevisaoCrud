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
    <form action="../../model/amigos/inseriramigo.php" method="post">
        <label for="">Amigo:</label><br>
        <input type="text" name="cxamigo" id="">
        <br>
        <label for="">Apelido:</label><br>
        <input type="text" name="cxapelido" id="">
        <br>
        <label for="">E-mail:</label><br>
        <input type="text" name="cxemail" id="">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>