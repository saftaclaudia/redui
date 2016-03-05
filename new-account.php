<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$title="new-account";
		require('includes/head.php');
	?>
</head>
<body>

	<div class= "wrapper center-block">
		<?php
			require('includes/header.php');
		?>
		<div class="content center-block">
			<form action="new-account-process.php" method="post">
				<div class="input-wrapper">
					<div class="border"></div>
					<input type="text" placeholder="Name" value="<?php echo $_SESSION["username"]; ?>" name="username" class="input-border-styled"/>
					
				</div>
				<div class="input-wrapper">
					<div class="border"></div>
					<input type= "text" placeholder="Email address" value="<?php echo $_SESSION["email"]; ?>" name="email" class="input-border-styled"/>
				</div>
				<div class="input-wrapper">
					<div class="border"></div>
					<input type="password"  placeholder ="Password" value="<?php echo $_SESSION["password"]; ?>" name="password" class="input-border-styled"/>
				</div>
				<div class="input-wrapper">
					<div class="border"></div>
					<input type="password"  placeholder ="Confirm Password"  value= "<?php echo $_SESSION["confirmpassword"]; ?>" name="confirmpassword" class="input-border-styled"/>
				</div>
				<input type="submit" value="CREATE ACCOUNT" name="signup"/>
			</form>
		</div>
		<?php
			if(isset($_GET['err'])) {
				echo '<p class="error">'. $_GET['err'] .'</p>';
			};
		?>
		<a href="index.php" class="loginlink">LOGIN HERE</a>
	</div>
	<?php 
		require('includes/footer.php');
	?>
</body>
</html>