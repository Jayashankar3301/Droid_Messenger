<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <title>Droid Messenger</title>
  
  <link href='css/roboto.css' rel='stylesheet' type='text/css'>
  <link href='css/exo.css' rel='stylesheet' type='text/css'>
  <link href='css/sanspro.css' rel='stylesheet' type='text/css'>
  <link href='css/exo.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style_lg.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="stylesheet" href="css/animate.min.css" />
 <link rel="shortcut icon" href="droid.png" type="image/x-icon" /> 
 
</head>
<body>
<form name="log" method="post" action="to_home_create.php" onsubmit="return Validate()">
	<div class="header">
	<header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;">Sign Up</span>
		<div class="login">
				<input type="text" placeholder="First Name" name="fname" title="First name must be without Spaces" required><br>
				<input type="text" placeholder="Last Name" pattern="[^\s]+" title="Last name must be without Spaces" name="lname" required><br>
				<input type="text" pattern="^\d{10}$" placeholder="Phone Number" name="uname" required><br>
				<input type="password" placeholder="Password" name="pswd" id="psd" required><br>
				<input type="password" placeholder="Confirm-Password" name="pswd" id="psdc" required><br>
				<input type="text" placeholder="Password-Hint" name="psd_hint"><br>
				<input type="submit" value="Sign Up" name="create">
				<input type="reset" value="clear"><br>
		</div>
		</div>
		</div>
		</header>
		<div class="team"><hr><font color="#000"><a href="index.php">Back to Home</a> <br><a href="developers.php">Team Droid</a></font></div>
</form>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("psd").value;
        var confirmPassword = document.getElementById("psdc").value;
        if (password != confirmPassword) {
           alert("Passwords do not match");
		   return false;
        }
	  else if ((password.length < 4) || (password.length > 8))
		{
			alert("Your Password must be 4 to 8 Characters");
			return false;
		}
    }
</script>
</body>
</html>
