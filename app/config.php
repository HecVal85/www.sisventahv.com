<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sisventahv');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La coneción a la base de datos fue exitosa!";
} catch (PDOException $e) {
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL = "http://localhost/www.sisventahv.com";