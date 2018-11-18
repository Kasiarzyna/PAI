<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
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
<meta name="viewport" content="width=device-width, initial-scale=1">
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



<section class="tresc-item">
<div class="container">
<div class="row">
<div class="col-sm-6">

  <h3>REJESTRACJA</h3>
  <form method="POST" action="rejestracja.php">
  <br><b>Login:</b><br><br><input type="text" name="login"><br><br>
  <b>Hasło:</b><br><br><input type="password" name="haslo1"><br><br>
  <b>Powtórz hasło:</b><br><br><input type="password" name="haslo2"><br><br>
  <b>Email:</b><br><br><input type="text" name="email"><br><br><br>
  <input type="submit" value="Utwórz konto" name="rejestruj"><br><br><br>
  </form>
  </div>
 
  <div class="col-sm-6">
  
  <h3>LOGOWANIE</h3>
  <form method="POST" action="zaloguj.php">
  <br><b>Login:</b><br><br><input type="text" name="login"><br><br>
  <b>Hasło:</b><br><br><input type="password" name="haslo"><br><br><br>
  <input type="submit" value="Zaloguj" name="loguj"><br><br><br>

   </form>
   </div>
 </div>
 </div>
</section>


<footer>
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
</body>
</html>