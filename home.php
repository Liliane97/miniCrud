<?php
session_start();
require_once('conexao.php');
// Verificando se foi setado e se não está vazio..
if(!empty(isset($_SESSION['form']))){
  
    // verifica se foi setado.
    if(isset($_SESSION['aviso'])){
        echo $_SESSION['aviso'];
        $_SESSION['aviso']=null;
       
    }
    // Link para sair.
    echo ' <a href="sair.php">Sair</a>';

}else{
    header("Location: form.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cadastros</title>

    <style>
       table,th,td{
           border-collapse:collapse;
       }
       th,td{
        padding: 5px;
       }
       th{
           text-align: left;
       }
       h2{
           
       }
    </style>
</head>
<body>
       <h2 style= "text-align:center">Lista de Cadastrados</h2>

       <table style = "width:100% ">
        <tr>
            <th>Nome Completo</th>
            <th>CPF</th>
            <th>Bairro</th>
            <th>Endereco</th>        
        </tr>

       <?php
      
    //   Instrução de repetição while com a função "mysqli_fetch_array".
       while($linha = mysqli_fetch_array($lista)){
        ?>
        <tr>
            <td><?=$linha['nome']?></td>
            <td><?=$linha['cpf']?></td>
            <td><?=$linha['bairro']?></td>
            <td><?=$linha['endereco']?></td>
            <td><a href="atualizarDados.php?id=<?=$linha['id']?>">atualizar</a></td>
            <td><a href="excluir.php?id=<?=$linha['id']?>">Excluir</a></td>
         </tr>

         <?php
       }
       ?>
       </table>
    
</body>
</html>