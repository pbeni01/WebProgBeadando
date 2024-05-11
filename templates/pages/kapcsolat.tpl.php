<form action="http://localhost/beadando3/feldolgoz.php" method="post">
    <div id="email">
<label>E-mail:</label><input type="email" name="email" required> <br>
</div>
<label>Név:</label><input type="text" name="nev" pattern="[A-Z,a-z, ]{8}[A-Z,a-z, ]*"
required><br>
<p></p>
<label for="">Telefonszám</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{11}">
<p></p>
<h3>Megjegyzés:</h3>
<textarea name="megjegyzes" rows="4" cols="50"></textarea>
<p></p>
<label></label><input type="submit" value="Küldés">
</form>