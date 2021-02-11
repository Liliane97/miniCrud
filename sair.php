<?php
session_start();
// Verificando se foi setado e fechar a sessão.
if(isset($_SESSION['form'])){
    unset($_SESSION['form']);
    unset($_SESSION['aviso']);
}
// Redirecionando pra a página form.
header("Location:form.php");
exit;