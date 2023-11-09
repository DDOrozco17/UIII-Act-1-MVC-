<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");

    $obj = new usernameController();

    $cliente = $obj->show($_GET['id_cliente']);

    if ($cliente) {
?>

<h2 class="text-center">Detalles del cliente</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $cliente['id_cliente'] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el cliente?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado, no se podrá recuperar el cliente.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $cliente['id_cliente'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID Cliente</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Fecha de Registro</th>
            <th scope="col">CURP</th>
            <th scope="col">Número de Seguro Social</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $cliente['id_cliente'] ?></td>
            <td><?= $cliente['nombre_cliente'] ?></td>
            <td><?= $cliente['direccion'] ?></td>
            <td><?= $cliente['telefono'] ?></td>
            <td><?= $cliente['correo_elec'] ?></td>
            <td><?= $cliente['fecha_registro'] ?></td>
            <td><?= $cliente['curp'] ?></td>
            <td><?= $cliente['seguro_social'] ?></td>
        </tr>
    </tbody>
</table>

<?php
    } else {
        // Manejar el caso en el que no se encuentre el cliente
        echo "Cliente no encontrado";
    }

    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
