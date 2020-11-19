<?php

namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");

class CrearUsuarioController
{
    public $rut;
    public $nombre;
    public $rol;
    public $clave;
    public $estado;
  

    


    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->nombre = $_POST['nombre'];
        $this->rol = $_POST['rol'];
        $this->clave = $_POST['clave'];
        $this->estado = $_POST['estado'];
    }

    public function registrarUsuario()
    {

        
        session_start();
        if ($this->rut == "" || $this->nombre == "" || $this->rol == "" || $this->clave == "" || $this->estado == "") {
            $_SESSION['error1'] = "Complete la informacion";
            header("Location: ../views/crearUsuario.php");
            return;
        }
        $modelo = new UsuarioModel();
        $data = ['rut' => $this->rut, 'nombre' => $this->nombre, 'rol' => $this->rol , 'clave' => $this->clave, 'estado' => $this->estado];
        $count = $modelo->insertarUsuario($data);

        if ($count == 1) {
            $_SESSION['respuesta1'] = "Usuario Creado Con Éxito";
            $this->rut == "" ;
        } else {
            $_SESSION['error1'] = "Hubo un error en la base de datos";
        }
        header("Location: ../views/crearUsuario.php");
    }
}

$obj = new CrearUsuarioController();
$obj->registrarUsuario();


