<?php
	define('DB_NAME' , 'redui');
	define('DB_USER' , 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST' , 'localhost');

	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if(!$link){
		die('Could not connect :' . mysql_error());
	}

	$db_selected = mysql_select_db(DB_NAME, $link);

	if(!$db_selected){
		die('Con\'t use' . DB_NAME . ":" . mysql_error());
	}
	$err="";

	if (isset($_POST['email']) and isset($_POST['password'])){
		$useremail = $_POST['email'];
		$pass= md5($_POST['password']);
		$query ="SELECT * FROM users WHERE email='$useremail' and password='$pass'";
		$result=mysql_query($query) or die (mysql_error());
		$count=mysql_num_rows($result);

		if($count==1){
			$_SESSION['email']= $useremail;
		} else{
			echo "Invalid Login email or password.";
			$err="Invalid Login email or password";
		}
		if (isset($_SESSION['email'])){
			$useremail=$_SESSION['email'];
			echo "Hai $useremail";
		}
	}
	header('Location: index.php');
	mysql_close();

	die();
?>