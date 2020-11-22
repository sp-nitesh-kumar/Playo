<?php include('server.php'); ?>
<html>
<head>
<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
<body id="login">
	<script type="text/javascript">
		function writecookie()
		{
			var cookievalue=document.getElementById("username").value;
			document.cookie="username="+cookievalue;
		}
	</script>
	<section class="div1">
	<i><h1 class="name" align="center" style="font-weight: bold; font-size: 70px; color: white; top: 10px;">Playo</h1></i>
	</section>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1 style="color: black">Login Here</h1>
        <form method="post" action="login.php">
            <!-- display validation errors here-->
            <?php include('errors.php'); ?>

            <label for="username" style="color: black">UserName</label>
			<input type="text" name="username" id="username">
            <label for="password" style="color: black">Password</label>
			<input type="password" name="password" id="password">


            <input type="submit" name="login" value="Login" onclick="writecookie()">
            <p style="color: black">
            Not yet a member? <a href="register.php" style="color: black">Sign up</a>
            </p>
        </form>
        
    </div>

</body>
</head>
</html>