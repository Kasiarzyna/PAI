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
	
					
					<a href="img/p1.jpg" data-lightbox="roadtrip" data-title="Jedz i trenuj"><img class="col-sm-12" src="img/p1.jpg" alt="Jedz i trenuj"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Jedz i trenuj</p></b>
					<b><br><p>Autor: Nancy Clark</p></b>
					<p>Poradnik odżywiania dla aktywnych.</p> 
					<input type="hidden" value="13" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/p2.jpg" data-lightbox="roadtrip" data-title="Boży poradnik antydepresyjny. Wyjść z depresji duchowej"><img class="col-sm-12" src="img/p2.jpg" alt="Boży poradnik antydepresyjny. Wyjść z depresji duchowej"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Boży poradnik antydepresyjny. Wyjść z depresji duchowej</p></b>
					<b><br><p>Autor: Arkadiusz Łodziewski</p></b>
					<p>Książka dla wszystkich tych, którzy czują się zagubieni w codzienności. Zawiera krótkie rozważania, myśli, które pozwalają zwrócić uwagę na to, co w duchowym życiu najistotniejsze. Często bowiem głowa zajęta jest przyziemnymi sprawami.</p> 
					<input type="hidden" value="14" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/p3.jpg" data-lightbox="roadtrip" data-title="Ministranci."><img class="col-sm-12" src="img/p3.jpg" alt="Ministranci."/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Ministranci</p></b>
					<b><br><p>Autor: Sebastian Kosecki</p></b>
					<p>Poradnik dla opiekunów liturgicznej służby ołtarza.</p> 
					<input type="hidden" value="15" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/p4.jpg" data-lightbox="roadtrip" data-title="	
Rowery od A do Z"><img class="col-sm-12" src="img/p4.jpg" alt="	
Rowery od A do Z"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: 	
Rowery od A do Z</p></b>
					<b><br><p>Autor: Korzonek Marcin Jakub</p></b>
					<p>Poradnik rowerowy przeznaczony zarówno dla tych, którzy dopiero zastanawiają się nad wyborem i kupnem roweru, jak i bardziej zaawansowanych cyklistów.</p> 
					<input type="hidden" value="16" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					
					<a href="img/p5.jpg" data-lightbox="roadtrip" data-title="Edycja tekstów. Praktyczny poradnik"><img class="col-sm-12" src="img/p5.jpg" alt="Edycja tekstów. Praktyczny poradnik"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Edycja tekstów. Praktyczny poradnik</p></b>
					<b><br><p>Autor: Adam Wolański</p></b>
					<p>Książka dotyczy wszelkich aspektów profesjonalnego przygotowania różnych typów publikacji do wydania drukiem lub elektronicznie - począwszy od poziomu typograficznego (rodzaje pisma, wyróżnienia typograficzne), przez elementy językowe i pozajęzykowe.</p> 
					<input type="hidden" value="17" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/p6.jpg" data-lightbox="roadtrip" data-title="Poradnik dżentelmena i damy"><img class="col-sm-12" src="img/p6.jpg" alt="Poradnik dżentelmena i damy"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Poradnik dżentelmena i damy</p></b>
					<b><br><p>Autor: Zbigniew Hojka</p></b>
					<p>"Poradnik dżentelmena i damy" to praktyczna publikacja oprowadzająca po pełnej mielizn i pułapek współczesnej codzienności. Przynosi także ogromną wiedzę o kulturze współczesnej i jej źródłach, o zwyczajach i obyczajach, a niezliczone ciekawostki zaskakuj.</p> 
					<input type="hidden" value="18" name="Nr_ksiazki">
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
  <h4>Kontakt</h4>
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