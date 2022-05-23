<?php require "views/shared/header.php" ?>

    <div class="container">
        <br><br><br>
        <h1 class="text-center my-5" style="font-size:40">
            <img src="https://img.icons8.com/dusk/100/000000/add-rule.png"/>
            <?php echo $dataApto["titulo"]; ?>
        </h1>
        <form action="index.php?controlador=apto&accion=storeApto" method="post" enctype="multipart/form-data" style="margin-left:350px; margin-right:300px">
            <div class="mb-3">
                <label>Apartamento</label>
                <input type="text"  required name="alias" placeholder="Nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label>Direccion: </label>
                <input type="text" required name="direApto" placeholder="0" class="form-control">
            </div>
            <div class="mb-3">
                <label>Cantidad de camas: </label>
                <input type="number" required name="canCamas" placeholder="0" class="form-control">
            </div>
            <div class="mb-3">
                <label>Capacidad: </label>
                <input type="number" required name="capacidad" placeholder="Numero de personas" class="form-control">
            </div>
            <div class="mb-3">
                <label>Precio por día: </label>
                <input type="number" required name="precioDia" placeholder="$" class="form-control">
            </div>
            <div class="mb-3">
                <label>Selecione la imagen: </label>
                <input type="file"required  name="imagen" placeholder="0" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


<?php require "views/shared/footer.php" ?>