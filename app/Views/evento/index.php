<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-2 h-100">
        <table class="table">

            <form method="post" action="<?php echo base_url('/evento/busqueda'); ?>">
                <tr>
                    <td colspan="2">
                        <input type="text" name="criterio" class="form-control">
                    </td>
                    <td>
                        <a href="/evento/restaurar">Limpiar</a>

                        <input type="submit" value='Buscar' class="btn btn-primary">

                    </td>
                </tr>
            </form>
        </table>
        <p>
            <a href="<?php echo base_url('/evento/registrar'); ?>" class="btn btn-success">Registrar nuevo evento </a>
        </p>
        <table class="table table-striped">
            <tr>
                <td><b>ID</b></td>
                <td><b>Evento</b>
                    <a href="<?php echo base_url('/evento/ascendente'); ?>">ASC</a>
                    <a href="<?php echo base_url('/evento/descendente'); ?>">DES</a>
                </td>
                <td><b>Lugar</b></td>
                <td><b>Fecha</b></td>
                <td><b>Horario</b></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            foreach ($result as $row) {
            ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><span title='<?= $row["nombre"] ?>'><?= $row["nombre"] ?></span></td>
                    <td><span title='<?= $row["lugar"] ?>'><?= $row["lugar"] ?></span></td>
                    <td><span title='<?= $row["fecha"] ?>'><?= $row["fecha"] ?></span></td>
                    <td><span title='<?= $row["horario"] ?>'><?= $row["horario"] ?></span></td>
                    <td><a href="<?php echo base_url('/evento/modificar/' . $row["id"]); ?>" title='Editar evento'>Modificar</a></td>
                    <td><a href="<?php echo base_url('/evento/delete/' . $row["id"]); ?>" title='Eliminar evento'>Eliminar</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </div>
</body>

</html>