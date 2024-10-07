<?php
session_start();
//destruir a sessão
session_destroy();
//limpar variaveis da sessão
unset($_SESSION['cpf']);
unset($_SESSION['senha']);

//manda para loggin
header('location: index.php');


?>