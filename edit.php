<?php 
include_once('header.php'); 
include_once('nav.php'); 

include_once('config.php');

// Verifica si se proporcionó un ID válido en la URL
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Obtiene el ID del libro de la URL
    $id = $_GET['id'];
    
    // Consulta SQL para obtener los datos del libro con el ID proporcionado
    $sql = "SELECT * FROM libri WHERE id = $id";
    $result = $mysqli->query($sql);
    
    // Verifica si se encontró el libro
    if($result->num_rows > 0) {
        // Obtiene los datos del libro
        $row = $result->fetch_assoc();
        
        // Muestra el formulario de edición con los datos del libro cargados
?>
        <div class="container my-3">
            <h1 class="text-center">Modifica un libro</h1>
            <form method="post" action="editcontroller.php" enctype="multipart/form-data" class="my-3">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="mb-3">
                    <label for="titolo" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="titolo" placeholder="Titolo..." name="titolo" value="<?php echo $row['titolo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="autore" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="autore" placeholder="Autore..." name="autore" value="<?php echo $row['autore']; ?>">
                </div>
                <div class="mb-3">
                    <label for="anno_di_pubblicazione" class="form-label">Anno di pubblicazione</label>
                    <input type="text" class="form-control" id="anno_di_pubblicazione" placeholder="Anno di pubblicazione..." name="anno_di_pubblicazione" value="<?php echo $row['anno_di_pubblicazione']; ?>">
                </div>
                <div class="mb-3">
                    <label for="genere" class="form-label">Genere</label>
                    <input type="tel" class="form-control" id="genere" placeholder="Genere..." name="genere" value="<?php echo $row['genere']; ?>">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image (URL)</label>
                    <input type="tel" class="form-control" id="image" placeholder="Image..." name="image" value="<?php echo $row['image']; ?>">
                </div>
                <button type="submit" class="btn btn-dark">Actualizar</button>
            </form>
        </div>
<?php
    } else {
        echo "No se encontró ningún libro con el ID proporcionado.";
    }
} else {
    echo "ID no válido proporcionado en la URL.";
}

include_once('footer.php');
?>