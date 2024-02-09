<?php 
    include_once('header.php'); 
    include_once('nav.php'); 
?>

    <div class="container my-3">
        <h1 class="text-center">Aggiungi un libro</h1>
        <form method="post" action="addcontroller.php" enctype="multipart/form-data" class="my-3">
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" placeholder="Titolo..." name="titolo">
            </div>
            <div class="mb-3">
                <label for="autore" class="form-label">Autore</label>
                <input type="text" class="form-control" id="autore" placeholder="Autore..." name="autore">
            </div>
            <div class="mb-3">
                <label for="anno_di_pubblicazione" class="form-label">Anno di pubblicazione</label>
                <input type="text" class="form-control" id="anno_di_pubblicazione" placeholder="Anno di pubblicazione..." name="anno_di_pubblicazione">
            </div>
            <div class="mb-3">
                <label for="genere" class="form-label">Genere</label>
                <input type="tel" class="form-control" id="genere" placeholder="Genere..." name="genere">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (URL)</label>
                <input type="tel" class="form-control" id="image" placeholder="Image..." name="image">
            </div>
            <button type="submit" class="btn btn-dark">Add Book</button>
        </form>
    </div>
<?php 

include_once('footer.php'); 

?>
