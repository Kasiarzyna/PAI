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
	
					<a href="img/h1.jpg" data-lightbox="roadtrip" data-title="Spowiedź Hitlera"><img class="col-sm-12" src="img/h1.jpg" alt="Spowiedź Hitlera"/></a><br><br>
					
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Spowiedź Hitlera</p></b>
					<b><br><p>Autor: Christopher Macht</p></b>
					<p>Kwiecień, 1945 rok. Do siedziby Adolfa Hitlera na specjalne wezwanie wodza zostaje sprowadzony "Szlachetny Żyd", Eduard Bloch. Ten sam, który przez wiele lat leczył matkę kanclerza Trzeciej Rzeszy, za co Hitler był mu szalenie wdzięczny. Führer oznajmia...</p> 
					<input type="hidden" value="7" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
					<a href="img/h2.jpg" data-lightbox="roadtrip" data-title="Historia XIX wieku. Przeobrażenie świata"><img class="col-sm-12" src="img/h2.jpg" alt="Historia XIX wieku. Przeobrażenie świata"/></a><br><br>
	
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Historia XIX wieku. Przeobrażenie świata</p></b>
					<b><br><p>Autor: Jurgen Osterhammel</p></b>
					<p>Historia XIX wieku. Przeobrażenie świata to nie tylko wybitna praca historyczna, ale przede wszystkim pasjonująca lektura, od której trudno się oderwać.</p> 
					<input type="hidden" value="8" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>

					</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
										<a href="img/h3.jpg" data-lightbox="roadtrip" data-title="Okruchy tamtych dni. Powstanie Warszawskie na Powiślu. 1 sierpnia - 6 września"><img class="col-sm-12" src="img/h3.jpg" alt="Okruchy tamtych dni. Powstanie Warszawskie na Powiślu. 1 sierpnia - 6 września"/></a><br><br>

					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Okruchy tamtych dni. Powstanie Warszawskie na Powiślu. 1 sierpnia - 6 września</p></b>
					<b><br><p>Autor: Stanisław Jarzyna</p></b>
					<p>Wydawało się, że temat Powstania Warszawskiego został już wyczerpany. A jednak książka Stanisława Jarzyny odkrywa jeszcze inne, dotąd nieznane mi fakty, związane z przebiegiem walk na warszawskim Powiślu. Posiada ona niewątpliwe cechy raportu, sporządzone.</p> 
					<input type="hidden" value="9" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
		
						<a href="img/h4.jpg" data-lightbox="roadtrip" data-title="D-Day. Bitwa o Normandię"><img class="col-sm-12" src="img/h4.jpg" alt="D-Day. Bitwa o Normandię"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: D-Day. Bitwa o Normandię</p></b>
					<b><br><p>Autor: Antony Beevor</p></b>
					<p>6 czerwca 1944 brytyjscy i amerykańscy żołnierze rozpoczęli inwazję na Normandię. Ten dzień przeszedł do historii jako D-Day. Przeprowadzona na gigantyczną i bezprecedensową skalę operacja, w której wzięło udział niemal trzy miliony żołnierzy, stała się...</p> 
					<input type="hidden" value="10" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/h5.jpg" data-lightbox="roadtrip" data-title="Absurdy i kurioza przedwojennej Polski"><img class="col-sm-12" src="img/h5.jpg" alt="Absurdy i kurioza przedwojennej Polski"/></a><br><br>

					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Pakt Ribbentrop-Beck. Czyli jak Polacy mogli u boku III Rzeszy pokonać Związek Sowiecki</p></b>
					<b><br><p>Autor: Piotr Zychowicz</p></b>
					<p>W dziejach narodów są chwile, gdy trzeba zacisnąć zęby i iść na bolesne koncesje. Ustąpić, aby ratować państwo przed zniszczeniem, a obywateli przed zagładą. W takiej sytuacji znalazła się Polska w 1939 roku.</p> 
					<input type="hidden" value="11" name="Nr_ksiazki">
					<input type="submit" value="Ulubione">
					<br><br><br>
					</form>
		</div>
		<div class="col-md-1 offset-md-1"></div>
		<div class="col-md-4">
	
					<a href="img/h6.jpg" data-lightbox="roadtrip" data-title="Pakt Ribbentrop-Beck. Czyli jak Polacy mogli u boku III Rzeszy pokonać Związek Sowiecki"><img class="col-sm-12" src="img/h6.jpg" alt="Pakt Ribbentrop-Beck. Czyli jak Polacy mogli u boku III Rzeszy pokonać Związek Sowiecki"/></a><br><br>
					<form method="POST" action="ulubione.php">
					<b><br><p>Tytuł: Absurdy i kurioza przedwojennej Polski</p></b>
					<b><br><p>Autor: Piotrowski Remigiusz</p></b>
					<p>Co śmieszyło przeciętnego obywatela II RP?
Po co rozkręcano afery robakowe w wykwintnych warszawskich lokalach?
Kto był najgłupszym przestępcą przedwojennej Polski?
Ile kosztowało zaaranżowanie małżeństwa z domatorką przy kości, a ile z panną szczupłą.</p> 
					<input type="hidden" value="12" name="Nr_ksiazki">
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