<?php
	session_start();
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: logowanie.php');
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
	    $login = ($_POST['login']);
		$haslo = ($_POST['haslo']);
		$hasloszyfr =md5($haslo);
		
		$sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$hasloszyfr'";
		if($rezultat=$connect->query($sql)){
				$ilu_user=$rezultat->num_rows;
				if($ilu_user>0){
					$_SESSION['zalogowany']=true;
					$wiersz=$rezultat->fetch_assoc();
					$_SESSION['id']=$wiersz['id'];
					$_SESSION['login']=$wiersz['login'];
					$_SESSION['haslo']=$wiersz['haslo'];					
					$rezultat->free();
					header('Location: mojekonto.php');
					if($_SESSION['id']==1){
						$_SESSION['admin']=true;
						header('Location: admin.php');
					}
					elseif($_SESSION['id']!==1)
					{
						$_SESSION['admin']=false;
					}
				}
				else{
					echo "Nieprawidłowy login lub hasło. Spróbuj ponownie.";
					
				}
					
		}
	}
		
		
		$connect->close();
   
	}
?>