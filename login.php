<?php

	session_start();//otwieranie sesji 

	if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";
	
	$connect = @new mysqli($host,$db_user,$db_password,$db_name);//połączenie z bazą danych
	//@ - nie wyrzuca błędu
	
	//jeżeli sie nie uda połączyć to
	if($connect->connect_errno!=0)
	{
			echo "Error: ". $connect->connect_errno;
	}
	else
	{
			$login = $_POST['login'];
			$password = $_POST['password'];
			
			//poprawne wykonanie zapytania
			if($result = @$connect->query(sprintf("SELECT * FROM it_users WHERE user='%s' AND pass='%s'",
			mysqli_real_escape_string($connect,$login),
			mysqli_real_escape_string($connect,$password))))
			{
				$users_amount = $result->num_rows;
				if($users_amount>0)
				{
					$_SESSION['loggedIn']=true;
					//utworzenie tablicy skojarzeniowej (ze słownym indeksem)
					$row  = $result->fetch_assoc(); 
					$_SESSION['user'] = $row['user'];
					
					unset($_SESSION['error']);
					$result->close();
					header('Location: main.php');
				}
				else
				{
					$_SESSION['error']='<span style="color:red">Incorrect Login or Password</span>';
					header('Location: index.php');
				}
			}
			$connect->close();
	} 
?>