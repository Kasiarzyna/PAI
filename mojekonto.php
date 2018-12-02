<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
	if((isset($_SESSION['admin'])) && ($_SESSION['admin']==true))
		{
			header('Location: admin.php');
			exit();
		}
	
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
<meta charset="utf8_polish_ci">
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


<div class="row">
<div class="col-sm-12">
<section>
<br><br>
  <h2>
<?php
echo "Witaj, ".$_SESSION['login']."!"; 
?></h2><br><br>
<?php
	require_once "connect.php";
	$connect = new mysqli($host, $user, $pass, $database);
	$connect -> query ('SET NAMES utf8');
	$connect -> query ('SET CHARACTER_SET utf8_unicode_ci');
	if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}
	else
	{
		
		$id=$_SESSION['id'];
		$sql="SELECT * FROM ulubione join ksiazki ON ulubione.Nr_ksiazki=ksiazki.Nr_ksiazki where ulubione.id='$id'";
		$wynik=$connect->query($sql);
	
		if(mysqli_num_rows($wynik) > 0) { 
		echo "<h3>Twoje ulubione książki:</h3>";
		/* jeżeli wynik jest pozytywny, to wyświetlamy dane */ 
		echo "<table>"; 
		while($r = mysqli_fetch_object($wynik)) { 
        echo "<tr>"; 
		echo "<td><br>".$r->obrazek."</td>";
        echo "<td><b>Tytuł: ".$r->Tytul."</b><br>"; 
		echo "<b>Autor: ".$r->Autor."</b><br>"; 
        echo "<p align='justify'>".$r->opis."</p><br><br>"; 
		echo "<form method='POST' action='usun.php'><input type='hidden' name='ksiazka' value=".$r->Nr_ksiazki."><input type='submit' value='Usuń'></form></td>";
        echo "</tr>"; 
		} 
		echo "</table>"; 
		//koniec tabeli
		}
		//wybór najczęściej polubionej kategorii
		echo "<br><br><h3>Polecane specjalnie dla Ciebie, ".$_SESSION['login'].":</h3>"; 
		$sql2="select Kategoria, count(Tytul) from
				(select Tytul, Kategoria from ulubione join ksiazki on ulubione.Nr_ksiazki=ksiazki.Nr_ksiazki where ulubione.id='$id')
					as b group by Kategoria limit 1";
		$wynik2=$connect->query($sql2);
		$r2 = mysqli_fetch_object($wynik2);
		$Kat=$r2->Kategoria;
		
		//wybór 3 książek z najczęściej polubionej kategorii
		$sql3="SELECT  * from ksiazki where Nr_ksiazki NOT IN 
		(SELECT ksiazki.Nr_ksiazki FROM ulubione join ksiazki ON ulubione.Nr_ksiazki=ksiazki.Nr_ksiazki where ulubione.id='$id') and Kategoria ='$Kat' limit 3";
		
		$wynik3=$connect->query($sql3);
		
		if(mysqli_num_rows($wynik3) > 0) { 
		/* jeżeli wynik jest pozytywny, to wyświetlamy dane */ 
		echo "<table>"; 
		while($r3 = mysqli_fetch_object($wynik3)) { 
        echo "<tr>"; 
		echo "<td><br>".$r3->obrazek."</td>";
        echo "<td><b>Tytuł: ".$r3->Tytul."</b><br>"; 
		echo "<b>Autor: ".$r3->Autor."</b><br>"; 
        echo "<p align='justify'>".$r3->opis."</p><br><br>"; 
		echo "<form method='POST' action='ulubione.php'><input type='hidden' name='Nr_ksiazki' value=".$r3->Nr_ksiazki."><input type='submit' value='Ulubione'></form></td>";
        echo "</tr>"; 
		} 
		echo "</table>"; 

			
	}
	if(mysqli_num_rows($wynik) ==0) { 
	echo "<br><br><h3>Gratulacje, ".$_SESSION['login'].". Teraz możesz dodać książki do ulubionych</h3>";
	}
	
	
		
		
		$connect->close();
	}
	
?>
<br><br> <br><br>
<form method="POST" action="wyloguj.php">
<input type="submit" value="Wyloguj" name="wyloguj"><br><br><br><br>
</form>
</section>
</div>
</div>

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