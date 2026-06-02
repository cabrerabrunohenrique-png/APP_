
<?php include "inc-read.php";?>
<?php include "inc-menu.php";?>

<h1>Editar disco <?=$nome?></h1>

<form method ="post" action="discografia-visualizar.php?id=<?=$id?>">
    
    <label>Artista:</label>     
    <input name ="artista" value = "<?=$artista?>"> <br>
    <label for="">nome do album :</label>
    <input name ="nome" value = "<?$nome?>"> <br>
    <label for="">ano Lancamento</label>
    <input  type ="number" name ="ano" value ="<?=$ano?>"> <br>
    <label for="">tipo:</label>
    <select name="tipo" id="">
        <option value="album" <?php if($tipo =='ambum'){echo 'selected';} ?>>album</option>
        <option value="single"<?php if($tipo == 'single'){echo 'selected';}?>>album</option>
    </select>
    <label for="">foto</label>   

    <input name ="foto" value ="<?=$foto?>"> <br>
    <button type ="submit">Editar</button>


</form>