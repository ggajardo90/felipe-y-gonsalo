<?php

namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");

class LoginControllerAdmin
{
    public $rut;
    public $clave;
    public $rol;


    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->clave = $_POST['clave'];
        $this->rol  = $_POST['admin'];
    }

    public function iniciarSesion()
    {
        session_start();
        // if ($this->rut == "" || $this->clave == "") {
        //     $_SESSION['error'] = "rut o usuario incorrecto";
        //     header("Location: ../views/loginAdmin.php");
        //     return;
        // }
        $modelo = new UsuarioModel();
        $array = $modelo->buscarUsuarioLogin($this->rut, $this->clave, $this->rol);
       
         if(count($array) == 0) {
            $_SESSION['error'] = "rut o clave no se encuentra";
            header("Location: ../views/loginAdmin.php");
            return;
        }

        // $_SESSION['usuario'] = $array[0];

        $_SESSION['admin']=$array;

        header("Location: ../views/crearUsuario.php");
    }
}

$obj = new LoginControllerAdmin();
$obj->iniciarSesion();
