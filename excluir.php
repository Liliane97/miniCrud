<?php
//Fazendo conexão com o banco de dados.
$link = mysqli_connect("localhost","root","","miniCrud");
// Verificando a conexão.
if(!$link){
    printf("Erro ao conectar ao banco de dados: ",
    mysqli_connect_errno() );
}
//Pegando o id do formulario atraves do método GET.
$id=$_GET['id'];
// Criando uma variável pra excluir um dado.
$delete = "DELETE FROM cadastro  WHERE id=$id";
// Executando comandos SQL.
mysqli_query($link,$delete);

// Redirecionando para a página home.
header("Location: home.php");
// Fechando a conexão com o banco.
mysqli_close($link);