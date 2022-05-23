<?php require "views/shared/header.php" ?>

<?php 
    $conexion = mysqli_connect('localhost', 'root','Dfmm.03112002','airbnb_imagen');
?>

<div class="container">
    <br><br>
    <h1 class="text-center my-5" style="font-size:50px">
        <?php echo $dataArriendo["titulo"]; ?>
    </h1>
    <br>
    <table class="table text-center" style="font-size:20px">
        <thead >
            <tr>
                <th>Codigo:</th>
                <th>Nombre del cliente</th>
                <th>Nombre del apto</th>
                <th>Fecha Ingreso</th> 
                <th>Fecha Salida</th> 
            </tr>
        </thead>
        <tbody >
            <?php foreach ((array)$dataArriendo['arriendos'] as $item) { ?>
                <?php $row = $item['IDPERSONA'] ?>
                <?php $row2 = $item['IDAPTO'] ?>
                <tr>
                    
                    <td> <?= $item['CODARRIENDO'] ?></td>
                    
                    <?php 
        
                    $sql = "SELECT * FROM persona WHERE IDPERSONA = $row";
                    $resultado = mysqli_query($conexion,$sql);
                    while($mostrar = mysqli_fetch_array($resultado)){
                    ?>
                        <td><?php echo $mostrar['NOMBRE']?></td>
                    <?php
                    }
                    ?>

                    <?php 
        
                    $sql2 = "SELECT * FROM apartamento WHERE IDAPTO = $row2";
                    $resultado2 = mysqli_query($conexion,$sql2);
                    while($mostrar = mysqli_fetch_array($resultado2)){
                    ?>
                        <td><?php echo $mostrar['ALIASAPTO']?></td>
                    <?php
                    }
                    ?>

                    <td> <?= $item['FECHAINGRESO'] ?></td>
                    <td> <?= $item['FECHASALIDA'] ?></td>
                    <td>
                        <a href="index.php?controlador=arriendo&accion=viewArriendo&id=<?= $item['CODARRIENDO'] ?>" class="btn btn-info">Ver</a>

                        <a href="index.php?controlador=arriendo&accion=deleteArriendo&id=<?= $item['CODARRIENDO'] ?>" class="btn btn-danger">Borrar</a>
                    </td>
                <?php } ?>

                </tr>
                
            
        </tbody>
    </table>
    <br>
</div>

<?php require "views/shared/footer.php" ?>
