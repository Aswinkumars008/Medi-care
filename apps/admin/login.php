<?php include '../classess/Adminlogin.php';?>
<?php
$al = new Adminlogin();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$adminUser = $_POST['adminUser'];
	$adminPassword = $_POST['adminPassword'];

	$loginchk = $al->adminlogin($adminUser,$adminPassword);
}
?>

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
		<form action="login.php" method="post" autocomplete="off">
			<h1>Admin Login</h1>
<span style="color: red;font-size: 18px;">
	<?php
if (isset($loginchk)) {
	echo $loginchk;
}

	?>

</span>

			<div>
				<input type="text" placeholder="Username"  name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="adminPassword"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
            <div>
				<a href="../index.php" style="text-decoration:none; font-size:20px; letter-spacing:5px; text-shadow:0px 1px 1px black;">Back</a>
			</div>
		</form><!-- form -->	
	</section><!-- content -->
</div><!-- container -->
</body>
</html>