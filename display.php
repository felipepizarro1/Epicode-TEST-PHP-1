<?php
include_once('config.php');

// Conecta con la base de datos
$mysqli = new mysqli($config['mysql_host'], $config['mysql_user'], $config['mysql_password'], 'gestione_libreria');
if($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Consulta SQL para seleccionar todos los libros de la tabla 'libri'
$sql = "SELECT * FROM libri";
$result = $mysqli->query($sql);

?>

<div class="container  ">
<div class="card-deck d-flex gap-3 ">

    <?php
        // Itera sobre los resultados de la consulta y genera el HTML para cada libro
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="card mt-2">
                <img class="card-img-top" src="<?php echo $row['image']; ?>" alt="Card image" style="height: 400px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['titolo']; ?></h5>
                    <p class="card-text">Autore: <?php echo $row['autore']; ?></p>
                    <p class="card-text">Anno di pubblicazione: <?php echo $row['anno_di_pubblicazione']; ?></p>
                    <p class="card-text">Genere: <?php echo $row['genere']; ?></p>
                </div>
            </div>
            <?php
        }
        ?>
 
</div>
</div>