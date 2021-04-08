<?php

$connectionInfo = array("UID" => "pipo3131", "pwd" => "{your_password_here}", "Database" => "clinete2", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cliente2021.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
