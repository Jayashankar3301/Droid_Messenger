
<html>
<body bgcolor="#ffffff">
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "id1824135_mca1415");
define("DB_PASSWORD", "mca1415pswd");
define("DB_DATABASE", "id1824135_db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$num=$_POST['hint'];

$sql="select password_hint from users where mobile=$num";

$resultz = mysqli_query($db,$sql);

if (mysqli_num_rows($resultz) > 0)
{
while($row = mysqli_fetch_array($resultz))
{ 
   	
	$ph=$row{'password_hint'};
	echo"<center><br><br><h2>Your password hint is</h2>&nbsp<font color='red'><h1>'</font><font color='green'>".$ph."</font><font color='red'>'</font></h1><br>";
          echo'<a href="index.php">Back to Home</a></center>';
	
	}
}




?>
</body>
</html>

