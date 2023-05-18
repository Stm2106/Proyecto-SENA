<?php
try {
    $conexion= new PDO('mysql: host=localhost;dbname=registrousuarios','root','');
    echo "Conexion con la base de datos establecida correctamente ";
} catch (PDOException $e) {
    echo "Error a al conectar la base de datos" .$e->getMessage();
}
