<?php

$artista = $_POST["artista"];
$nomeAlbum = $_POST["nomeAlbum"];
$anoLancamento = $_POST["ano"];
$tipo = $_POST["tipo"];
$foto = $_POST["foto"];

echo"$artista, $nomeAlbum, $anoLancamento, $tipo, $foto";

#abri conexao

$conexao = mysqli_connect("localhost","root","","db_sportify");
if ($conexao) {
}

#inserir os dados

$slq = "insert int tb_discografia (nome, ano, artista, tipo, foto)
values ('$artista','$anoLancamento' ,'$nomeAlbum', '$tipo', '$foto' )";


$resultado = mysqli_query($conexao , $slq);

if ($resultado){
    echo "cadastro com sucesso";
}
else {
    echo "Deu algum problema";
}


#fechar conexao

mysqli_close($conexao);

?>