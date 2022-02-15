<?php
    $server = "localhost";
    $usuario = "root";
    $pass = "";
    $baseDatos ="parque";

    $servidor = "mysql:dbname=".$baseDatos.";host=".$server;

    try {
        $pdo = new PDO($servidor, $usuario, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        //echo "Conectado";
    } catch (\PDOException $e) {
        echo "error en la conexion";
    }