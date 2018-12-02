<?php
session_start();

if ((!isset($_SESSION['zalogowany'])))
	{
	header('Location: logowanie.php');
	exit();
	}
elseif((isset($_SESSION['admin'])) && ($_SESSION['admin']==false))
	{
		header('Location: mojekonto.php');
		exit();
	}
	

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

<section>

<div class="row">
<div class="col-md-12">
<?php
echo "<h2>Witaj, ".$_SESSION['login']."!</h2><br><br>"; 
?>

<form method="POST" action="wyloguj.php">
<input type="submit" value="Wyloguj" name="wyloguj"><br><br><br><br>
</form>
</div>
</div>

<div class="tresc-item">
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-5">



  <br><h3>Dodaj książkę</h3>
  <form method="POST" action="edycjadodaj.php">
  <br><b>Tytuł:</b><br><br><input type="text" name="tytul"><br><br>
  <b>Autor:</b><br><br><input type="text" name="autor"><br><br>
  <b>Opis:</b><br><br><input type="text" name="opis"><br><br>
  
  <b>Kategoria:</b><br><br><input type="radio" name="kategoria" value="Dla dzieci" checked> Dla dzieci<br>
							<input type="radio" name="kategoria" value="Dla młodzieży"> Dla młodzieży<br>
							<input type="radio" name="kategoria" value="Historia"> Historia<br>
							<input type="radio" name="kategoria" value="Groza"> Groza<br>
							<input type="radio" name="kategoria" value="Poradniki"> Poradniki<br><br>
  
  <input type="submit" value="Dodaj" name="Dodaj"><br><br><br>
  </form>
  </div>
 
  <div class="col-md-5">
  
  <br><h3>Usuń książkę</h3>
  <form method="POST" action="edycjaudun.php">
  <br><b>Tytuł:</b><br><br><input type="text" name="tytul"><br><br>
  <b>Autor:</b><br><br><input type="text" name="autor"><br><br><br>
  <input type="submit" value="Usuń" name="usun"><br><br><br>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src = "meni.js"></script>
</body>
</html>