<?php
	
	include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="web.css"></link>
	<title>Login Page</title>	
	<h2 class="h" align="center">Welcome to Login Page</h2>
</head>

<body id="b">

<div id="b">
<div id="d">


<form action="login.php" method"POST" align="center">

<center>
<img src="login.jpg" class="img"</image></center>
<br><br>
<b>
<level>User Id</label>
<input name="email" type="email" id="form" placeholder="Enter Your Email:"required></input>
<br>
</br>
<b>
<level>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter Your Password:"required></input>
<br>
</b>
<b>
<br>
<input name="login" type="submit" id="button" value="Log-In"></input>
<br><br>
<a href="reg.php"><input name="reg" type="button" id="button" value="Registration"></input>


</form>

</body>

</html>