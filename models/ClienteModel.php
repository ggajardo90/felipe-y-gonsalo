<?php

namespace models;

require_once("Conexion.php");


class ClienteModel
{

    public function insertarCliente($data)
    {
        //[email=>valor, nombre=>valor, clave=>value]
        $stm = Conexion::conector()->prepare("INSERT INTO cliente VALUES(:A,:B,:C,:D,:E,:F)");
        $stm->bindParam(":A", $data['rut_cliente']);
        $stm->bindParam(":B", $data['nombre_cliente']);
        $stm->bindParam(":C", $data['direccion_cliente']);
        $stm->bindParam(":D", md5($data['telefono_cliente'])); //123=> md5(123)=>wertyui56789234ds
        $stm->bindParam(":E", $data['fecha_creacion']);
        $stm->bindParam(":F", $data['email_cliente']);

        return $stm->execute();
    }


    public function buscarCliente($rut)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM cliente WHERE rut=:A");
        $stm->bindParam(":A", $rut);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}
