<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="main.css" type="text/css">
	<title>php</title>
</head>
<body>
<?php
$odzielnik ="//";
$tekst = $_GET['tekst'];
$email = $_GET['email'];
$file = "plik.txt";
$fp = fopen($file, "a");
flock($fp, 2);
fwrite($fp, $odzielnik);
fwrite($fp, $email);
fwrite($fp, " ");
fwrite($fp, $tekst);
fwrite($fp, $odzielnik);
fwrite($fp, "\n");
flock($fp, 3);
fclose($fp);
?>

		<div id=main>
			<div id=tekst>
				<div id="menu">
					<div class="gora">
				<div id=logo>
					<img src="banana.png" width="75px"; height="70px">
				</div>
				<div class="przerwa1">
				</div>
				<div id="pocomito">
			<a href="Strona główna.html">
				<div id="button1">
					Storna Głowna
				</div>
				</a>
				<div class="przerwa">
				</div>
				<a href="Portfolio.html">
				<div id="button2">
					Protfolio
				</div>
			</a>
				<div class="przerwa">
				</div>
				<a href="kontakty.html">
					<div id="button3">
						Kontakt/Oferty
					</div>
				</a>
				</div>
			</div>
					<div id=tresc>
						<br><br><br><br><hr>

							<h1><center><font size="5px"><br><br><br><br>Twoje zamówienie zostało przyjęte.<br>
								Wkrótce odezwiemy się na twojego maila.
							</font></center></h1>
</body>
</html>