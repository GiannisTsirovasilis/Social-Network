<?php
	header("Content-Type: application/json; charset=UTF-8");
	$obj = json_decode($_POST["x"], false);
	include($_SERVER['DOCUMENT_ROOT'] . '/socialNetwork/includes/db_connect.php');
	$sql = 'DELETE FROM `requests` WHERE `id_from`=? AND `id_to`=?;';
	$stmt = $con->prepare($sql);
	$stmt->bind_param('ss', $obj->id_from, $obj->id_to);
	$stmt->execute();
	$stmt->close();
	$con->close();
?>