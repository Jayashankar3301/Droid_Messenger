<?php
if(!isset($_COOKIE['number']))
Header('Location:http://server.nirmalamca.com/PRJ14/pgroup1401/droid/index.php');
?>

<html>
<head>
  <title>Droid Messenger</title>
<link rel="shortcut icon" href="images/droid.png" type="image/x-icon" />

</head>
<frameset  cols="18%,82%" framespacing="0" frameborder="0" noresize="noresize" scrolling="auto">
<frame src="chat_left.php" name="flist" />
<frame  src="welcome_right.php" name="message" />
<noframes>
<body>
<script type='text/javascript'>
    function winclose(){
		<?php
		$qr='update users set live=false where mobile='.$_COOKIE["number"].');';
		mysqli_query($db,$qr);
		?>
	}
    window.unload = winclose();
</script>

</body></noframes></frameset>
</html>
