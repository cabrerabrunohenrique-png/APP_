<?php

$titulo_da_pagina = "Disco";
include("inc-head.php");
include("inc-menu.php");

?>

<body>
    <main class="container">
        <h1 class ="text-center fs2 mt-2 mb-4"> Discografia </h1>
            <div class="row">
                <?php
                include("inc-conexao.php");
                $sql = "select * from tb_discografia order by nomeArtista,anoLancamento";
                $resultado = mysqli_query($conexao,$sql);
                while($linha =mysqli_fetch_assoc($resultado)){
                   ?>
                <div class="bg-primary col -3">teste</div>
                    <div style ="background-image: url('<?=$linha['fotoAlbum'];?>');">
                        <div class="cor-cartao">
                            <div class="texto-cartao" >
                                <h1 class="fs-4"><?=$linha['nomeArtista'];?></h1>

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