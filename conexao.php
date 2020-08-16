<?php
//Credenciais de acesso ao BD
define('HOST', 'identidadedoc.online');
define('USER', 'u390726969_sande3');
define('PASS', 'perito25');
define('DBNAME', 'u390726969_conveniados');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);

