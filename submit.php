<?php
	define('DB_NAME' , 'form1');
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

	$value = $_POST['username'];
	$value1 = $_POST['email'];
	$value2 = isset($_POST['remember']) ? 'yes' : 'no';
	$value3 = isset($_POST[('savepassword']) ? 'yes' : 'no';
	$pass = md5($_POST[('savepassword'])

	$sql ="INSERT INTO submit1 (username, email, remember, savepassword) VALUES('$value', '$value1', '$value2', '$value3')";

	if (!mysql_query($sql)){
		die ('Error :' . mysql_error());
	}
	mysql_close();

	header('Location: index.php?success=true');
	die();
?>