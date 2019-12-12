<?php
	
	include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="web.css"></link>
	<title>Registration Page</title>	
	<h2 class="h" align="center"> Registration</h2>
</head>

<body id="b">

<div id="b">
<div id="d">


<form action="reg.php" method"POST" align="center">

<center>
<img src="reg.jpg" class="img"</image></center>
<b>
<level>Id</label>
<input name="id" type="text" id="form" ></input>
<br>
</b>

<b>
<level>Password</label>
<input name="pass" type="password" id="form" ></input>
<br>
</b>
<b>
<level>Confirm-Password</label>
<input name="cpass" type="password" id="form" ></input>
<br>
</b>

<b>
<level>	Name</label>
<input name="name" type="email" id="form" ></input>
<br>
</br>

<b>
<level>Email</label>
<input name="email" type="email" id="form" ></input>
<br>
</br>

<input name="reg" type="submit" id="button" value="Sign-Up"></input>
<br>
<a href="login.php"><input name="back" type="button" id="button" value="Back to Log-In"></input>


</form>

</body>

</html>