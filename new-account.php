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
			if (isset($_GET['err'])) {
				echo '<p class="error">'. $_GET['err'] .'</p>';
			};
		?>
		
		<div class="content center-block">
			<form action="new-account-process.php" method="post">
				<div class="input-wrapper">
					<div class="border"></div>
					<input type="text" placeholder="Name" name="username" class="input-border-styled"/>
					
				</div>
				<div class="input-wrapper">
					<div class="border"></div>
					<input type= "text" placeholder="Email address" name="email" class="input-border-styled"/>
				</div>
				<div class="input-wrapper">
					<div class="border"></div>
					<input type="password"  placeholder ="Password" name="password" class="input-border-styled"/>
				</div>
				<div class="input-wrapper">
					<div class="border"></div>
					<input type="password"  placeholder ="Confirm Password" name="confirmpassword" class="input-border-styled"/>
				</div>
				<input type="submit" value="CREATE ACCOUNT" name="signup"/>
			</form>
		</div>
	</div>
	<?php 
		require('includes/footer.php');
	?>

</body>
</html>