

<?php
    $id = $_GET['id'];

    include "inc-conexao.php";

    $sql = "select * from tb_discografia where id_tb_discografia = {$id}";
    $resultado = mysqli_query($conexao, $sql);

    $nome = $artista = $foto = $tipo = $ano = "";

    while($linha = mysqli_fetch_assoc($resultado)){
        $nome = $linha['nomeArtista'];
        $artista = $linha['nomeAlbum'];
        $foto = $linha['fotoAlbum'];
        $tipo = $linha['tipo'];
        $ano = $linha['anoLancamento'];
    }



$titulo_da_pagina ="atualizar";
include ('inc-head.php');
include('inc-menu.php');
?>;

<main class="container">
    <div class ="d-flex shadow bg-white rounded-4">
        <h1 >Editar disco <?=$nome?></h1>
    </div>
    <form method ="post" action="discografia-visualizar.php?id=<?=$id?>">
    
    <div class="container shadow ">
        <label>Artista:</label>     
        <input name ="artista" value = "<?=$nome?>"> <br>
        <label for="">nome do album :</label>
        <input name ="nome" value = "<?=$artista?>"> <br>
        <label for="">ano Lancamento</label>
        <input  type ="number" name ="ano" value ="<?=$ano?>"> <br>
        <label for="">tipo:</label>
        <select name="tipo" id="">
            <option value="album" <?php if($tipo =='ambum'){echo 'selected';} ?>>album</option>
            <option value="single"<?php if($tipo == 'single'){echo 'selected';}?>>single</option>
        </select>
        <label for="">foto</label>   

        <input name ="foto" value ="<?=$foto?>"> <br>
    </div>    
    <button type ="submit">Editar</button>


    </form>

</main>

<?php
mysqli_close( $conexao );

?>
