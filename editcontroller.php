<?php
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $anno_di_pubblicazione = $_POST['anno_di_pubblicazione'];
    $genere = $_POST['genere'];
    $image = $_POST['image'];

    $sql = "UPDATE libri SET titolo='$titolo', autore='$autore', anno_di_pubblicazione='$anno_di_pubblicazione', genere='$genere', image='$image' WHERE id=$id";

    if ($mysqli->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
        // Redirecciona a la página principal
        header('Location: http://localhost/EPICODE/TEST-PHP-1/');
        exit;
    } else {
        echo "Error al actualizar el registro: " . $mysqli->error;
    }
}
?>