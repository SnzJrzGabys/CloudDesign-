<?php
helper('form');
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
</head>

<body>
    <div class="container py-2">
        <div class="row">
            <div class="col-lg-11">
                <h2>Modificar un Evento <?= $result->id ?></h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-primary" href="/evento"> Regresar</a>
            </div>
        </div>
    </div>
    <div class="container py-2">
        <form method="post" id="add_modify" name="add_modify" action="<?php echo base_url('/evento/update'); ?>">
            <input type="hidden" name="id" id="id" value="<?= $result->id ?>">
            <div class="form-group">

                <?= form_label('Evento', 'for_nombre', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'nombre', 'name' => 'nombre', 'value' => $result->nombre, 'class' => 'form-control', 'placeholder' => 'Evento']); ?>
            </div>
            <div class="form-group">

                <?= form_label('Lugar', 'for_lugar', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'lugar', 'name' => 'lugar', 'value' => $result->lugar, 'class' => 'form-control', 'placeholder' => 'lugar']); ?>
            </div>
            <div class="form-group">

                <?= form_label('Fecha', 'for_fecha', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'fecha', 'name' => 'fecha', 'type' => 'date', 'value' => $result->fecha, 'class' => 'form-control', 'placeholder' => 'Fecha']); ?>

            </div>
            <div class="form-group">

                <?= form_label('Horario', 'for_horario', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'horario', 'name' => 'horario', 'type' => 'time', 'value' => $result->horario, 'class' => 'form-control', 'placeholder' => 'Horario']); ?>
            </div>
            <div class="form-group">

                <?= form_label('Organizador', 'for_existencias', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'organizador', 'name' => 'organizador', 'value' => $result->organizador, 'class' => 'form-control', 'placeholder' => 'Organizador']); ?>
            </div>
            <div class="form-group">

                <?= form_label('Objetivo', 'for_categoria', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'objetivo', 'name' => 'objetivo', 'value' => $result->objetivo, 'class' => 'form-control', 'placeholder' => 'Objetivo']); ?>
            </div>
            <div class="form-group">

                <?= form_label('Academia', 'for_academia', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'academia', 'name' => 'academia', 'value' => $result->academia, 'class' => 'form-control', 'placeholder' => 'Academia']); ?>
            </div>
            <div class="form-group">

                <?= form_label('Recursos', 'for_existencias', ['class' => 'control-label']); ?>

                <?= form_input(['id' => 'recursos', 'name' => 'recursos', 'value' => $result->recursos, 'class' => 'form-control', 'placeholder' => 'Recursos']); ?>
            </div>
            <div class="form-group">
                <?= form_label('Número de participantes', 'for_existencias', ['class' => 'control-label']); ?>
                <?= form_input(['id' => 'numero_participantes', 'name' => 'numero_participantes', 'value' => $result->numero_participantes, 'class' => 'form-control', 'placeholder' => 'Número de participantes']); ?>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>

    <script>
        if ($("#add_create").length > 0) {
            $("#add_create").validate({
                rules: {
                    nombre: {
                        required: true,
                    },
                    lugar: {
                        required: true,
                    },
                    fecha: {
                        required: true,
                    },

                    horario: {
                        required: true,
                    },
                    organizador: {
                        required: true,
                    },
                    academia: {
                        required: true,
                    },
                },
                messages: {
                    nombre: {
                        required: "El nombre del evento es requerido.",
                    },
                    lugar: {
                        required: "El lugar del evento es requerido.",
                    },
                    fecha: {
                        required: "La fecha del evento es requerido.",
                    },
                    horario: {
                        required: "El horario del evento es requerido.",
                    },
                    organizador: {
                        required: "El organizador del evento es requerido.",
                    },
                    academia: {
                        required: "La acdemia del evento es requerido.",
                    },
                },
            })
        }
    </script>
    </div>
</body>

</html>