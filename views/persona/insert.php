<?php require "views/shared/header.php" ?>

    <div class="container" >
        
        <br><br><br><br>
        <h1 class="text-center my-5" style="font-size:40">
            <img src="https://img.icons8.com/cotton/100/000000/add-male-user--v2.png"/>
            <?php echo $data["titulo"]; ?>
        </h1><br>
        <form action="index.php?controlador=persona&accion=store" method="post"style="margin-left:350px; margin-right:300px">
            <div class="mb-3">
                <label>Nombre del titular:</label>
                <input type="text" required name="nombre" placeholder="Nombre" class="form-control" >
            </div>
            <div class="mb-3">
                <label>Direccion de residencia: </label>
                <input type="text" required name="direccion" placeholder="0" class="form-control ">
            </div>
            <div class="mb-3">
                <label>Origen: </label>
                <input type="text" required name="origen" placeholder="0" class="form-control">
            </div>
            <div class="mb-3">
                <label>Numero de acompañantes: </label>
                <input type="number" required name="numAcompanantes" placeholder="0" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


<?php require "views/shared/footer.php" ?>