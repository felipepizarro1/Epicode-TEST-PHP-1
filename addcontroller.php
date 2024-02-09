<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['titolo']) && isset($_POST['autore']) && isset($_POST['genere'])  ) {
    
    // Incluye el archivo de configuración de la base de datos
    include_once('config.php');
    
    // Conecta con la base de datos
    $mysqli = new mysqli($config['mysql_host'], $config['mysql_user'], $config['mysql_password'], 'gestione_libreria');
    if($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    } 

    // Prepara los datos del formulario para la inserción en la base de datos
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $anno_di_pubblicazione = $_POST['anno_di_pubblicazione'];
    $genere = $_POST['genere'];
    $image = $_POST['image'];

    // Consulta SQL para insertar los datos en la tabla 'libri'
    $sql = "INSERT INTO libri (titolo, autore, anno_di_pubblicazione, genere, image) VALUES ('$titolo', '$autore', '$anno_di_pubblicazione', '$genere', '$image')";
    
    // Ejecuta la consulta
    if ($mysqli->query($sql) === TRUE) {
        echo "Registro insertado correctamente";
        exit(header('Location: http://localhost/EPICODE/TEST-PHP-1/'));
    } else {
        echo "Error al insertar el registro: " . $mysqli->error;
    }

    // Cierra la conexión con la base de datos
    $mysqli->close();
} else {
    echo "No se han enviado datos del formulario";
}
?>