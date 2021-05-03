<div id="fileupload" class="col-md-12">
    <h2>Unterlagen einreichen</h2>
    <hr>
    <form method="post">
        <label for="document">
            <p class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;">PDF auswählen</p>
        </label><br>
        <input type="file" id="document" name="filename" required>
        <div class="form-group">
            <input class="form-control" type="text" id="title" name="title" placeholder="Titel">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Beschreibung" rows="10"></textarea>
        </div>
        <select name="category" class="form-control">
                    <optgroup label="Kategorie auswählen"> 
                        <option value="1" selected="">General</option>
                        <option value="2">Informatik</option>
                        <option value="3">Mathematik</option>
                        <option value="4">Englisch</option>
                        <option value="5">Geografie</option>
                        <option value="6">Geschichte</option>
                    </optgroup>
                </select>
        <br><button class="btn btn-primary" type="button" style="background: #fe5f55;border-radius: 15px;" type="submit">Einreichen</button>
    </form>
</div>

