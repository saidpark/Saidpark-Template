<?php
include("config.php");
$_SESSION['logged'] = '';
header("location:" . $_login_file);
?>
