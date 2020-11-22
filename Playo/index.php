<?php include('server.php'); 
//if user is not logged in, they cannot access this page
	if(empty($_SESSION['username'])){
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration system using PHP and MySql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(download.jpg);">
	<div class="header">
		<h2 align="center" style="font-weight: bold; font-size: 30px;">Redirection page</h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
		</div>
		<?php endif ?>

		<?php if(isset($_SESSION["username"])): ?>
			<p align="center" style="font-weight: bold; font-size: 25px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p align="center"><a href="index.php?logout='1'" style="color: white; font-size: 25px; background-color: red; font-weight: bold; text-decoration: none">Logout</a></p>
			<br>
			<p align="center"><a href="club.html" style="color: white; font-size: 25px; background-color: green; font-weight: bold; text-decoration: none">Proceed</a></p>
		<?php endif ?>
	</div>
</body>
</html>