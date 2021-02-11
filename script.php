<?php
//Inicializando uma sessão.
session_start();

//Fazendo conexão com o banco de dados.
 $link = mysqli_connect("localhost","root","","miniCrud");
// Verificando a conexão.
 if(!$link) {
     printf("Erro ao conectar ao banco de dados: ",mysqli_connect_errno());
 }

//Pegando as informações do formulário atraves do método POST.
$nome = filter_input(INPUT_POST,'nome');
$cpf = filter_input(INPUT_POST,'cpf');
$bairro = filter_input(INPUT_POST,'bairro');
$endereco = filter_input(INPUT_POST,'endereco');

//Verifcando se os campos não estão vazios.
if(!empty($nome) && !empty($cpf) && !empty($bairro) && !empty($endereco)){

    $_SESSION['form'] = 'cadastrado';
    // Criando uma variável para inserir dados no banco de dados.
    $query = "INSERT INTO cadastro (nome,cpf,bairro,endereco) VALUES ('$nome','$cpf','$bairro','$endereco')";
    // Redirecionando para a página home.
    header("Location: home.php");
   
}else{

    $_SESSION['aviso'] = 'Preecha todos os campos!';
    // Redirecionando para a página form.
    header("Location: form.php");
}
// Executando o comando SQL.
mysqli_query($link,$query);
//Fechando a conexão com o banco.
mysqli_close($link);
