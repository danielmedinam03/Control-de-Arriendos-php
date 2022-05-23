<?php require "views/shared/header.php" ?>

<?php
$conexion = mysqli_connect('localhost', 'root', 'Dfmm.03112002', 'airbnb_imagen');
?>

<div class="container">
    <br><br>
    <h1 class="text-center my-5" style="font-size:50px">
        <?php echo $dataArriendo["titulo"]; ?>
    </h1>
    <br>
    <table class="table text-center" style="font-size:20px">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Nombre del apto</th>
                <th>Fecha Ingreso</th>
                <th>Fecha Salida</th>
                <th>Dias Alquilados</th>
                <th>Valor a pagar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ((array)$dataArriendo['arriendos'] as $item) { ?>
                <?php $row = $item['IDPERSONA'] ?>
                <?php $row2 = $item['IDAPTO'] ?>
                <tr>

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
                    $resultado2 = mysqli_query($conexion, $sql2);
                    while ($mostrar = mysqli_fetch_array($resultado2)) {
                    ?>
                        <td><?php echo $mostrar['ALIASAPTO'] ?></td>
                    <?php
                    }
                    
                    ?>
                    
                    <td> <?= $item['FECHAINGRESO'] ?></td>
                    <td> <?= $item['FECHASALIDA'] ?></td>
                    
                    <?php 
                        $fechIngreso = strtotime($item['FECHAINGRESO']);
                        $fechSalida = strtotime($item['FECHASALIDA']);
                        $diferencia = intval(((($fechSalida-$fechIngreso)/60)/60)/24)+1;
                    ?>
                    <td><?php echo $diferencia ?></td>

                    <?php
                    $sql3 = "SELECT * FROM apartamento WHERE IDAPTO = $row2";
                    $resultado3 = mysqli_query($conexion, $sql3);
                    while ($mostrar3 = mysqli_fetch_array($resultado3)) {
                    
                    ?>
                        <?php $precioDia = doubleval($mostrar3['PRECIOXDIA'])?>
                        <td><?php echo "$ " . $diferencia * $precioDia ?> </td>
                    <?php
                    }
                    ?>

                <?php } ?>

                </tr>

        </tbody>
    </table>
    <br>
</div>

<?php require "views/shared/footer.php" ?>