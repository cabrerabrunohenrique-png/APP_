<?php

$nome = $_POST["nome"];
$album = $_POST["album"];
$ano = $_POST["ano"];
$tipo = $_POST["tipo"];
$foto = $_POST["foto"];

echo"$nome $album $ano $tipo $foto";

/*abri conexao*/ 

$conexao = mysqli_connect("localhost","root","","db_sportify");
if (!$conexao) {
    die ("<h1>erro<h1>". mysqli_connect_error());
}

#inserir os dados

$slq = "insert into tb_discografia (nomeArtista, nomeAlbum, anoLancamento, tipo, fotoAlbum)
values   ('$nome','$album' ,'$ano', '$tipo', '$foto' )";


$resultado = mysqli_query($conexao ,$slq);

if ($resultado){
    echo "cadastro com sucesso";
}
else {
    echo "Deu algum problema";
}


#fechar conexao

mysqli_close($conexao);

?>