
<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="formelements";
		require('includes/head.php');
	?>
</head>
<body>
	
	<div class= "wrapper center-block">
		<?php
			require('includes/header.php');
		?>
		<div class="content-formelements center-block clearfix">
			<div class="left-content">
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
				<form class="options" action="options.php" method="post">
					<input type="radio" name="option" id="design"/><label for ="design">Design</label>
					<input type="radio" name="option" id="development"/><label for ="development">Development</label>
					<input type="radio" name="option" id="management"/><label for ="management">Management</label>
				</form>
			</div>

			<div class="right-content">
				<select id="category" name="category">
					<option value="">Select a category</option>
					<option value="Mobile Phones">Mobile Phones</option>
					<option value="Android Phones">Android Phones</option>
					<option value="GSM Phones">GSM Phones</option>
					<option value="Multi Sim Phones">Multi Sim Phones</option>
					<option value="Thablets"> Thablets</option>
				</select>
			</div>
		</div>

		<ul class="timeline center-block">
			<li>
				<div class="left-timeline">
					<div class="data">
						<span class="day">30</span>
						<span class="month">MAY</span>
					</div>
					<div class="circle"></div>
				</div>
				<div class="right-timeline">
					<div class="timeline-message">
						<div class="timeline-icon"></div>
						<div class="message">
							<h2>TIMOTHY</h2>
							<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					</div>
					<div class="reply-content">
						<input type="text" placeholder="Reply... |" class="reply" name="reply"/>
						<input type="submit" value="" class="reply-send"/>
					</div>
				</div>
			</li>
		</ul>
		
	</div>
	<?php
		require('includes/footer.php');
	?>
</body>
</html>

