<?php

define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$user_num=$_COOKIE["number"];

		$qr='update users set live=false where mobile="'.$user_num.'";';
		if(mysqli_query($db,$qr)===true){
				echo"Database updated";
		if (isset($_SERVER['HTTP_COOKIE'])) {
		$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
		foreach($cookies as $cookie){
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
		}
		}
		}
		else	
			echo"Database updation failed";
		
echo"<script type='text/javascript'> 
	alert('You Are Successfully Logged Out');
	window.location.replace(\"login.php\");
	</script>";
?>
