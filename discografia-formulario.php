<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro </title>
</head>
<body>

<main>
    <?php include "inc-menu.php"; ?>
   

    <h1> SpotiFy</h1>

    <div>
        <div>
            <a href="discografia-formulario.php ">Nova Discografia</a>
        </div>
    </div>

</main>
   <div class="" style="border: 1px solid red;"  >
        <h1 class="">Cadastro de discografia</h1>
        <form action="discografia_salvar.php" method ="post">
            <label for="">nome Artista</label>
            <input type="text" name ="nomeArtista">
            <br>
            <label for="">Nome do Album</label>
            <input type="text" name = "nomeAlbum">
            <br>
            <label for="">Ano Lancamento</label>
            <input type="number" name ="anoLancamento">
            <br>

            <label for="">tipo</label>
            <select name="tipo" id="">
                <option value=""></option>
                <option value="album">album</option>
                <option value="singer">singer</option>
              
            </select>
            <br>
            <label for="">foto</label>
            <input type="type" name ="fotoAlbum">
            <br>
           


            <button type="submit">enviar</button>
            <button type="submit">limpar</button>
        </form>


    </div>

<footer>
    <div >
       <p>cabrera</p>
       <p>bhcabrera@hotmail.com</p> 

    </div>
</footer>

</body>
</html>