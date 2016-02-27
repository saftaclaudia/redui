<!DOCTYPE html>
<html>
<head>
	<?php
		$title="loginpage";
		require('includes/head.php');
	?>
</head>
<body>
	<div class= "wrapper center-block">
		<?php 
			require('includes/header.php');
		?>
		<div class="content center-block">
			<form action="login-process.php" method="post" class="center-block">
				<div class="input-wrapper">
					<div class="icon-user"></div>
					<input type= "text" placeholder="Email address" name="email" id="user" class="input-icon-styled"/>
				</div>
				<div class="input-wrapper">
					<div class="icon-password"></div>
					<input type="password" placeholder ="Password" name="password" class="input-icon-styled"/>
				</div>
				<input type="submit" value="LOGIN" name="submit"/>
			</form>
			<?php
				if(isset($_GET['err'])){
					echo '<p class="error">'. $_GET['err'] .'</p>';
				};
			?>
			<a href="new-account.php" class="styled-link">NEW ACCOUNT</a>
		</div>
	</div>
	<?php
		require ('includes/footer.php');
	?>
</body>
</html>

