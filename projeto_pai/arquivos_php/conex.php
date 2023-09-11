<?php

$host = "localhost";
$usuario = "junior";
$senha = "1708";
$database = "don_antonio";

$mysqli = new mysqli($host,$usuario,$senha,$database);
if ($mysqli->error) {
    die("falha ao conectar ao banco de dados:" . $mysqli->error);
}

?>