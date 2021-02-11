<?php
// Verificando se foi setado.
if(isset($_SESSION['aviso'])) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = null;
}


