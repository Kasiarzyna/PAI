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
	
					
					<a href="img/g1.jpg" data-lightbox="roadtrip" data-title="Nemezis i inne utwory poetyckie"><img class="col-sm-12" src="img/g1.jpg" alt="Nemezis i inne utwory poetyckie"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Nemezis i inne utwory poetyckie</p></b>
					<b><br><p>Autor: Howard Phillips Lovecraft</p></b>
					<p>Nemezis i inne utwory poetyckie to pierwszy tak obszerny wybór najlepszej liryki z dorobku H.P. Lovecrafta. Prócz wszystkich utworów o charakterze niesamowitym i fantastycznym, w tym takich klasyków jak Grzyby z Yuggoth, Nemezis czy Prastary szlak.</p> 
					<input type="hidden" value="42" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/g2.jpg" data-lightbox="roadtrip" data-title="Przyszła na Sarnath zagłada"><img class="col-sm-12" src="img/g2.jpg" alt="Przyszła na Sarnath zagłada"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Przyszła na Sarnath zagłada</p></b>
					<b><br><p>Autor: Howard Phillips Lovecraft</p></b>
					<p>Przyszła na Sarnath zagłada. Opowieści niesamowite i fantastyczne to drugi po Zgrozie w Dunwich i innych przerażających opowieściach wybór najlepszych utworów H.P. Lovecrafta. Tym razem klasycznym opowiadaniom grozy, takim jak Zeznanie Randolpha Cartera.</p> 
					<input type="hidden" value="41" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/g3.jpg" data-lightbox="roadtrip" data-title="	
Zgroza w Dunwich"><img class="col-sm-12" src="img/g3.jpg" alt="	
Zgroza w Dunwich"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: 	
Zgroza w Dunwich</p></b>
					<b><br><p>Autor: Howard Phillips Lovecraft</p></b>
					<p>Czytelniku, miej się na baczności! Oto piętnaście najbardziej upiornych opowieści wszech czasów: Zgroza w Dunwich, Zew Cthulhu, Widmo nad Innsmouth, W górach szaleństwa, Przypadek Charlesa Dextera Warda, Kolor z innego wszechświata… </p> 
					<input type="hidden" value="46" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/g4.jpg" data-lightbox="roadtrip" data-title="Opowieści zebrane"><img class="col-sm-12" src="img/g4.jpg" alt="Opowieści zebrane"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Opowieści zebrane</p></b>
					<b><br><p>Autor: Howard Phillips Lovecraft</p></b>
					<p>Dzieła „dżentelmena z Providence”, jak nazywano pisarza, stanowiły inspirację dla tak głośnych autorów horrorów jak Stephen King, Anne Rice czy Clive Barker. Doprowadzając do perfekcji swój styl, cyzelował w opowiadaniach gotycki klimat niezwykłości.</p> 
					<input type="hidden" value="45" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/g5.jpg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-12" src="img/g5.jpg" alt="Bla1"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Wybór opowiadań</p></b>
					<b><br><p>Autor: Edgar Allan Poe</p></b>
					<p>Poe, prekursor współczesnego horroru i opowiadań detektywistycznych, w nowym, mistrzowskim przekładzie, pozbawionym przesadnej stylizacji, archaizacji czy "młodopolskiej" maniery. Znakomicie oddane walory językowe i literackie oryginałów.</p> 
					<input type="hidden" value="44" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/g6.jpeg" data-lightbox="roadtrip" data-title="My caption"><img class="col-sm-12" src="img/g6.jpeg" alt="Bla2"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Opowiadania</p></b>
					<b><br><p>Autor: Edgar Allan Poe</p></b>
					<p>Geniusz Poego polega na tym, że nie opowiada historii wprost, komentując wydarzenia i podając czytelnikowi gotową interpretację. W istocie pokazuje tylko postaci i ich zachowania, schematy i mechanizmy, których działanie oraz konsekwencje musimy zrozumieć.</p> 
					<input type="hidden" value="43" name="Nr_ksiazki">
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