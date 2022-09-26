<?php
include("conexion.php");
 
	 $Nombres = $_POST['Nombres'];
	 $apellidos = $_POST['apellidos'];
	 $dni = $_POST['dni'];
	 
    
	 $query = "INSERT INTO Usuarios (Nombre,apellidos,dni) 
	 values ('$Nombres','$apellidos','$dni')";
	 $resultado = sqlsrv_prepare($conn, $query);

     if (sqlsrv_execute($resultado)){
        echo "gooood";

     } else {
        echo "baaaaaaad";
     }

?>