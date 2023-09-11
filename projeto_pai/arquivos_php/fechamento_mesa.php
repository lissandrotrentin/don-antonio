<?php 

require "conex.php";

require "functions.php";

$id_mesa = $_GET['id_mesa'];



$somas = somas_mesa($mysqli, $id_mesa);


$sqlcode_f = "INSERT INTO fechamento_geral
VALUES( $id_mesa ,{$somas[0]['quantidade_t']},'{$somas[0]['valor_t']}')";
$sqlquery_f = $mysqli->query($sqlcode_f);


$sql_delete = "DELETE FROM mesa WHERE id = $id_mesa";
$query_delete = $mysqli->query($sql_delete);

$sql_delete_bebidas = "DELETE FROM vender_bebidas WHERE id_mesa = $id_mesa";
$query_delete_bebidas = $mysqli->query($sql_delete_bebidas);

header('Location:mesas.php');

?>