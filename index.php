<?php
if(isset($_POST['login'])){
header('Location: reg.php');
}
if(isset($_POST['reg'])){
header('Location: login.php');
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Droid Messenger</title>
  <link href='css/roboto.css' rel='stylesheet' type='text/css'>
  <link href='css/exo.css' rel='stylesheet' type='text/css'>
  <link href='css/sanspro.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style_lg.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.css">
 <link rel="shortcut icon" href="droid.png" type="image/x-icon" /> 
</head>
<body>
<form action="login.php">
	<div class="header">
	<header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;">
		<h1 class="site__title mega">Droid</h1>Messenger
   </span>
	<div class="login">
				<input type="submit" value="Login" name="login" >
</form>
<form action="reg.php">
	<input type="submit" value="Register" name="reg" ">
	</div>
	</div>
	</div>
	</header>
	<br><br><br><br><br>
	<div class="team"><hr><font color="#000"><a href="developers.php">Team Droid</a></font></div>
	</form>
</body>
</html>
