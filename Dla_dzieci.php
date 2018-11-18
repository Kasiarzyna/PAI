<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Wydawnictwo Lawenda</title>
<meta name = "description" content="Strona internetowa wydawnictwa Lawenda">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dist/css/lightbox.min.css">
<link rel="stylesheet"  href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="styl.css"/>

</head>

<body>

<main class="container-flow">
<a href="glowna.php"><img class ="col-sm-4" src="img/logo.png" alt="Wydawnictwo Lawenda" /></a>

</main>
<nav class ="container-flow">
<ol class =  "menu">
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
    <li><a href="glowna.php">Główna</a></li>
  </ol>
</nav>

<section class = "container-flow">

<div class="tresc-item">
	<div class="row">
		<div class="col-sm-5">
	
					
					<a href="img/tajcyrk.jpg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-5" src="img/tajcyrk.jpg" alt="Bla1"/></a><br><br>
					<b><br><p>Bla1</p></b>
					
					<input type="submit" value="Ulubione" name="ulubione"><br><br><br>
		</div>
		<div class="col-sm-5">
	
					<a href="img/1.jpg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-5" src="img/1.jpg" alt="Bla2"/></a><br><br>
					<b><br><p>Bla2</p></b>
					<input type="submit" value="Ulubione" name="ulubione"><br><br><br>
		</div>
	</div>	
	<div class="row">
		<div class="col-sm-5">
	
					<a href="img/2.jpg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-5" src="img/2.jpg" alt="Bla3"/></a><br><br>
						<b><br><p>Bla3</p></b>
					<input type="submit" value="Ulubione" name="ulubione"><br><br><br>
		</div>
		<div class="col-sm-5">
	
					<a href="img/3.jpg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-5" src="img/3.jpg" alt="Bla4"/></a><br><br>
						<b><br><p>Bla4</p></b>
					<input type="submit" value="Ulubione" name="ulubione"><br><br><br>
		</div>
	</div>	
	<div class="row">
		<div class="col-sm-5">
	
					<a href="img/4.jpg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-5" src="img/4.jpg" alt="Bla5"/></a><br><br>
						<b><br><p>Bla5</p></b>
					<input type="submit" value="Ulubione" name="ulubione"><br><br><br>
		</div>
		<div class="col-sm-5">
	
					<a href="img/5.jpg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-5" src="img/5.jpg" alt="Bla6"/></a><br><br>
						<b><br><p>Bla6</p></b>
					<input type="submit" value="Ulubione" name="ulubione"><br><br><br>
		</div>
	</div>	
	</div>

</section>

<footer class="container-flow">
  <h3>Kontakt</h3>
  <p>Zapraszamy do kontaktu od poniedziałku do piątku w godzinach 9-17.</p>
  <p>Adres: <br>
  ul. Leczkowa 18<br>
  80-432 Gdańsk<br>
  Tel.: 58 78 305 24</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script = src "js/bootstrap.min.js"></script>
<script src="dist/js/lightbox-plus-jquery.min.js"></script>

</body>
</html>