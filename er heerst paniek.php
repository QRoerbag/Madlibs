<!DOCTYPE html>
<html>
<head>
	<title>Mad-Libs</title>
	<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<body>

<header>
	<p>Mad Libs</p>
</header>

<nav>
	<ul>
		<li><a class="een" href="er heerst paniek.php">Er Heerst Paniek...</a></li>
		<li><a class="twee" href="onkunde.php">Onkunde</a></li>
	</ul>
</nav>
<article>
	<h1>Er heerst paniek...</h1>

	<form action="process ehp.php" method="POST">
		
		<p>Welk dier zou je nooit als huisdier willen hebben?</p><input class="inv" type="text" name="dier">
			<br>
		<p>Wie is de belangrijkste persoon in je leven?</p><input class="inv" type="text" name="persoon">
			<br>
		<p>In welk land zou je graag willen wonen?</p><input class="inv" type="text" name="land">
			<br>
		<p>Wat doe je als je je verveelt?</p><input class="inv" type="text" name="verveling">
			<br>
		<p>Wat vind je heel vies eten?</p><input class="inv" type="text" name="speelgoed">
			<br>
		<p>Bij welke docent spijbel je het liefst?</p><input class="inv" type="text" name="docent">
			<br>
		<p>Als je €100.000,- had, wat zou je dan kopen?</p><input class="inv" type="text" name="kopen">
			<br>
		<p>Wat is je favoriete bezigheid?</p><input class="inv" type="text" name="bezigheid">
			<br>
			<br>
		<input class="Verzend" type="submit" name="submit" value="Verzend">

	</form>
</article>

<footer>
	<p>Gemaakt door Quirin Roerbag</p>
</footer>

</body>
</html>