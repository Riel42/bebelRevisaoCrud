<?php 
if($_POST["cxamigo"] != ""){
    include_once "../../factory/conexao.php";
    $amigo = $_POST["cxamigo"];
    $apelido = $_POST["cxapelido"];
    $email = $_POST["cxemail"];
    $sql = "insert into tbamigos(amigo, apelido, email) values('$amigo', '$apelido', '$email')";
    $executar = mysqli_query($caminho, $sql);
    echo "
    <script>
        alert('Produto cadastrado com sucesso!');
        document.location.href = '../../index.php';
    </script>";
}
else{
    echo "Dados não cadastrados!";
}
?>