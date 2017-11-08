<?php


$f=$_FILES["file"]["name"];
$a=$_COOKIE['number'];
define("DB_SERVER", "localhost");
define("DB_USER", "id1824135_mca1415");
define("DB_PASSWORD", "mca1415pswd");
define("DB_DATABASE", "id1824135_db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
 $insert="update users set img='$f' where mobile= $a";
	if($con->query($insert)=== TRUE)
	{
		
	header('Location:http://droidmessenger.netii.net/welcome_right.php');
         }
?>
