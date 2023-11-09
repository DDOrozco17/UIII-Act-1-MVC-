<?php
    class ClienteModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre_cliente, $direccion, $telefono, $correo_elec, $fecha_registro, $curp, $seguro_social){
            $stament = $this->PDO->prepare("INSERT INTO clientes VALUES(null, :nombre_cliente, :direccion, :telefono, :correo_elec, :fecha_registro, :curp, :seguro_social)");
            $stament->bindParam(":nombre_cliente", $nombre_cliente);
            $stament->bindParam(":direccion", $direccion);
            $stament->bindParam(":telefono", $telefono);
            $stament->bindParam(":correo_elec", $correo_elec);
            $stament->bindParam(":fecha_registro", $fecha_registro);
            $stament->bindParam(":curp", $curp);
            $stament->bindParam(":seguro_social", $seguro_social);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id_cliente){
            $stament = $this->PDO->prepare("SELECT * FROM clientes where id_cliente = :id_cliente limit 1");
            $stament->bindParam(":id_cliente", $id_cliente);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM clientes");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id_cliente, $nombre_cliente, $direccion, $telefono, $correo_elec, $fecha_registro, $curp, $seguro_social){
            $stament = $this->PDO->prepare("UPDATE clientes SET nombre_cliente = :nombre_cliente, direccion = :direccion, telefono = :telefono, correo_elec = :correo_elec, fecha_registro = :fecha_registro, curp = :curp, seguro_social = :seguro_social WHERE id_cliente = :id_cliente");
            $stament->bindParam(":nombre_cliente", $nombre_cliente);
            $stament->bindParam(":direccion", $direccion);
            $stament->bindParam(":telefono", $telefono);
            $stament->bindParam(":correo_elec", $correo_elec);
            $stament->bindParam(":fecha_registro", $fecha_registro);
            $stament->bindParam(":curp", $curp);
            $stament->bindParam(":seguro_social", $seguro_social);
            $stament->bindParam(":id_cliente", $id_cliente);
            return ($stament->execute()) ? $id_cliente : false;
        }
        public function delete($id_cliente){
            $stament = $this->PDO->prepare("DELETE FROM clientes WHERE id_cliente = :id_cliente");
            $stament->bindParam(":id_cliente", $id_cliente);
            return ($stament->execute()) ? true : false;
        }
    }
?>
