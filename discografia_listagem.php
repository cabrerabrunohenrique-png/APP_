<?php
$titulo_da_pagina = "discografia";
include "inc-head.php";
?>
<hr >
<body>
<?php
include "inc-menu.php"
?>
<hr>

<a href="discografia-formulario.php">Nova Discografia</a>

<hr>

<table>
    <tr>
        <td>id</td>
        <td>nomeArtista</td>
        <td>nomeAlbum</td>
        <td>anoLancamento</td>
        <td>tipo</td>
        <td>fotoAlbum</td>
        <td>acao</td>
    </tr>

    <!--abri conexao -->
    <?php
    include "inc-conexao.php";
    
    //consultar os dados//

    $sql = "select * from tb_discografia order by nomeArtista, anoLancamento";
    $result = mysqli_query($conexao, $sql);


    //lista os dados//

    while($linha_resultado = mysqli_fetch_array($result))
        {
            
            echo"<tr>";
            echo "<td> {$linha_resultado['id_tb_discografia']} <td>";
            echo "<td> {$linha_resultado['nomeArtista']} <td>";
            echo "<td> <a href ='discografia-visualizar.php?id={$linha_resultado['id_tb_discografia']}'>
            Visualizar
            </a> <td>";
            
            

             echo "<td> {$linha_resultado['nomeAlbum']} <td>";
            echo "<td> {$linha_resultado['anoLancamento']} <td>";
            echo "<td> {$linha_resultado['tipo']} <td>";
             echo "<td>
                    <a href ='discografia-editar.php?id={$linha_resultado['id_tb_discografia']}'>editar
                    </a> <br>";
            
            echo "<td> <a href ='discografia-excluir.php? id ={$linha_resultado['id_tb_discografia']}>escluir
                </a>";
            echo "</td>";
        }

        #fechar Conecao

        mysqli_close( $conexao );
    
    ?>


</table>


<?php
include "inc-footer.php";
?>
<hr>

</body>