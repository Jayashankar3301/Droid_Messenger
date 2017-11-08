<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <title>Droid Messenger</title>
  
  <link href='css/roboto.css' rel='stylesheet' type='text/css'>
  <link href='css/exo.css' rel='stylesheet' type='text/css'>
  <link href='css/sanspro.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style_lg.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="stylesheet" href="css/animate.min.css" />
 <link rel="shortcut icon" href="droid.png" type="image/x-icon" /> 

</head>
<body>
<?php
if(isset($_COOKIE['num']))
	$num=$_COOKIE['num'];
else
	$num='';
echo'
<form name="log" method="post" action="to_home_login.php">
	<div class="header">
	<header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;"><h1 class="site__title mega">Droid</h1>Messenger</span>
		<div class="login">
				<input type="text" pattern="^\d{10}$" placeholder="Phone Number" value="'.$num.'" name="user" required><br>
				<input type="password" placeholder="password" name="password" required><br>
				<input type="submit" value="Login">
		</div>
		</div>
		</div>
		</header>
		<br><br><br><br><br>
		<div class="team"><hr><font color="#000"><a href="index.php">Back to Home</a> &nbsp;
		<a href="hint.php">Forgot password</a> <br><a href="developers.php">Team Droid</a></font></div>
</form>';
?>
</body>
</html>
