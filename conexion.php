<?php

	function conexion(){

	$host = "host=containers-us-west-69.railway.app";
	$port = "port=6527";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=e9zJugXcUKq9pd1Umdi8";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>