<?php

namespace models;

require_once("Conexion.php");

class UsuarioModel
{

    public function insertarUsuario($data)
    {
        //[email=>valor, nombre=>valor, clave=>value]
        $stm = Conexion::conector()->prepare("INSERT INTO usuario VALUES(:A,:B,:C,:D,:E)");
        $stm->bindParam(":A", $data['rut']);
        $stm->bindParam(":B", $data['nombre']);
        $stm->bindParam(":C", $data['rol']);
        $stm->bindParam(":D", md5($data['clave'])); //123=> md5(123)=>wertyui56789234ds
        $stm->bindParam(":E", $data['estado']);

        return $stm->execute();
    }


    public function buscarUsuarioLogin($rut, $clave,$rol)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE rut=:A AND clave=:B AND rol=:C");
        $stm->bindParam(":A", $rut);
        $stm->bindParam(":B", md5($clave));
        $stm->bindParam(":C", $rol);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
       
    }

    public function getAllUsuarios(){

        $stm = Conexion::conector()->prepare("SELECT * FROM usuario");
        $stm ->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);


    }
    
}
