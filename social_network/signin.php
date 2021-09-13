<!DOCTYPE html>
<html>
<head>
	<title>W@lking Zone</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<style>
		.clr {
			color : white;
		}
		
		input {
			background-color : inherit;
		}
	</style>
	 
</head>
<body>

<header>
	<div class="header_menu">
		
	</div>
	
	<div class="container text-left">
        <form class="form-signin d-grid gap-2" style="margin:1% 35%;" action="" method="post">
            <div class="text-center">
                <h1 class="h3 font-weight-normal clr">Login</h1>
            </div>
            <div class="form-label-group text-dark">
                <label for="inputEmail" class="clr">Email Address</label>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            </div>
            <div class="form-label-group text-dark">
                <label for="inputPassword" class="clr">Password</label>
                <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            </div>

            <!-- <div class="checkbox mb-3"> -->
                <!-- <label> -->
                    <!-- <input type="checkbox" value="remember-me"> Remember me -->
                <!-- </label> -->
            <!-- </div> -->
            <button class="btn btn-lg btn-outline-secondary btn-block my-2" type="submit" name="login">Sign in</button>
			<?php include("login.php"); ?>
            <p class="mb-3 text-muted text-center">© 2021 - so on...</p>
        </form>
    </div>

	
</header>

</body>
</html>