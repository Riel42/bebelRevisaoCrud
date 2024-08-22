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
        table {
            margin: auto;
            width: 55%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        th {
            font-weight: bold;
            text-transform: uppercase;
        }

        td {
            font-size: 14px;
        }

        caption {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
            color: #333;
        }
    </style>
</head>
<body>
<a href="../../index.php" style="color: red; text-decoration: none">Voltar para o index</a>
    <hr>
    <form action="../../model/produto/consultanome.php" method="POST">
        <label for="">Digite o nome do usuário:</label><br>
        <input type="text" name="cxpesquisa" id="">

        <input type="submit" value="Pesquisar">
    </form>
        <br>
    <?php 
        include_once "../../factory/conexao.php";
        $consulta = "select * from tbprodutos";
        $executar = mysqli_query($caminho, $consulta);

        echo "<table>";
        echo "<tr>"; 
        echo "<td>Produto</td>";
        echo "<td>Fabricante</td>";
        echo "<td>Valor</td>"; 
        echo "</tr>";
        while($aux = mysqli_fetch_assoc($executar)) { 
            echo "<tr>"; 
            echo "<td>".$aux["produto"]."</td>"; 
            echo "<td>".$aux["fabricante"]."</td>"; 
            echo "<td>".$aux["valor"]."</td>"; 
            echo "</tr>"; 
          }
          echo "</table>";
    ?>
</body>
</html>