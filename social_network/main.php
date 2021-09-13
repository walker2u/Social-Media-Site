<!DOCTYPE html>
<html>
<head>

	<title>W@lkingZone</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body>

<header>
	<div class="header_menu">
		<div class="menu_list">
			<ul>
				<li><a href="https://www.facebook.com/profile.php?id=100026575387474" >Facebook</a></li>
				<li><a href="https://www.instagram.com/mayank._kr/">Instagram</a> </li>
				<li><a href="https://github.com/walker2u">Git Hub</a></li>
			</ul>
		</div>
	</div>

	<div class="header_content">
		<h2>Simple / Photography / Social Platform</h2>
		<h1>W@lkingZone</h1>
		<form method="post" action="">
			<button name="signup">
				<a href="">Sign Up</a>
			</button>
			<?php
				if(isset($_POST['signup'])){
					echo "<script>window.open('signup.php','_self')</script>";
				}
			?>
			
			<button name="login">
				<a href="">Login</a>
			</button>
			<?php
				if(isset($_POST['login'])){
					echo "<script>window.open('signin.php','_self')</script>";
				}
			?>
			
		</form>
	</div>
</header>

</body>
</html>