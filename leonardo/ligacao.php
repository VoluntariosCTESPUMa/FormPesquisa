<?php
require_once("config.php");
// Criar uma conexão
$conn=mysqli_connect(HOST, USER, PASS, BD);

// verificar a conexão

if (!$conn) {

    die("Conexao falhada: " . mysqli_connect_error());

}

mysqli_query($conn,"SET NAMES'utf8'");

mysqli_query($conn,'SET character_set_connection=utf8');

mysqli_query($conn,'SET character_set_client=utf8');

mysqli_query($conn,'SET character_set_results=utf8');

?>

