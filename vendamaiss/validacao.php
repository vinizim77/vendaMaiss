<?php
//iniciar sessão
session_start();

//se não exite variavel de sessão CPF ou SENHA
if(!isset($_SESSION["cpf"]) or !isset($_SESSION['senha'])){
    //DESTRUIR SESSÃO
    session_destroy();
    //limpar variaveis de sessão
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
    //manda para login
    header('location: index.php');

}
?>