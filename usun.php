<?php
session_start();

	require_once "connect.php";
	$connect = new mysqli($host, $user, $pass, $database);
	if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}
	else
	{
		$ksiazka = ($_POST['ksiazka']);
		$id=$_SESSION['id'];
		$sql = "SELECT * FROM ulubione WHERE id='$id' AND Nr_ksiazki='$ksiazka'";
		$rezultat=$connect->query($sql);	
		$wiersz=$rezultat->fetch_assoc();
		
		$Id_ulubione=$wiersz['Id_ulubione'];
		$sql2 = "DELETE FROM ulubione WHERE Id_ulubione='$Id_ulubione'";
		$connect->query($sql2);
		header('Location: mojekonto.php');
		
	}
		$connect->close();
   
	
?>
