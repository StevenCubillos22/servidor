<?php
const HOST = "db";
const USER = "root";
const PASS = "test";
const DB_NAME = "tareas";

$db = new mysqli(HOST, USER, PASS, DB_NAME);

if ($db->connect_error) {
    echo"Error de conexión: " . $conn->connect_error." ";
}
?>