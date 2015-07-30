<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
	<link rel="stylesheet" type="textcss" href ="stylesheet.css">
	<link type="text/css" rel="stylesheet" href="assets/clearfix.css"/>
	<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class= "wrapper center-block">
		<div class="logo">
			<img src="images/logo-img.png">
			<h1>RED<span>UI</span></h1>
		</div>
		<div class="content center-block">
			<div class="left-content">
				<form>
					<div class="input-wrapper">
						<div class="input-border"></div>
						<input type="text" placeholder="Name"/>
					</div>
					<div class="input-wrapper">
						<div class="input-border"></div>
						<input type= "text" placeholder="Email address"/>
					</div>
					<div class="submit-options">
						<input type="checkbox" id="remember"/><label for="remember"> Remember me</label>
						<input type="checkbox" id="save-password"/><label for="save-password">Save Password</label>
					</div>
					<input type="submit" value="SUBMIT"/>
				</form>
				
				<div class="menu">
					<div class="wrapper-menu">
						<div class="icon-menu"></div>
						<div class="menu-head">MENU</div>
					</div>
					<ul class="menu-list">
						<li><a href="#"><span class="profile"></span><p>My Profile</p></a></li>
						<li><a href="#"><span class="messages"></span><p>Messages</p></a></li>
						<li><a href="#"><span class="photos"></span><p>My Photos<span class="nr-messages">10</span></p></a></li>
						<li><a href="#"><span class="videos"></span><p>My Videos</p></a></li>
						<li><a href="#"><span class="settings"></span><p>Settings</p></a></li>
					</ul>
				</div>
			
				<form class="options">
					<input type="radio" name="option" id="design"/><label for ="design">Design</label>
					<input type="radio" name="option" id="development"/><label for ="development">Development</label>
					<input type="radio" name="option" id="management"/><label for ="management">Management</label>
				</form>
			</div>

			<div class="right-content">
				<form>
					<select  id="category" name="category">
						<option value="">Select a category</option>
						<option value="Mobile Phones">Mobile Phones</option>
						<option value="Android Phones">Android Phones</option>
						<option value="GSM Phones">GSM Phones</option>
						<option value="Multi Sim Phones">Multi Sim Phones</option>
						<option value="Thablets"> Thablets</option>
					</select>

					<div class="login">
						<div class="input-wrapper ">
							<div class="icon-user"></div>
							<input type="text" id="user" placeholder="User Name"/>
						</div>
						<div class="input-wrapper">
							<div class="icon-password"></div>
							<input type="password" name="psw" placeholder ="Password">
						</div>
						<div class="login-options">
							<input type="checkbox" id="remember-login"><label for="remember-login" class="checkbox-label">Remember me</label>
						</div>
						<input type="submit" value="LOGIN"/>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type='text/javascript' src= 'assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src= 'assets/bootstrap.min.js'></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
