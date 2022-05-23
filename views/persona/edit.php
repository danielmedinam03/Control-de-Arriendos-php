<?php require "views/shared/header.php"?>

<div class="container">
    <br><br><br><h1 class="text-center my-5">
        <?=$data['titulo']?>
    </h1>

    <form action="index.php?controlador=persona&accion=update" method="post" >

        <input type="hidden" name="id" value="<?=$data['id']?>">
        <div class="mb-3">
            <label >Nombre: </label>
            <input type="text" class="form-control" name="nombre" value="<?=$data['persona']['NOMBRE']?>">
        </div>
        <div class="mb-3">
            <label >Direccion: </label>
            <input type="text" class="form-control" name="direccion" value="<?=$data['persona']['DIREPERSONA']?>">
        </div>
        <div class="mb-3">
            <label >Origen: </label>
            <input type="text" class="form-control" name="origen" value="<?=$data['persona']['ORIGENPERSONA']?>">
        </div>
        <div class="mb-3">
            <label >Numero de acompañantes: </label>
            <input type="number" class="form-control" name="numAcompanantes" value="<?=$data['persona']['NUMACOMPANANTES']?>">
        </div>
        
        <button type= "submit" class="btn btn-primary">Guardar</button>

    </form>

</div>

<?php require "views/shared/footer.php"?>