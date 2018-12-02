<?php
session_start();

if ((empty($_POST['tytul'])) || (empty($_POST['autor'])))
	{
		echo "Uzupełnij arkusz";
		exit();
	}

else{	
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
			
			
		$tytul = ($_POST['tytul']);
		$autor = ($_POST['autor']);

		$sql = "SELECT * FROM ksiazki WHERE Tytul='$tytul' AND Autor='$autor'";
		$rezultat=$connect->query($sql);	
	
		if(mysqli_num_rows($rezultat) > 0) {
		$r = mysqli_fetch_object($rezultat);
		$sql2 = "DELETE FROM ksiazki WHERE Tytul='$tytul' AND Autor='$autor'";
		$rezultat2=$connect->query($sql2);	
		header('Location: mojekonto.php');	
		}
		else
		{
			echo "Nie znaleziono w bazie danych książki";
		}
		
		
	}
		$connect->close();
   
}
?>

	