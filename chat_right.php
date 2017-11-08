<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>Droid Messenger</title>
      <link rel="stylesheet" href="style_chat.css">
<meta http-equiv="refresh" content="10"; url="?php echo $_SERVER['PHP_SELF']; ?>">
</head>

<body id="page2">
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
echo'<form name="chat_right" method="post" action="send_message.php#button1">';
 $send=$_COOKIE['number'];
 $re=$_COOKIE['rec_num'];
 $rc_nm=$_COOKIE['rec_nm'];
 $rc_ln=$_COOKIE['rec_ln'];
 $img="";
 $pic="";
 
 
 // selecting the dp of receiver
 $sqll = "select img from users where mobile=$re";

$resulz = mysqli_query($db,$sqll);

if (mysqli_num_rows($resulz) > 0)
{
while($row = mysqli_fetch_array($resulz))
{ 
   	
	$pic=$row{'img'};
	}
}
 
 
 // selecting my profile picture
 $sql = "select img from users where mobile=$send";

$resultz = mysqli_query($db,$sql);

if (mysqli_num_rows($resultz) > 0)
{
while($row = mysqli_fetch_array($resultz))
{ 
   	
	$img=$row{'img'};
	}
}

 $read_report="update message set report=true where msg_from='".$re."' and msg_to=".$send.";";
 mysqli_query($db,$read_report);
 $get_msg="select * from message where (msg_from='".$send."' and msg_to='".$re."') or (msg_from='".$re."' and msg_to='".$send."') order by date and time desc;";
 $result = mysqli_query($db,$get_msg)
or die("Error: ".mysqli_error($db));
$cc=mysqli_num_rows($result);
if($cc>0){
while($row = mysqli_fetch_array($result)){
	date_default_timezone_set('Asia/Calcutta');
	 $dt= date("Y-m-d");
	 $f=$row{'msg_from'};
	 $t=$row{'msg_to'};
	 $date=$row{'date'};
	 if($dt==$date)
		 $date='Today';	 
echo'
		<div class="menu">
		<a href="welcome_right.php">
            <div class="back"><i class="fa fa-chevron-left"></i> <img src="'.$pic.'" draggable="false"/></div></a>
			<div class="dropdown">
  <button class="dropbtn">Settings</button>
  <div class="dropdown-content">
    <a href="change_dp.php" target="message">ChangeDP</a>
    <a href="to_logout.php" target="_top">Log Out</a>
  </div>
</div>
            <div class="name">'.$rc_nm.'</div>
            <div class="last">'.$rc_ln.'</div>
        </div>
		<ol class="chat">
';
	 if($f==$re){
echo'
    <li class="other">
        <div class="avatar"><img src= "'.$pic.'" draggable="false"/></div>
      <div class="msg">
        <p>'.$row{"message"}.'</p>
        <time>'.$date.'||'.$row{"time"}.'</time>
      </div>
    </li>';
	 }
	 else{
		 echo'
    <li class="self">
        <div class="avatar"><img src="'.$img.'" draggable="false"/></div>
      <div class="msg">
        <p>'.$row{"message"}.'</p>
        <time>'.$date.'-'.$row{"time"}.'</time>
      </div>
	 </li>';
	 }
echo'
    </ol>
    <input class="textarea" name="t_snd" type="text" placeholder="  Type here!"/>
	<input type="submit" class="search" name="b_send" alt="search" value="">
	<div class="emojis"></div>';
}
}
else{
	
echo'
		<div class="menu">
		<a href="welcome_right.php">
            <div class="back"><i class="fa fa-chevron-left"></i> <img src="'.$pic.'" draggable="false"/></div></a>
			<div class="dropdown">
  <button class="dropbtn">Settings</button>
  <div class="dropdown-content">
    <a href="change_dp.php">ChangeDP</a>
    <a href="to_logout.php" target="_top">Log Out</a>
  </div>
</div>
            <div class="name">'.$rc_nm.'</div>
            <div class="last">'.$rc_ln.'</div>
        </div>
		<ol class="chat">
';
echo'
    </ol>
    <input id="button1" class="textarea" name="t_snd" autocomplete="off" type="text" placeholder="  Type here..!"/>
	<input type="submit" class="search" name="b_send" alt="search" value="">
	<div class="emojis"></div>
	</form>';
}//else
mysqli_close($db);
?>
</body>
</html>
