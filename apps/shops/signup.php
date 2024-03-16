<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="action/shops_save.php" method="post" autocomplete="off" enctype="multipart/form-data">
			<h1>Sign Up</h1>
			</span>			
			<div>
				<input type="text" placeholder="Name"  name="name"/>
			</div>
            <div>
				<input type="text" placeholder="Address"  name="address"/>
			</div>
            <div>
				<input type="text" placeholder="City"  name="city"/>
			</div>
             <div>
				<input type="text" placeholder="State"  name="country"/>
			</div>
            <div>
				<input type="text" placeholder="Pincode"  name="zip"/>
			</div>
            <div>
				<input type="text" placeholder="Contact No"  name="phone"/>
			</div>
            <div>
				<input type="email" placeholder="Email"  name="email"/>
			</div> 
            <div>
				<input type="file" placeholder="Certificate"  name="photo"/>
			</div>
            <div>
				<input type="text"  placeholder="KL-PKD-6789545/46 Please Enter This Format"  name="licenseno"/>
			</div>         
            <div>
				<input type="password" placeholder="Password"  name="password"/>
			</div>
			<div>
				<input type="submit" value="Submit" />
			</div>           
            <div>
	<a href="login.php" style="text-decoration:none; font-size:20px; color:red; letter-spacing:2px; text-shadow:0px 1px 1px black;">Back</a>
			</div>          
		</form><!-- form -->	
	</section><!-- content -->
</div><!-- container -->
</body>
</html>