<?php
    $servidor = "localhost:3306"; //porta onde está meu servidor, ou seja, na minha máquina (localhost) na porta 3306
    $user = "root";
    $senha = "";
    $banco = "bdvendas";
    $caminho = mysqli_connect($servidor, $user, $senha, $banco);
?>