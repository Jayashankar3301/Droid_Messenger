<html>

<?php
define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

$result = mysqli_query($db,"select user_name,last_name,mobile from users");
while($row = mysqli_fetch_array($result))
{
	 $f=$row{'user_name'};
	 $l=$row{'last_name'};
     	 $mob=$row{'mobile'};
	 $button=$_POST['but'];
	 
	 if($button==$f.'-'.$l)
	{
		 setcookie('rec_num',$mob);
		 setcookie('rec_nm',$f);
		 setcookie('rec_ln',$l);
		 echo "<script>
          
        window.location.replace(\"chat_right.php\")
		</script>";
		// header('Location:http://localhost/login/chat_right.php');
	}
}
?>
</form>
</html>
