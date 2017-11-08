<html>
<head>
<link rel="stylesheet" type="text/css" href="css/left.css">
<meta http-equiv="refresh" content="5"; url="?php echo $_SERVER['PHP_SELF']; ?>">
</head>
<body id="page1">
<?php


echo"
	<div class='chat-box-online-head'>
                        USERS
    	</div>";

	
define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
$mob=$_COOKIE['number'];
$q='select * from users where mobile not like '.$mob.' order by user_name asc ;';
$result = mysqli_query($db,$q)
or die("Error: ".mysqli_error($db));

while($row=mysqli_fetch_array($result))
{
$fn=$row{'user_name'};
$ln=$row{'last_name'};
$onof=$row{'live'};
$mobile=$row{'mobile'};
$count=0;
$img="";
$qn="select message from message where msg_from='".$mobile."' and msg_to='".$mob."' and report=false;";

 $sql = "select img from users where mobile=$mobile";

$resultz = mysqli_query($db,$sql);

if (mysqli_num_rows($resultz) > 0)
{
while($row = mysqli_fetch_array($resultz))
{ 
   	
	$img=$row{'img'};
	}
}

else
{
 $img="images/def.png";
}
if($result2 = mysqli_query($db,$qn))
	$count=mysqli_num_rows($result2);	

	if($onof==1)
		$status='Online';
	else{
		$status='Offline';
	 }
	
echo"
<form name='chat_left_form' method='post' action='message_load.php' target='message'>
    <div class='panel-body chat-box-online'>
                        <div class='chat-box-online-left'>
                            <img src='images/".$img."' alt='DP' class='img-circle'/> 
<input type='submit' name='but' style='border:none; background:transparent; outline: none;' value=".$fn."-".$ln."><span class='step'>".$count."</span>
							<br />
                            <small>".$status."</small>
						</div>
                        <hr class='hr-clas-low' />
	</div>
</form>";
}

?>
</body>
</html>
