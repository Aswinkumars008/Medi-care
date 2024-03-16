<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<br><br><br><br><br><br><br>
<div class="container">
	<section id="content">
		<form action="log.php" method="post" autocomplete="off">
			<h1>Whole Sale Login</h1>
			</span>

			<div>
				<input type="text" placeholder="Email"  name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>           
            <div>
		<a href="../index.php" style="text-decoration:none; font-size:20px; color:red; letter-spacing:5px; text-shadow:0px 1px 1px black;">Back</a>
			</div>
             <div>
				<a href="signup.php" style="text-decoration:none; font-size:20px; letter-spacing:2px; text-shadow:0px 1px 1px black;">Sign Up</a>
			</div>
		</form><!-- form -->	
	</section><!-- content -->
</div><!-- container -->
</body>
</html>