<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<style>
body {font-family:sans-serif; background-color: lightgrey}
* {box-sizing: border-box}

.div1{
    background-color: rgb(77, 77, 77);
    width: 100%;
    height: 120px;
}

.non1{
    background-color:black;
    font-weight: bold;
    width: 100px;
    height: 50px;
    color: white;
    font-size: 20px;
    margin-left:1112px;
    top: 10%;
    position: absolute;
    display: block;
    opacity: 0.8;
    }

    .non1:hover{
        background-color: rgb(140, 140, 140);
    }

.non2{
background-color:black;
font-weight: bold;
width: 100px;
height: 50px;
color: white;
font-size: 20px;
margin-left:1232px;
top: 10%;
position: absolute;
display: block;
opacity: 0.8;
}

.non2:hover{
    background-color: rgb(140, 140, 140);
}

.non3{
background-color:black;
font-weight: bold;
width: 100px;
height: 50px;
color: white;
font-size: 20px;
margin-left:1352px;
top: 10%;
position: absolute;
display: block;
opacity: 0.8;
}

.non3:hover{
    background-color: rgb(140, 140, 140);
}

*{
  margin: 2px;
  padding: 1px;
}

/* Full-width input fields */
input[type=text], input[type=password] , input[type=number] , input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=number]:focus,input [type=email]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
}
</style>
<body id="register">
<fieldset style="border-color: darkgrey">
    <section class="div1">
    <i><h1 class="name" align="center" style="font-weight: bold; font-size: 70px; color: white; top: 10px;">Playo</h1></i>
        <a href="About.html#about"><input type="button" value="About" onclick="#" class="non1"></a>
        <a href="Help.html#help"><input type="button" value="Help" onclick="#" class="non2"></a>
        <a href="home.html#home"><input type="button" value="Home" onclick="#" class="non3"></a>
    </section>
<form action="register.php" method="post" style="border:1px solid #ccc">
    <!-- display validation errors here-->
    <?php include('errors.php'); ?>
  <div class="container">
    <h1 style="font-weight: bold; font-size: 50px" align="center">Sign Up</h1>
    <p style="font-size: 20px;">Please fill in this form to create an account</p>
    <hr>
    
    <label for="name"><b>Userame</b></label>
    <input type="text" placeholder="Enter Name" name="username" value="<?php echo $username; ?>" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required> <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2" required>

    <div class="clearfix">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" name="register" class="signupbtn">Register</button>
      <p>
            Already a member? <a href="login.php">Sign in</a>
      </p>
    </div>
  </div>
</form>
</fieldset>
</body>
</html>
