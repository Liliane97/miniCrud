<?php
session_start();
include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="script.php" method="post">
        <label for="">Nome Completo: </label><br/>
        <input type="text" name="nome"><br/>
        <label for="">CPF:</label><br/>
        <input type="text" name="cpf" id=""><br/>
        <label for="">Bairro:</label><br/>
        <input type="text" name="bairro"><br/>
        <label for="">Endereco:</label><br/>
        <input type="text" name="endereco" id=""> <br/><br/>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>