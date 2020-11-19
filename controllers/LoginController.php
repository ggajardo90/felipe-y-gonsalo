<?php

namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");

class LoginController
{
    public $rut;
    public $clave;


    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->clave = $_POST['clave'];
    }

    public function iniciarSesion()
    {
        session_start();
        if ($this->rut == "" || $this->clave == "") {
            $_SESSION['error'] = "rut o usuario incorrecto";
            header("Location: ../index.php");
            return;
        }
        $modelo = new UsuarioModel();
        $array = $modelo->buscarUsuarioLogin($this->rut, $this->clave,$this->rol);
        if (count($array) == 0) {
            $_SESSION['error'] = "rut o clave no se encuentra";
            header("Location: ../index.php");
            return;
        }

        $_SESSION['usuario'] = $array[0];

        header("Location: ../views/nuevo_link.php");
    }
}

$obj = new LoginController();
$obj->iniciarSesion();
