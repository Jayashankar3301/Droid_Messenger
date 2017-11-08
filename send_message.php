<?php

date_default_timezone_set('Asia/Calcutta');
$dt= date("Y-m-d");
$tm=date("H:i:s");
 $send=$_COOKIE['number'];
 $re=$_COOKIE['rec_num'];
 $txt=$_POST['t_snd'];
 if($txt==null){
 echo "<script>
          
        window.location.replace(\"chat_right.php\")
		</script>";
 //header('Location:http://localhost/login/chat_right.php');
 }
 else
 {
define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$dbhandle = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
 $sql="insert into message values('".$txt."','".$send."','".$re."','".$dt."','".$tm."','false');";
 if(mysqli_query($dbhandle,$sql)===TRUE){
 echo "<script>
          
        window.location.replace(\"chat_right.php\")
		</script>";
	 //header('Location:http://localhost/login/chat_right.php');
 }
 }
 ?>
