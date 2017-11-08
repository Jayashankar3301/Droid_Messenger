<?php

define("DB_SERVER", "localhost");
define("DB_USER", "pgroup1401");
define("DB_PASSWORD", "pgroup1401");
define("DB_DATABASE", "db_pgroup1401");
$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

$sql="select password_hint from users where mobile=".$_COOKIE['number'].";";

?>
