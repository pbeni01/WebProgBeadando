<script type="text/javascript" src="js/main.js"></script>
<form name="kapcsolat" action="http://localhost/beadando3/feldolgoz.php" onsubmit="return ellenoriz();" method="post">
    <div id="email">
<label>E-mail:</label><input type="email" id="email" name="email" required> <br>
</div>
<label>Név:</label><input type="text" id="nev" name="nev" pattern="[A-Z,a-z, ]{8}[A-Z,a-z, ]*"
required><br>
<p></p>
<label for="">Telefonszám</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{11}">
<p></p>
<h3>Megjegyzés:</h3>
<textarea name="szoveg" id="szoveg" rows="4" cols="50"></textarea>
<p></p>

<input id="kuld" type="submit" value="Küldés">
</form>