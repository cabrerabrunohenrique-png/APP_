<?php

$id = $_GET["id"];
$nome = $_POST["nome"];
$album = $_POST["album"];
$ano = $_POST["ano"];
$tipo = $_POST["tipo"];
$foto = $_POST["foto"];

include "inc-conexao.php";
$sql =" update tb_discografia set nomeArtista ='{$nome}', nomeAlbum ='{$album}', anoLancamento ={$ano}, tipo ='{$tipo}', fotoAlbum ='{$foto}' where id_tb_discografia ={$id}";

$result = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('Location:discografia_listagem.php');


?>