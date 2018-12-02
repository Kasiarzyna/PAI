
<?php


session_start();
	if ((empty($_POST['tytul'])) || (empty($_POST['autor']))  || (empty($_POST['opis'])))
	{
		echo "Uzupełnij arkusz";
		exit();
	}
	else{
require_once "connect.php";	  
$connect = @new mysqli($host, $user, $pass, $database);
$connect -> query ('SET NAMES utf8');
$connect -> query ('SET CHARACTER_SET utf8_unicode_ci');

if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}

		else
	{
			
		$tytul = ($_POST['tytul']);
		$autor = ($_POST['autor']);
		$opis = ($_POST['opis']);
		$kategoria = ($_POST['kategoria']);
		//$obrazek  = ($_POST['obrazek']);
		
		$sql = "SELECT * FROM ksiazki WHERE Tytul='$tytul' AND Autor='$autor'";
		$rezultat=$connect->query($sql);	
	
		if(mysqli_num_rows($rezultat) > 0) {
		$r = mysqli_fetch_object($rezultat);
		echo "W bazie istnieje książka o podanych parametrach<br>";
			
		}
		else
		{
			$sql2 = "INSERT INTO  ksiazki (Tytul, Autor, opis, Kategoria)
			VALUES ('$tytul ', '$autor', '$opis', '$kategoria')";
			$connect->query($sql2);	
			header('Location: admin.php');
			//	'<a href='$obrazek' data-lightbox='roadtrip' data-title='$tytul'><img class='col-sm-12' src='$obrazek.jpg' alt='$tytul'/></a>'
		}
		
		
	}
		$connect->close();
		
   
	}
?>