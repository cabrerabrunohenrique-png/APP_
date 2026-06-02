<?php

$id = $_GET["id"];
$nome = $_POST["nome"];
$artista = $_POST["artista"];
$ano = $_POST["ano"];
$tipo = $_POST["tipo"];
$foto = $_POST["foto"];

include "inc-conexao.php";
$sql =" update tb_discografia set artista ='{$artista}', nome ='{$nome}', ano ='{$ano}', tipo ='{$tipo}', foto ='{$foto}' where id ={$id}";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

header('Location:discografia_listagem.php');


?>