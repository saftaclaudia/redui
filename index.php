<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
	<link rel="stylesheet" type="textcss" href ="stylesheet.css">
	<link type="text/css" rel="stylesheet" href="clearfix.css"/>
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
					<input type="checkbox" id="remember"/><label for="remember"> Remember me</label>
					<input type="checkbox" id="save-password"/><label for="save-password">Save Password</label>
					<input type="submit" value="SUBMIT"/>
				</form>
				
				<div class="menu">
					<div class="wrapper-menu">
						<div class="icon-menu"></div>
						<div class="menu-head">MENU</div>
					</div>
					<ul class="menu-list">
						<li><span class="profile"></span><a href="#">My Profile</a></li>
						<li><span class="messages"></span><a href="#">Messages</a></li>
						<li><span class="photos"></span><a href="#">My Photos <span class="nr-messages">10</span></a></li>
						<li><span class="videos"></span><a href="#">My Videos</a></li>
						<li><span class="settings"></span><a href="#">Settings</a></li>
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
					<div class="styled-select">
						<select placeholder="Select a category">
							<option>Mobile Phones</option>
							<option>Android Phones</option>
							<option>GSM Phones</option>
							<option>Multi Sim Phones</option>
							<option> Thablets</option>
						</select>
					</div>

					<div class="login">
						<div class="input-wrapper ">
							<div class="icon-user"></div>
							<input type="text" id="user" placeholder="User Name"/>
						</div>
						<div class="input-wrapper">
							<div class="icon-password"></div>
							<input type="password" name="psw" placeholder ="Password">
						</div>
						<input type="checkbox" id="remember-login"><label for="remember-login">Remember me</label>
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
