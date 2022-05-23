<?php require "views/shared/header.php" ?>

<?php 
    $conexion = mysqli_connect('localhost', 'root','Dfmm.03112002','airbnb_imagen');
?>

<div class="container" style="font-size:20px">
    <br><br><br>
    <h1 class="text-center" style="font-size:50px"><?= $dataArriendo['titulo'];?> </h1>
    <br><br>
    <p>
        <span class="fw-bold">ID: </span>
        <?=$dataArriendo['arriendos']['CODARRIENDO'];?>
    </p>
    
    <?php $row = $dataArriendo['arriendos']['IDPERSONA'];?>

    <?php 
        
        $sql = "SELECT * FROM persona WHERE IDPERSONA = $row";
        $resultado = mysqli_query($conexion,$sql);
        while($mostrar = mysqli_fetch_array($resultado)){
    ?>

    <p>
        <span class="fw-bold">Nombre cliente: </span>
        <?php echo $mostrar['NOMBRE']?>
    </p>
    <?php
        }
    ?>

    <?php 
        $row2 = $dataArriendo['arriendos']['IDAPTO'];
        
        $sql2 = "SELECT * FROM apartamento WHERE IDAPTO = $row2";
        $resultado2 = mysqli_query($conexion,$sql2);
        while($mostrar2 = mysqli_fetch_array($resultado2)){
    ?>

        <p>
            <span class="fw-bold">Apartamento: </span>
            <?php echo $mostrar2['ALIASAPTO']?>
        </p>
        <p>
            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar2['IMAGEN']); ?> " 
                width="400px">
        </p>    

    <?php 
        }
    ?>
    <p>
        <span class="fw-bold">Fecha Ingreso: </span>
        <?=$dataArriendo['arriendos']['FECHAINGRESO'];?>
    </p>
    <p>
        <span class="fw-bold">Fecha Salida: </span>
        <?=$dataArriendo['arriendos']['FECHASALIDA'];?>
    </p>

    <a href="index.php?controlador=arriendo&accion=listarArriendos" class="btn btn-primary my-3">Regresar</a>
</div>

<?php require "views/shared/footer.php" ?>