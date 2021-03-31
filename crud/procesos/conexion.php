<?php
try {
    $usuario = "root";
    $contraseña = "";
    $pdo = new PDO('mysql:host=localhost;dbname=crud', $usuario, $contraseña);
    echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
