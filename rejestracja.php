
<?php
$log=0;
$em=0;	
$has=0;
 try
   {
      $pdo = new PDO('mysql:host=localhost;dbname=pai', 'root', 'haslo1234');
      /*$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
	    $login = ($_POST['login']);
		$haslo1 = ($_POST['haslo1']);
		$haslo2 = ($_POST['haslo2']);
		$email = ($_POST['email']);
		$ip = ($_SERVER['REMOTE_ADDR']);
$host="localhost";
$user="root";
$pass="haslo1234";
$database="pai";
	  
$connect = mysqli_connect($host, $user, $pass, $database);
$query="SELECT login FROM uzytkownicy WHERE login='$login'";
$result = mysqli_query($connect, $query);
$numrow=mysqli_num_rows($result);


	if((empty($login))||(empty($mail))||(empty($haslo1))||(empty($haslo2)))
		echo "Uzupełnij arkusz.<br>";
	
	if ($numrow == 0) 
 {
	$log=1;
	
 }
    else {
		echo "Podany login jest już zajęty. Spróbuj ponownie.<br>";
		$log=0;   
	}
	
	$query2="SELECT email FROM uzytkownicy WHERE email='$email'";
	$result2 = mysqli_query($connect, $query2);
	$numrow2=mysqli_num_rows($result2);
		if ($numrow2 == 0) 
 {
	$ma=1;
	
 }
    else {
		echo "Podany email jest już w użyciu. Spróbuj ponownie.<br>";
		$ma=0;   
	}
	
   $sprawdz = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';

	if(preg_match($sprawdz, $email)){
	$em=1;}
	else{
	echo 'Adres e-mail nieprawidłowy. Spróbuj ponownie.<br>';
	$em=0;}


    if ($haslo1 == $haslo2) 
      {
		  $has=1;

      }
    else {
		echo "Hasła nie są takie same. Spróbuj ponownie.<br>";
		$has=0;
	}
	
	
if(($log==1)&&($has==1)&&($em==1)&&($ma==1)){
        $pdo->exec("INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`, `ip`)
        VALUES ('".$login."', '".md5($haslo1)."', '".$email."', '".$ip."');");
 
       echo 'Konto utworzone';
	   header('Location: konto_utw.html');
	   exit;}

   } 
   
   
   catch(PDOException $e)
   {
      echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   }
  
?>