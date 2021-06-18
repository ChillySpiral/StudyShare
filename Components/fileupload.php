<?php
if(!isset($_SESSION['user']))
{
    header('Location: ../');
}
?>

<div id="fileupload" class="col-12" style="margin-bottom: 60px;">
    <h2>Unterlagen einreichen</h2>
    <hr>
    <form method="POST" action="../AJAX/upload.php" enctype="multipart/form-data">
        <label for="document">
            <p class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;">PDF auswählen</p>
        </label><br>
        <input type="file" id="document" name="file" required>
        <div class="form-group">
            <input class="form-control" type="text" id="title" name="title" placeholder="Titel">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Beschreibung" rows="10"></textarea>
        </div>
        <select name="category" class="form-control" >
                    <optgroup label="Kategorie auswählen" id="uploadCategories"> 
                    </optgroup>
                </select>
        <br><button class="btn btn-primary" name="upload" style="background: #fe5f55;border-radius: 15px;" type="submit">Einreichen</button>
    </form>
</div>

