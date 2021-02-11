<?php
//Fazendo conexão com o banco de dados.
$link = mysqli_connect("localhost","root","","miniCrud");
// Verificando a conexão.
if(!$link) {
    printf("Erro ao conectar ao banco de dados: ",mysqli_connect_errno());
}
//Pegando as informações do formulário atraves do método POST.
$id = filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST,'nome');
$cpf = filter_input(INPUT_POST,'cpf');
$bairro = filter_input(INPUT_POST,'bairro');
$endereco = filter_input(INPUT_POST,'endereco');

// Criando uma variável pra atualizar os dados.
$atualizar = "UPDATE cadastro SET  nome='$nome',cpf='$cpf',bairro='$bairro',endereco='$endereco' WHERE id='$id' ";

// Executando o comando SQL.
mysqli_query($link,$atualizar);

// Redirencionando para a página home.
header("Location: home.php");
// Fechando a conexão com o banco.
mysqli_close($link);