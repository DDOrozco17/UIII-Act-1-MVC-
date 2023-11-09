<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $cliente = $obj->show($_GET['id_cliente']);
?>
<form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id Cliente</label>
        <div class="col-sm-10">
            <input type="text" name="id_cliente" readonly class="form-control-plaintext" id="staticEmail" value="<?= $cliente['id_cliente'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre Cliente</label>
        <div class="col-sm-10">
            <input type="text" name="nombre_cliente" class="form-control" id="inputPassword" value="<?= $cliente['nombre_cliente'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Dirección</label>
        <div class="col-sm-10">
            <input type="text" name="direccion" class="form-control" id="inputPassword" value="<?= $cliente['direccion'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="telefono" class="form-control" id="inputPassword" value="<?= $cliente['telefono'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Correo Electrónico</label>
        <div class="col-sm-10">
            <input type="text" name="correo_elec" class="form-control" id="inputPassword" value="<?= $cliente['correo_elec'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Fecha de Registro</label>
        <div class="col-sm-10">
            <input type="text" name="fecha_registro" class="form-control" id="inputPassword" value="<?= $cliente['fecha_registro'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo CURP</label>
        <div class="col-sm-10">
            <input type="text" name="curp" class="form-control" id="inputPassword" value="<?= $cliente['curp'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Número de Seguro Social</label>
        <div class="col-sm-10">
            <input type="text" name="seguro_social" class="form-control" id="inputPassword" value="<?= $cliente['seguro_social'] ?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id_cliente=<?= $cliente['id_cliente'] ?>">Cancelar</a>
    </div>
</form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
