<?php
include_once('config.php');

// Verifica si se proporcionó un ID válido en la URL
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Obtiene el ID del libro de la URL
    $id = $_GET['id'];
    
    // Consulta SQL para eliminar el libro con el ID proporcionado
    $sql = "DELETE FROM libri WHERE id = $id";
    
    // Ejecuta la consulta
    if($mysqli->query($sql) === TRUE) {
        echo "Libro eliminado correctamente";
    } else {
        echo "Error al eliminar el libro: " . $mysqli->error;
    }
    
    // Redirecciona a la página principal
    header('Location: http://localhost/EPICODE/TEST-PHP-1/');
    exit;
} else {
    echo "ID no válido proporcionado en la URL.";
}
?>