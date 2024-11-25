<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';
class Conexion
{
    private $host;
    private $namedb;
    private $userdb;
    private $passwordb;
    private $charset;
    private static $pdo = null;

    public function __construct()
    {
        if (!defined('DB_HOST') || !defined('DB_NAME') || !defined('DB_USER') || !defined('DB_PASSWORD')) {
            die('Error: Las constantes de configuración de la base de datos no están definidas.');}
        $this->host = DB_HOST;
        $this->namedb = DB_NAME;
        $this->userdb = DB_USER;
        $this->passwordb = DB_PASSWORD;
        $this->charset = 'utf8';

        if (self::$pdo == null) {
            $this->conectar();
        }
    }

    private function conectar()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";

        try {
            self::$pdo = new PDO($dsn, $this->userdb, $this->passwordb);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Hubo un error' . $e->getMessage());
        }
    }

    public static function obtenerConexion()
    {
        if (self::$pdo == null) {
            new self;
        }

        return self::$pdo;
    }

    public function contesta()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";
        return $dsn;
    }
}
