<?php
if(true)
{
define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
	$b=$_POST['uname'];
	$check="SELECT 1 FROM users where mobile='".$b."'";
	$result=mysqli_query($db,$check);
	if($result->num_rows == 1){
        echo "<script>
          alert('This Number is already registered..!');
        window.location.replace(\"reg.php\");
		</script>";
	}		
	else
	{
		$a=$_POST['fname'];
		$b=$_POST['lname'];
		$c=$_POST['uname'];
		setcookie('num',$c);
		$d=$_POST['pswd'];	
		$e=$_POST['psd_hint'];
	$insert="insert into users (user_name, last_name, mobile, password, password_hint,img) values('$a','$b','$c','$d','$e','5WUpcPZ.png')";
	if(mysqli_query($db,$insert))
	{
		echo "<script>
          alert('You are successfully Registered..! Login to your account.');
          window.location.replace(\"login.php\")
		</script>";
    }
	else
	{
	echo "Failed to create account";
	}
}
}
?>
