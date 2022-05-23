<?php require "views/shared/header.php"?>

<div class="container" style="font-size:20px">
    <br><br><br>
    <h1 class="text-center" style="font-size:50px"><?= $data['titulo'];?> </h1>
    <br><br>
    <p>
        <span class="fw-bold">ID: </span>
        <?=$data['persona']['IDPERSONA'];?>
    </p>
    <p>
        <span class="fw-bold">Nombre: </span>
        <?=$data['persona']['NOMBRE'];?>
    </p>
    <p>
        <span class="fw-bold">Direccion: </span>
        <?=$data['persona']['DIREPERSONA'];?>
    </p>
    <p>
        <span class="fw-bold">Origen: </span>
        <?=$data['persona']['ORIGENPERSONA'];?>
    </p>
    <p>
        <span class="fw-bold">Numero de Acompañantes: </span>
        <?=$data['persona']['NUMACOMPANANTES'];?>
    </p>

    <a href="index.php?controlador=persona" class="btn btn-primary my-3">Regresar</a>
</div>

<?php require "views/shared/footer.php"?>
