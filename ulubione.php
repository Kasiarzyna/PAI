<?php
	session_start();
	if ((!isset($_POST['Nr_ksiazki'])))
	{
		header('Location: glowna.php');
		exit();
	}
	else{
	require_once "connect.php";
	$connect = new mysqli($host, $user, $pass, $database);
	if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}
	else
	{
		$Nr_ksiazki = ($_POST['Nr_ksiazki']);
		$sql = "SELECT * FROM ksiazki WHERE Nr_ksiazki='$Nr_ksiazki'";
		
		$rezultat=$connect->query($sql);	
		$wiersz=$rezultat->fetch_assoc();
			
		
		if (!isset($_SESSION['zalogowany']))
		{
		header('Location: logowanie.php');
		exit();
		}
		else{
		$id=$_SESSION['id'];
		$sql3 = "SELECT * FROM ulubione WHERE id='$id' AND Nr_ksiazki='$Nr_ksiazki'";
		$rezultat3=$connect->query($sql3);
				$ile=mysqli_num_rows($rezultat3);
				if($ile == 0){
					$sql2 = "INSERT INTO ulubione (id,Nr_ksiazki) VALUES ('$id','$Nr_ksiazki')";
					$connect->query($sql2);
					echo "done";
				}
					header('Location: mojekonto.php');
	
		}
					
			
					
		
	}
		
		
		$connect->close();
   
	}
?>