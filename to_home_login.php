<html>
<form name="df" method="post" action="home.php" target="_top">
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
	$p=$_POST['password'];
	$m=$_POST['user'];
	$sql="select * from users where mobile=$m and password='$p'";
	$result=mysqli_query($db,$sql);
	$num_rows=mysqli_num_rows($result);
	if($num_rows==1)
	{   
		$row=mysqli_fetch_array($result);
		$name=$row{'user_name'};
		$mobile=$row{'mobile'};
        	setcookie('user',$name);
		setcookie('number',$mobile);
		$ins="update users set live=true where mobile=$mobile";
		mysqli_query($db,$ins);
		echo "<script>
          
        window.location.replace(\"home.php\")
		</script>";
	}
  else
  {
	echo "<script>
          alert('Wrong Username or Password..!');
        window.location.replace(\"login.php\")
		</script>";
  }
  ?>
  </form>
  </html>
