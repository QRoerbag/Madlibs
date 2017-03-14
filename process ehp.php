<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="madlibs.css">
	<title>Process</title>
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
	<h1>Er heerst paniek</h1>

	<p>
		Er heerst paniek in het koninkrijk <?php echo $_POST['land'];?>, Koning <?php echo $_POST['docent']; echo "\n";?> is ten einde raad en als Koning
		<br>
		<?php echo $_POST['docent']; echo "\n";?> ten einde raad is, dan roept hij zijn ten-einde-raad-raadsheer <?php echo $_POST['persoon'];?>.
		<br><br>
		"Koning <?php echo $_POST['persoon'];?>! Het is een ramp! Het is een schande!"
		<br><br>
		"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand!?"
		<br><br>
		"Mijn <?php echo $_POST['dier']; echo "\n";?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['speelgoed']; echo "\n";?> voor hem gekocht!"
		<br><br>
		"Majesteit, uw <?php echo $_POST['dier']; echo "\n";?> komt vanzelf wel weer terug!?"
		<br><br>
		"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezigheid']; echo "\n";?> leren!?"
		<br><br>
		"Maar Sire, daar kunt u toch uw <?php echo $_POST['kopen']; echo "\n";?> voor gebruiken"
		<br><br>
		"<?php echo $_POST['persoon']; echo "\n";?> je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
		<br><br>
		"<?php echo $_POST['verveling'];?>, Sire."
	</p>
</article>

<footer>
	<p>Gemaakt door Quirin Roerbag</p>
</footer>

</body>
</html>