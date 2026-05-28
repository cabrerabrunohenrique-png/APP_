    <?php
    include "inc-head.php";
   
    $titulo_da_pagina = "visualizar discografia";
    include "inc-conexao.php";

    
    $id = $_GET ['id'];    

    $sql = "select * from tb_discografia where id_tb_discografia = $id";
   
    $result = mysqli_query($conexao, $sql);


    $foto = $artista = $nome = $ano = $tipo ="";
    while ($linha = mysqli_fetch_assoc($result)){
        $artista = $linha['nomeArtista'];
        $nome = $linha ['nomeAlbum'];
        $foto =$linha ['fotoAlbum'];
        $ano = $linha ['anoLancamento'];
        $tipo = $linha ['tipo'];

    }
    
    
    ?>

    <body>
        <?php include "inc-menu.php";?>
        <main>
            <h1>Visualizar Discografia</h1>
            Foto: <img src="<?php echo $foto ;?>" alt="<?=$nome ?>"> <br>
            Artista: <?php echo $artista;?> <br>
            Nome do album: <?php echo $nome;?> <br>
            Ano Lançamento: <?php echo $ano; ?> <br>
            Tipo: <?php echo $tipo ?> <br>
        </main>
    </body>
    <?php
    mysqli_close( $conexao );
    include "inc-footer.php";
    ?>