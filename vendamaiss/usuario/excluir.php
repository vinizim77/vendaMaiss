<?php
include '../conexao.php';

$id = $_REQUEST['id'];
$sql = "delete from usuario where id= '$id' ";

$resultado = mysqli_query($conexao, $sql);
header(" Location:../principal.php");
?>