<?php require "views/shared/header.php" ?>

<div class="container">
<br><br><br><br><h1 class="text-center my-5">
        <?php echo $data["titulo"]; ?>
    </h1><br><br>
    <table class="table text-center" style="font-size:20px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Origen</th> 
                <th>Acompañantes</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ((array)$data['personas'] as $item) { ?>
                <tr>
                    <td> <?= $item['IDPERSONA'] ?></td>
                    <td> <?= $item['NOMBRE'] ?></td>
                    <td> <?= $item['DIREPERSONA'] ?></td>
                    <td> <?= $item['ORIGENPERSONA'] ?></td>
                    <td> <?= $item['NUMACOMPANANTES'] ?></td>
                    <td>
                        <a href="index.php?controlador=persona&accion=view&id=<?= $item['IDPERSONA'] ?>" class="btn btn-info">Ver</a>

                        <a href="index.php?controlador=persona&accion=edit&id=<?= $item['IDPERSONA'] ?>" class="btn btn-warning">Editar</a>

                        <a href="index.php?controlador=persona&accion=delete&id=<?= $item['IDPERSONA'] ?>" class="btn btn-danger">Borrar</a>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require "views/shared/footer.php" ?>