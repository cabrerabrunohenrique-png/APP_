<?php

$titulo_da_pagina = "Disco";
include("inc-head.php");

?>

<body>
    <?php
    include("inc-menu.php");
    ?>

    <main class="container permanent-marker-regular" style="">
        <h1 class ="text-center fs2 mt-2 mb-4  "> aDiscografia </h1>
            <div class="row">
                <?php
                include("inc-conexao.php");
                $sql = "select * from tb_discografia order by nomeArtista,anoLancamento";
                $resultado = mysqli_query($conexao,$sql);
                while($linha =mysqli_fetch_assoc($resultado)){
                   ?>
                <div class="bg-primary col -3">foto</div>
                    <div style ="background-image: url('<?=$linha['fotoAlbum'];?>');">
                        <div class="cor-cartao">
                            <div class="texto-cartao" >
                                <h1 class="fs-4"><?=$linha['nomeArtista'];?>Nome do Artista</h1>
                                <h1 class ="fs-4"<?=$linha['nomeAlbum'];?>>Nome do Album</h1>
                                <h1 class="fs-4"<?=$linha['anoLancamento'];?>>Ano Lançamento</h1>

                            </div>

                        </div>
                    
                    </div>

              <?php 
                }
                      
                mysqli_close($conexao);     
                ?>    
                
            
            
            </div>
            
    </main>
    
<?php
  
include("inc-footer.php");
?>


</body>