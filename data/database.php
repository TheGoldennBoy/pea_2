<?php
$db = new PDO('mysql:host=localhost; dbname=financiera', 'root', '1234');
if(!$db){
    echo "Error al conetar la base de datos";
    exit;
}
?>