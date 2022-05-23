<?php require "views/shared/header.php" ?>

<?php 
    $conexion = mysqli_connect('localhost', 'root','Dfmm.03112002','airbnb_imagen');
?>


<div class="container">
    <br><br>
    <h1 class="text-center my-5" style="font-size:40">

        <?php echo $dataArriendo["titulo"]; ?>
    </h1>
    <form action="index.php?controlador=arriendo&accion=storeArriendo" method="post" style="font-size:16px">
        

        <div class="form-group mb-3">
            <label for="exampleFormControlSelect1">Nombre del cliente:</label>
            <select class="form-control" id="exampleFormControlSelect1" name="idCliente">
                <?php 
                    $sql = "SELECT * FROM persona";
                    $resultado = mysqli_query($conexion,$sql);
                    while($mostrar = mysqli_fetch_array($resultado)){
                    ?>
                        <option value="<?= $mostrar['IDPERSONA'] ?>"><?php echo $mostrar['NOMBRE'] ?></option>
                <?php
                    }
                ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="exampleFormControlSelect1">Nombre Apartamento:</label>
            <select class="form-control" id="exampleFormControlSelect1" name="idApto">
                <?php 
                    $sql2 = "SELECT * FROM apartamento";
                    $resultado2 = mysqli_query($conexion,$sql2);
                    while($mostrar2 = mysqli_fetch_array($resultado2)){
                    ?>
                        <option value="<?= $mostrar2['IDAPTO'] ?>"><?php echo $mostrar2['ALIASAPTO'] ?></option>
                <?php
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Fecha de ingreso:</label>
            <input class="form-control" require name="fechaIngreso" type="date" placeholder="" aria-label="default input example">
        </div>
        <div class="mb-3">
            <label>Fecha de salida:</label>
            <input class="form-control" require name="fechaSalida" type="date" placeholder="" aria-label="default input example">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>

    </form>

</div>

<?php require "views/shared/footer.php" ?>