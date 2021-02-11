<?php

session_start();

// //Pegando o id do formulario atraves do método GET.
$id = $_GET['id'];

//Fazendo conexão com o banco de dados.
$link = mysqli_connect("localhost","root","","miniCrud");

// Verificando a conexão.
if(!$link) {
    printf("Erro ao conectar ao banco de dados: ",mysqli_connect_errno());
}
// query SQL para selecionar os dados.
$lista = mysqli_query($link, "SELECT * FROM cadastro WHERE  id='$id' ");

// Pegando a linha solicitada.
$linha = mysqli_fetch_array($lista);

// Fechando a conexão com o banco.
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar Dados Cadastrados</title>
    <style>
        body { text-align:center; }

        .retangulo {margin: auto; border: 1px solid black; position:
        relative;}

        #ret {width: 450px; background-color: georgian;}

        #ret div {
        margin: 20px auto;
        width: 50px;
        height: 50px;
        }
 </style>

</head>
<body>
    <div id="ret" class="retangulo" style= "text-aling:center";>
    <br/>
    <label for="" id="texto01">ATUALIZAÇÃO DE DADOS</label>
    <br><br>
    <form action="scriptAtualizar.php" method="post">
        <p >Nome Completo
        <input type="text" name="nome" value="<?=$linha['nome']?>"></p>
        <p>CPF: 
        <input type="text" name="cpf" value="<?=$linha['cpf'] ?>" /></p>
        <p>Bairro: 
        <input type="text" name="bairro" value="<?=$linha['bairro'] ?>" /></p>
        <p>Endereço: <input type="text" name="endereco" value="<?=$linha['endereco'] ?>" /></p>
        <input type="hidden" name="id" value="<?= $linha['id']?>"/>
        <p><input type="submit" name="submit" value="Atualizar"></p>
    
    </form>
</body>
</html>