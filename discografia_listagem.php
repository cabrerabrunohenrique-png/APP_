<?php
$titulo_da_pagina = "discografia";
include "inc-head.php";
?>
<hr >
<body>
<?php
include "inc-menu.php"
?>

<main class = "container">
    <hr>

    <a href="discografia-formulario.php">Nova Discografia</a>

    <hr>

    <table class="table ">
        <tr>
            <td>id</td>
            <td>Artista</td>
            <td>Album</td>
            <td>ano Lancamento</td>
            <td>tipo</td>
            <td>fotoAlbum</td>
        </tr>
        <!--abri conexao -->
        <?php
        include "inc-conexao.php";
        
        //consultar os dados//

        $sql = "select * from tb_discografia order by id_tb_discografia";
        
        $result = mysqli_query($conexao, $sql);


        //lista os dados//

        while($linha_resultado = mysqli_fetch_array($result))
            {
              
                echo"<tr>";
                    echo "<td> {$linha_resultado['id_tb_discografia']} <td>";
               
                    echo 
                    "<td>
                        <a href ='discografia-visualizar.php?id={$linha_resultado['id_tb_discografia']}'>
                            {$linha_resultado['nomeArtista']}
                        </a>
                    </td>";
                    
                echo 
                "<td>
                    <a href ='discografia-visualizar.php?id={$linha_resultado['id_tb_discografia']}'>
                        {$linha_resultado['nomeAlbum']}
                    </a>
                </td>";

                echo "<td>
                    <a href='discografia-excluir.php?id={$linha_resultado['id_tb_discografia']}'>Excluir</a>
                    <a href='discografia-editar.php?id={$linha_resultado['id_tb_discografia']}'>Editar</a>
                </td>";

                echo "</tr>";
               
            }

            #fechar Conecao

            mysqli_close( $conexao );
        
        ?>


    </table>

</main>
<?php
include "inc-footer.php";
?>
<hr>

</body>