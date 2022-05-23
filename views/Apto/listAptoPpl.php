<?php require "views/shared/header.php" ?>
<br>
<br>
<br>
<div>
    <h1 class="text-center" id="tituloApto" style="font-size:60px">
        <img src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/120/000000/external-hotel-vacation-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png"/>
    
        <?php echo $dataApto["titulo"]; ?>
    </h1><br>
    
    <h6 class="text-center" style="font-size:20px">
        
    </h6>
</div>
<div class="container">
    
    <div class="row">
    
        <?php
        $db = Conexion::conectar();
        $sql = "SELECT * FROM apartamento";
        $resultado = $db->query($sql);
        
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <div class="card m-2 text-dark bg-light mb-3 text-center" style="width: 25rem;"> 
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN']); ?> " 
                    width="350px" class="card-img-top" style="margin-top:13px">

                <div class="card-body">
                    <h5 class="card-title"><?= $row['ALIASAPTO'] ?></h5>
                    <hr>
                    <p class="card-text"> 
                        <strong>Direccion :</strong> <?= $row['DIREAPTO'] ?> <br>
                        
                        <strong>Precio :</strong> $ <?= $row['PRECIOXDIA'] ?> / día
                    </p>
                    <a href="index.php?controlador=apto&accion=viewApto&id=<?= $row['IDAPTO'] ?>" class="btn btn-primary">Ver más...</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php require "views/shared/footer.php" ?>