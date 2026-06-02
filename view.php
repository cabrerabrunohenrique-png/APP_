<!DOCTYPE html>
<html lang="en">
    <?php
        $titulo_da_pagina = "Visualização";
        include("inc-head.php");
    ?>
<body>
    <?php
    include ("inc-menu.php");
        

        $id = $_GET ['id'];
        $artista = $nome = $foto = $ano = $tipo = "";

        $sql = "select * from tb_discografia where id = $id";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
            $artista =  $linha["artista"];
            $nome =  $linha["nome"];
            $foto =  $linha["foto"];
            $ano =  $linha["ano"];
            $tipo =  $linha["tipo"];
        }
    ?> 
    
    <main class="container mt-5">

        <form action="" class="d-flex">
            <label class="form-label me-1" for="number">ID Discografia</label>
            <input class="form-control" type="number" style="width: 50px;">
        </form>

        <h1>Visualizar Discografia</h1>
        <div class="container d-flex mt-5">
            <img src="<?php echo $foto;?>" alt="<?php echo $nome?>" style="with: 260px; height: 260px; margin-bottom: 5rem;"><br>
            <div class="ms-5 d-flex flex-column gap-1">
                <h5>Artista: </h5><?php echo $artista;?>
                <h5>Nome do Álbum: </h5><?php echo $nome;?>
                <h5>Ano de Lançamento: </h5><?php echo $ano;?>
                <h5>Tipo: </h5><?php echo $tipo;?>
            </div>
        </div>
    </main>

    <?php
        include("footer.php");
    ?>