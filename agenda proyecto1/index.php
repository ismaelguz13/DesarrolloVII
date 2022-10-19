<?php 
require_once('class/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agenda Digital</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <link rel="stylesheet" href="./css/estilo.css"> 
    <script src="./js/jquery-3.6.0.min.js"></script> 
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script> 
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="">
            Agenda Digital
            </a>

            <div>
                <b class="text-light">Eventos</b>
            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Crear Evento</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Nombre</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Descripción</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Inicio</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">Fin</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Detalles de evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Titulo</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Descripción</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Fecha de Inicio</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">Fecha de Fin</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Editar</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Eliminar</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->


    <!-- send mail -->
    <form method="post" action="">
    <!----<H4>     Nombre<input type="text" name="nombre"><br><br> </H4>
    <H4>    Detalle<input type="text" name="detalle"><br><br> </H4>
    <H4>    Fecha de Inicio<input type="datetime" name="fecha de inicio"><br><br> </H4>
    <H4>    Fecha final<input type="datetime" name="fecha final"><br><br> </H4>--->
    <h4>    correo electrónico<input type="email" name="email" >
    <input type="submit" name="Enviar" value="Enviar Agenda"><br><br>
    </form>
    <!-- send mail -->
<?php 
include_once("Msg.php");
$agendad = $conn->query("SELECT * FROM `agendad`");
$agendad_res = [];
foreach($agendad->fetch_all(MYSQLI_ASSOC) as $row){
    $row['fecha_ini'] = date("F d, Y h:i A",strtotime($row['fecha_ini']));
    $row['fecha_fin'] = date("F d, Y h:i A",strtotime($row['fecha_fin']));
    $agendad_res[$row['id']] = $row;
}
?>
<?php 

include_once('msjs.php');
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>