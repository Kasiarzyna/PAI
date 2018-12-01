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
<link rel="stylesheet" href="dist/css/lightbox.min.css">
<link rel="stylesheet"  href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="styl.css"/>
<link rel="stylesheet" type="text/css" href="menu.css"/>
</head>

<body>
<div class="container">


<div class="row">
<div class="col-sm-12">
<main class="col-sm-12">
<a href="glowna.php"><img class="col-sm-4" src="img/logo.png" alt="Wydawnictwo Lawenda" /></a>
</main>
</div>
<div class="col-sm-12">
<nav>
<ul class =  "main">
    <li><a href="#">Kategorie</a>
      <ul class =  "sub">
			<li><a href="Dla_dzieci.php">Dla dzieci</a></li>
			<li><a href="Historia.php">Historia</a></li>
			<li><a href="Poradniki.php">Poradniki</a></li>
			<li><a href="Dla_mlodziezy.php">Dla młodzieży</a></li>
			<li><a href="groza.php">Groza</a></li>
      </ul>
    </li>
    <li><a href="logowanie.php">Logowanie</a></li>
    <li><a href="glowna.php">Główna</a></li>
  </ul>
</nav>
</div>
</div>


<br>
<br>
<section>
<div class="tresc-item">

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/m1.jpg" data-lightbox="roadtrip" data-title="Harry Potter i Przeklęte Dziecko"><img class="col-sm-12" src="img/m1.jpg" alt="Harry Potter i Przeklęte Dziecko"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Harry Potter i Przeklęte Dziecko</p></b>
					<b><br><p>Autor: J.K. Rowling</p></b>
					<p>Książka nagrodzona tytułem Książki Roku 2016 lubimyczytać.pl w kategorii Fantastyka młodzieżowa. Harry Potter nigdy nie miał łatwego życia, a tym bardziej teraz, gdy jest przepracowanym urzędnikiem Ministerstwa Magii, mężem oraz ojcem trójki dzieci w wiek.</p> 
					<input type="hidden" value="25" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
	
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/m2.jpg" data-lightbox="roadtrip" data-title="Wybrańcy"><img class="col-sm-12" src="img/m2.jpg" alt="Wybrańcy"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Wybrańcy</p></b>
					<b><br><p>Autor: Kristin Cashore</p></b>
					<p>W Estillu, podobnie jak w pozostałych królestwach, prawo wymuszało przekazywanie Obdarzeńców pod opiekę władcy. Dziecko, którego oczy przybrały dwa różne kolory – kilka tygodni, miesięcy, a najpóźniej kilka lat po narodzinach – wysyłano na dwór, gdzie wyc.</p> 
					<input type="hidden" value="26" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		
</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/m3.jpg" data-lightbox="roadtrip" data-title="Moje serce należy do ciebie"><img class="col-sm-12" src="img/m3.jpg" alt="Moje serce należy do ciebie"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Moje serce należy do ciebie</p></b>
					<b><br><p>Autor: Alessio Puleo</p></b>
					<p>Historia młodzieńczej miłości w bardzo romantycznym wydaniu, rozgrywająca się jednak we współczesnych i bliskich życia realiach. Przedmowę do książki napisał popularny autor Federico Moccia. W klasie 18-letniego Alexa pojawia się nowa uczennica, Ylenia. C.</p> 
					<input type="hidden" value="27" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>

		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/m4.jpg" data-lightbox="roadtrip" data-title="Sekret Julii"><img class="col-sm-12" src="img/m4.jpg" alt="Sekret Julii"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Sekret Julii</p></b>
					<b><br><p>Autor: Tahereh Mafi</p></b>
					<p>Julia z Adamem uciekają z kwatery Komitetu Odnowy i trafiają do Punktu Omega, przystani dla dzieci o szczególnych zdolnościach. Wreszcie są bezpieczni. Sielanka zakochanych trwa jednak krótko. Julia poznaje sekret, który może przekreślić ich wspólne marzeń.</p> 
					<input type="hidden" value="28" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		</div>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/m5.jpg" data-lightbox="roadtrip" data-title="Anna we krwi"><img class="col-sm-12" src="img/m5.jpg" alt="Anna we krwi"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Anna we krwi</p></b>
					<b><br><p>Autor: Kendare Blake</p></b>
					<p>Cas Lowood odziedziczył po ojcu niezwykły zawód: zabija umarłych. Ojciec chłopaka został w makabryczny sposób zamordowany przez ducha, którego sam miał uśmiercić. Teraz, uzbrojony w sztylet athame, Cas podróżuje po całym kraju ze swoją matką-czarownicą.</p> 
					<input type="hidden" value="29" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/m6.jpg" data-lightbox="roadtrip" data-title="Król Kruków"><img class="col-sm-12" src="img/m6.jpg" alt="Król Kruków"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Król Kruków</p></b>
					<b><br><p>Autor: Maggie Stiefvater</p></b>
					<p>Pierwszy tom magicznej sagi. Jedna dziewczyna i trzech chłopaków. Blue pochodzi z rodziny wróżek, jest medium do kontaktów ze światem zmarłych. Gansey, Adam i Ronan, trzej przyjaciele w elitarnej szkoły dla chłopców, obsesyjnie poszukują tajemniczych lini.</p> 
					<input type="hidden" value="30" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		</div>
</section>


<div class="row">
<div class="col-sm-12">
<footer class="col-sm-12">
  <h3>Kontakt</h3>
  <p>Zapraszamy do kontaktu od poniedziałku do piątku w godzinach 9-17.</p>
  <p>Adres: <br>
  ul. Leczkowa 18<br>
  80-432 Gdańsk<br>
  Tel.: 58 78 305 24</p>
</footer>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script = src "js/bootstrap.min.js"></script>
<script src="dist/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src = "meni.js"></script>
</body>
</html>