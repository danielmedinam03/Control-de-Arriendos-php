<?php require "views/shared/header.php" ?>
<br><br>
    <h1 class="text-center mt-10" style="font-size:50px">
        <br><?php echo $dataApto["titulo"]; ?><br>
    </h1>
<div class="container text-center mt-5 mb-5" style="background-color:aliceblue">
    

    <table class="table table-hover" style="font-size:20px">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Apartamento</th>
                <th>Direccion</th>
                <th>Cantidad de camas</th>
                <th>Capacidad</th> 
                <th>Precio por día</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ((array)$dataApto['aptos'] as $item) { ?>
                <tr>
                    <td> <?= $item['IDAPTO'] ?></td>
                    <td> <?= $item['ALIASAPTO'] ?></td>
                    <td> <?= $item['DIREAPTO'] ?></td>
                    <td> <?= $item['CANCAMAS'] ?></td>
                    <td> <?= $item['CAPACIDADAPTO'] ?></td>
                    <td> <?= $item['PRECIOXDIA'] ?></td>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<?php require "views/shared/footer.php" ?>