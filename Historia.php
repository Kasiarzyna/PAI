<?php
session_start();
?>+
<!DOCTYPE html>
<html lang="pl-PL">

<head>
<meta charset="utf-8">
<title>Księgarnia wysyłkowa Lawenda</title>
<meta name = "description" content="Strona internetowa księgarni wysyłkowej Lawenda">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styl.css"/>
</head>
<body>

<main>
<a href="glowna.php"><img class ="logo" src="logo.png" alt="Księgarnia Lawenda" /></a>
</main>

<ol id="menu">
    <li class="dol"><a href="#">Kategorie</a>
      <ul>
			<li><a href="Dla_dzieci.php">Dla dzieci</a></li>
			<li><a href="Historia.php">Historia</a></li>
			<li><a href="Poradniki.php">Poradniki</a></li>
			<li><a href="Dla_mlodziezy.php">Dla młodzieży</a></li>
			<li><a href="groza.php">Groza</a></li>
      </ul>
    </li>
    <li><a href="logowanie.php">Logowanie</a></li>
    <li><a href="koszyk.php">Koszyk</a></li>
    <li><a href="glowna.php">Główna</a></li>
  </ol>
</nav>

<div class="tresc-item">
</div>


<footer>
  <h3>Kontakt</h3>
  <p>Zapraszamy do kontaktu od poniedziałku do piątku w godzinach 9-17.</p>
  <p>Adres: <br>
  ul. Leczkowa 18<br>
  80-432 Gdańsk<br>
  Tel.: 58 78 305 24</p>
</footer>

</body>
</html>