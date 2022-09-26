<?php
 
 //SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "administrador", "pwd" => "Luna1591", "Database" => "datos", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:servereti.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

// if( $conn ) {
//      echo "Conexión establecida.<br />";
// }else{
//      echo "Conexión no se pudo establecer.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }


?>
