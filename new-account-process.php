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

	$err = "";
	$success="";
	$userexist="";

	function NewUser(){
		global $success;
		$username = $_POST['username'];
		$useremail = $_POST['email'];
		$pass= md5($_POST['password']);
		$passconfirm = md5($_POST['confirmpassword']);
		$query ="INSERT INTO users (name, email, password, confirmpassword) VALUES('$username', '$useremail', '$pass', '$passconfirm')";
		
		$data =mysql_query($query);
		if ($data){
			$success ="You've successfully signed up for redui";
		}
		else {
			die('Error :' . mysql_error());
		}
	}

	function SignUp(){
		global $err;
		global $userexist;

		if(empty($_POST['username'])){
			$err ="Name is required";
			return false;
		}
	
	 	if(empty($_POST['email'])){
			$err ="Email is required";
			return false;
		}
		$email = $_POST['email'];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$err ="Email is invalid";
			return false;
		}
		if(empty($_POST['password'])){
			$err ="Password is required";
			return false;
		}
		if(empty($_POST['confirmpassword'])){
			$err ="Confirm password in required";
			return false;
		}
		if ($_POST['password'] != $_POST['confirmpassword']){
			$err ="Error passwors do nott match";
			return false;
		}

		if($err==""){
			$queryexist="SELECT * FROM users WHERE email = '$_POST[email]' ";
			$query = mysql_query($queryexist) or die (mysql_error());
			$row = mysql_fetch_array($query);

			if(!$row){
				NewUser();
			}
			else
			{
				$userexist="Sorry you are already registered user";
			}
		}
	}

	if(isset($_POST['signup'])){
		SignUp();
	}

	header('Location: new-account.php?err='.$err .$success .$userexist);


	mysql_close();

	die();
?>