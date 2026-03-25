<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("Conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$carrera = $_POST['carrera'];
$comentario = $_POST['comentario'];

// Guardar en la base de datos
$sql = "INSERT INTO alumnos (nombre, correo, edad, genero, carrera, comentario)
VALUES ('$nombre', '$correo', '$edad', '$genero', '$carrera', '$comentario')";

if ($conexion->query($sql)) {
    // Redirigir al index.html con mensaje
    header("Location: index.html?mensaje=guardado");
    exit();
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>