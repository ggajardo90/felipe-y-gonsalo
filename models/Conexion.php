<?php

namespace models;


class Conexion
{
    public static $user = "upvx6pgqzxblover";
    public static $pass = "14YuxwERiAuXLY1kXMT0";
    public static $URL = "mysql:host=b3zrw9mwewvqviihcqeu-mysql.services.clever-cloud.com;dbname=b3zrw9mwewvqviihcqeu";

    public static function conector()
    {
        try {
            return new \PDO(Conexion::$URL, Conexion::$user, Conexion::$pass);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
