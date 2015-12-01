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

	$value1 = $_POST['name'];
	$value2 = $_POST['email'];
	$value3 = $_POST['password'];
	$pass= md5($_POST['password']);


	$sql ="INSERT INTO users (name, email, remember, password) VALUES('$value1', '$value2', '$value3', '$pass')";

	if (!mysql_query($sql)){
		die ('Error :' . mysql_error());
	}
	mysql_close();

	header('Location: index.php?success=true');
	die();
?>