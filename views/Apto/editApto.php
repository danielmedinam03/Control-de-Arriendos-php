<?php require "views/shared/header.php" ?>

<div class="container">
    <br><br>
    <h1 class="text-center my-5">
        <?= $dataApto['titulo'] ?>
    </h1>

    <form action="index.php?controlador=apto&accion=updateApto" method="post" enctype="multipart/form-data">

        <input type="hidden" name="idApto" value="<?=$dataApto['apto']['IDAPTO']?>">
        
        <div class="mb-3">
            <label>Alias: </label>
            <input type="text" name="aliasApto" class="form-control" value="<?=$dataApto['apto']['ALIASAPTO'];?>">
        </div>
        <div class="mb-3">
            <label>Direccion: </label>
            <input type="text" name="direApto" class="form-control" value="<?=$dataApto['apto']['DIREAPTO'];?>">
        </div>
        <div class="mb-3">
            <label>Cantidad de camas: </label>
            <input type="number" name="canCamas" class="form-control" value="<?=$dataApto['apto']['CANCAMAS'];?>">
        </div>
        <div class="mb-3">
            <label>Capacidad: </label>
            <input type="number" name="capacidad" class="form-control" value="<?=$dataApto['apto']['CAPACIDADAPTO'];?>">
        </div>
        <div class="mb-3">
            <label>Precio por día: </label>
            <input type="number" name="precioDia" class="form-control" value="<?=$dataApto['apto']['PRECIOXDIA'];?>">
        </div>
        <div class="mb-3">
            <label>Selecione la imagen: </label><br>
            <img src="data:image/jpg;base64,<?php echo base64_encode($dataApto['apto']['IMAGEN']); ?>"
                    width='200px'>
            <input type="file" name="imagen" class="form-control" value="data:image/jpg;base64,<?php echo base64_encode($dataApto['apto']['IMAGEN']);?>">
            
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="index.php?controlador=apto&accion=viewApto&id=<?=$dataApto['apto']['IDAPTO']?>" class="btn btn-primary my-3">Regresar</a><br>
        

    </form>

</div>

<?php require "views/shared/footer.php" ?>