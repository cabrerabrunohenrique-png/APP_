<?php

$nomeArtista = $_POST["nomeArtista"];
$nomeAlbum = $_POST["nomeAlbum"];
$anoLancamento = $_POST["anoLancamento"];
$tipo = $_POST["tipo"];
$fotoAlbum = $_POST["fotoAlbum"];

echo"$nomeArtista, $nomeAlbum, $anoLancamento, $tipo, $fotoAlbum";

#abri conexao

$conexao = mysqli_connect("localhost","root","","db_sportify");
if (!$conexao) {
    die ("<h1>erro<h1>". mysqli_connect_error());
}

#inserir os dados

$slq = "insert into tb_discografia (nomeArtista, nomeAlbum, anoLancamento, tipo, fotoAlbum)
values ('$nomeArtista','$nomeAlbum' ,'$anoLancamento', '$tipo', '$fotoAlbum' )";


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