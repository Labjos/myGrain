<?php 
$nombre_form=$_POST['nombre'];
$apellido_form=$_POST['apellido'];
$zona_form=$_POST['ubicacion'];
$emprendimiento_form=$_POST['emprendimiento'];
$correo_form=$_POST['correo'];
$mensaje_form=$_POST['mensaje'];


$cuerpo= "Nombre: ".$nombre_form."\r\n"."Ubicacion: ".$zona_form."\r\n"."Emprendimiento: ".$emprendimiento_form."\r\n"."Email: ".$correo_form."\r\n"."Mensaje: ".$mensaje_form; 

mail("info@mundosurnatural.com.ar","Consulta web My Grain Of", $cuerpo);


include("conexion.php");

mysqli_query($datos_bd, "INSERT INTO webconsultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$zona_form','$emprendimiento_form','$correo_form','$mensaje_form')");  


header("Location: index.php?e=ok#contacto");

?>