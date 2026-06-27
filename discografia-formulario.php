<?php 
include "inc-head.php";
?>



<body>
    <?php include "inc-menu.php"; ?>
    <main>
        <?php
        include'inc-h1_Sportify.php'; ?>

        


        <div class="centro " style="">
            <h1 class="">Cadastro de discografia</h1>
        </div>
        <div class=' centro  ver' >
            <form class='ver card col-4' action="discografia_salvar.php" method ="post">
                    <div class=' mb-3 d-flex centro'>
                        <label class='form-label ' for="">nome Artista</label>
                        <input class='' type="text" name="nome">
                    </div>
                    <div class=' mb-3 d-flex centro'>
                        <label class='form-label' for="">Nome do Album</label>
                        <input type="text" name="album">
                    </div>
                    <div class='mb-3 d-flex centro'>
                        
                        <label  class='form-label' for="">Ano Lancamento</label>
                        <input type="number" name="ano">
                    </div>
                    <div class='mb-3 d-flex centro'>
                        <label  class='form-label' for="">tipo</label>
                        <select name="tipo" id="">
                            <option value=""></option>
                            <option value="album">album</option>
                            <option value="singer">singer</option>
                        
                        </select>
                    </div>
                    <div class='mb-3 d-flex centro' >
                        <label for="">foto</label>
                        <input type="text" name ="foto">                   
                    </div>
                    <div class=' mb-3 centro'>
                        <button  class=" btn btn-primary" type="submit">enviar</button>
                        
                        <button  class="btn btn-primary" type="reset">limpar</button>
                    </div>
            </form>
        </div>


        
    </main>

<footer>
    <div >
       <p>cabrera</p>
       <p>bhcabrera@hotmail.com</p> 

    </div>
</footer>

</body>
</html>