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
	
					<a href="img/tajcyrk.jpg" data-lightbox="roadtrip" data-title="Tajemnica cyrku"><img class="col-sm-12" src="img/tajcyrk.jpg" alt="Tajemnica cyrku"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Tajemnica cyrku</p></b>
					<b><br><p>Autor: Martin Widmark</p></b>
					<p>Na arenie cyrku Splendido, który właśnie zawitał do Valleby, klaun Bobo i magik Trocadero zabawiają publiczność swoimi sztuczkami, a potężny Ali Pasza popisuje się swoją siłą. Zapatrzeni w nich widzowie okradani są przez nieuchwytnego kieszonkowca. </p> 
					<input type="hidden" value="1" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>

		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/1.jpg" data-lightbox="roadtrip" data-title="Dzieci gotują"><img class="col-sm-12" src="img/1.jpg" alt="Dzieci gotują"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Dzieci gotują</p></b>
					<b><br><p>Autor: Agnieszka Górska</p></b>
					<p>Książka z prostymi przepisami dla dzieci.</p> 
					<input type="hidden" value="2" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>

		</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/g2.jpg" data-lightbox="roadtrip" data-title="Rok w lesie"><img class="col-sm-12" src="img/2.jpg" alt="Rok w lesie"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Rok w lesie</p></b>
					<b><br><p>Autor: Emilia Dziubak</p></b>
					<p>Historie o zwierzętach leśnych.</p> 
					<input type="hidden" value="3" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/3.jpg" data-lightbox="roadtrip" data-title="Pszczoły"><img class="col-sm-12" src="img/3.jpg" alt="Pszczoły"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Pszczoły</p></b>
					<b><br><p>Autor: Piotr Socha</p></b>
					<p>Daj się zaprosić do magicznego królestwa pszczół. Przyjrzyj się z bliska, jak są zbudowane, zajrzyj do ich domu, poznaj ich zwyczaje. Zobacz, jak tańczą, i dowiedz się, kiedy i po co to robią..</p> 
					<input type="hidden" value="4" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/4.jpg" data-lightbox="roadtrip" data-title="Przygoda słonia"><img class="col-sm-12" src="img/4.jpg" alt="Przygoda słonia"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Przygoda słonia</p></b>
					<b><br><p>Autor: Ewa Bukowska</p></b>
					<p>Bajki filozoficzne, przeznaczone dla dzieci powyżej 5 roku życia, których autorką jest Ewa Bukowska – żona znanego i lubianego aktora. Do czytania samemu.</p> 
					<input type="hidden" value="5" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>

					</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/5.jpg" data-lightbox="roadtrip" data-title="Pan Kuleczka"><img class="col-sm-12" src="img/5.jpg" alt="Pan Kuleczka"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Pan Kuleczka</p></b>
					<b><br><p>Autor: Wojciech Widłak</p></b>
					<p>Krótkie, barwnie ilustrowane opowiadania dla dzieci w każdym wieku. Pana Kuleczkę chciałby znać każdy. Zapewnia bezpieczeństwo i dyskretnie towarzyszy dzieciństwu.</p> 
					<input type="hidden" value="6" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>

			</div>
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