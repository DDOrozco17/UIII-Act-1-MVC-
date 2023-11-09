<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new ClienteModel();
        }
        public function guardar($nombre_cliente, $direccion, $telefono, $correo_elec, $fecha_registro, $curp, $seguro_social){
            $id = $this->model->insertar($nombre_cliente, $direccion, $telefono, $correo_elec, $fecha_registro, $curp, $seguro_social);
            return ($id!=false) ? header("Location:show.php?id_cliente=".$id) : header("Location:create.php");
        }
        public function show($id_cliente){
            return ($this->model->show($id_cliente) != false) ? $this->model->show($id_cliente) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id_cliente, $nombre_cliente, $direccion, $telefono, $correo_elec, $fecha_registro, $curp, $seguro_social){
            return ($this->model->update($id_cliente, $nombre_cliente, $direccion, $telefono, $correo_elec, $fecha_registro, $curp, $seguro_social) != false) ? header("Location:show.php?id_cliente=".$id_cliente) : header("Location:index.php");
        }
        public function delete($id_cliente){
            return ($this->model->delete($id_cliente)) ? header("Location:index.php") : header("Location:show.php?id_cliente=".$id_cliente) ;
        }
    }
?>
