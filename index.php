<?php

$conn_string = "";

$dbconn = pg_connect($conn_string) 
          or die('No puedo conectarme: ' . pg_last_error());

echo "Conectado a la Base de Datos!";

?>