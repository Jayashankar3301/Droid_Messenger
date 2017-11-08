<html>
<head>
  <meta charset="UTF-8">
  <title>Droid Messenger</title>
  <link href='css/robotow.css' rel='stylesheet' type='text/css'>
  <link href='css/exow.css' rel='stylesheet' type='text/css'>
  <link href='css/sansprow.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/stylew.css">
  <link rel="shortcut icon" href="images/droid.png" type="image/x-icon" />
<style>
.round{
border-radius:50%;
overflow:hidden;
width:150px;
height:150px;
}
.round img{
display:block;
max-width:100%;
max-height:100%;
}
</style>

 
</head>
<body id="page3">
<?php

define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$user=$_COOKIE["user"];
$num=$_COOKIE["number"];
$img="";
// selecting my profile picture
$sql = "select img from users where mobile=$num";

$resultz = mysqli_query($db,$sql);

if (mysqli_num_rows($resultz) > 0)
{
while($row = mysqli_fetch_array($resultz))
{ 
   	
	$img=$row{'img'};
	}
}



// $img contain the image;

$q="select message from message where `msg_to`=".$_COOKIE['number']." and report=false;";
if($result = mysqli_query($db,$q))
	$count= mysqli_num_rows($result);
else
	$count='No';
echo'

<form>
<div class="dropdown">
  <button class="dropbtn">Settings</button>
  <div class="dropdown-content">
    <a href="change_dp.php" target="message">ChangeDP</a>
    <a href="to_logout.php" target="_top">Log Out</a>
  </div>
</div>
	<div class="header">
	<font size="10"><center>
  Welcome '.$user.'</font><br><br><div class="round"><img src="'.$img.'"></div>
<br>
	<header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;">
		<h1 class="site__title mega">Droid</h1>Messenger
   </span>
   </div>
   </div>
</header>
<b>You have '.$count.' new Messages..!</b><br><br>
	<div class="team"><hr><font color="#000">Team Droid</font></div>
	</form>';
	?>	
</body>

</html>
