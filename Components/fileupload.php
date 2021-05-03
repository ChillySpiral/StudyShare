<!-- CSS noch nicht angepasst, wird ja dann in der Profilverwaltung angezeigt, da sollten die selben Klassen verwendet werden können
 --><section class="register-photo">
<h2>Unterlagen einreichen</h2>
<hr>
    <label for="document">PDF einreichen</label>
    <input type="file" id="document" name="filename" required>
    </div>
    <div class="form-group">
        <input class="form-control" type="text" id="title" name="title" placeholder="Titel" style="border-radius: 10px;">
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
    <input value="Einreichen" type="submit">
</form>
</section>