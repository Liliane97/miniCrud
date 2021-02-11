<?php
//Fazendo conexão com o banco de dados.
$link = mysqli_connect("localhost","root","","miniCrud");
// Verificando a conexão.
if(!$link) {
    printf("Erro ao conectar ao banco de dados: ",mysqli_connect_errno());
}
// Criando uma variável para listar os dados.
$lista = mysqli_query($link, "SELECT * FROM cadastro");
// Fechando a conexão com o banco.
mysqli_close($link);