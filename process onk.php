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

<p>
	Er zijn veel mensen die niet kunnen <?php echo $_POST['kun'];?>. Neem nou <?php echo $_POST['opschiet'];?>. Zelfs met behulp van een <?php echo $_POST['vakantie']; echo "\n";?>of <?php echo $_POST['getal']; echo "\n";?>kan <?php echo $_POST['opschiet']; echo "\n";?>nog niet <?php echo $_POST['kun'];?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST['best'];?>, maar met een te veel aan <?php echo $_POST['slecht'];?>. Te veel <?php echo $_POST['slecht']; echo "\n";?>leidt tot verveling en dat is niet goed als je wilt <?php echo $_POST['kun'];?>. Helaas voor <?php echo $_POST['opschiet'];?>.
</p>


</article>

<footer>
	<p>Gemaakt door Quirin Roerbag</p>
</footer>

</body>
</html>