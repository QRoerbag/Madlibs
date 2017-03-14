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

<h1>Onkunde</h1>

	<form action="process onk.php" method="POST">
		
		<p>Wat zou je graag willen kunnen?</p><input class="inv" type="text" name="kun">
		<p>Met welke persoon kun je goed opschieten?</p><input class="inv" type="text" name="opschiet">
		<p>Wat is je favoriete getal?</p><input class="inv" type="text" name="getal">
		<p>Wat heb je altijd bij je als je op vakantie gaat?</p><input class="inv" type="text" name="vakantie">
		<p>Wat is je beste eigenschap?</p><input class="inv" type="text" name="best">
		<p>Wat is je slechtste eigenschap?</p><input class="inv" type="text" name="slecht">
		<p>Wat is het ergste dat je kan overkomen?</p><input class="inv" type="text" name="erg">

		<input class="Verzend2" type="submit" name="submit">

	</form>

</article>

<footer>
	<p>Gemaakt door Quirin Roerbag</p>
</footer>

</body>
</html>