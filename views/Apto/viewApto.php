<?php require "views/shared/header.php"?>
<br>
<br>
<br>
<div class="container text-center" style="font-size:20px">
    <h1 class="text-center"><?= $dataApto['titulo'];?> </h1>
    <br>
    <h3 class="text-center">
        <?=$dataApto['apto']['ALIASAPTO'];?>
    </h3> 
    <br>
    <div>
        <img src="data:image/jpg;base64,<?php echo base64_encode($dataApto['apto']['IMAGEN']); ?> " 
        width="400px"> <br><br>
        <a href="index.php?controlador=apto&accion=editApto&id=<?= $dataApto['apto']['IDAPTO'] ?>" class="btn btn-outline-warning">Editar</a>
                        
        <a href="index.php?controlador=apto&accion=deleteApto&id=<?= $dataApto['apto']['IDAPTO'] ?>" class="btn btn-outline-danger">Borrar</a><br>
    </div>
    
    <p><br>
        <span class="fw-bold">Direccion: </span>
        <?=$dataApto['apto']['DIREAPTO'];?>
    </p>
    <p>
        <span class="fw-bold">Cantidad de camas: </span>
        <?=$dataApto['apto']['CANCAMAS'];?>
    </p>
    <p>
        <span class="fw-bold">Capacidad (personas): </span>
        <?=$dataApto['apto']['CAPACIDADAPTO'];?>
    </p>
    <p>
        <span class="fw-bold">Precio por día: </span>
        <?=$dataApto['apto']['PRECIOXDIA'];?>
    </p>

    <a href="index.php?controlador=apto&accion=listarAptoPpl" class="btn btn-primary my-3">Regresar</a>
                    
</div>

<?php require "views/shared/footer.php"?>