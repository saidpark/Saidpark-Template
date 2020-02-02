<?php
include("config.php");

if($_GET['do'] == 'check')
{
$_user_name = $_POST['username'];
$_password = $_POST['password'];

//check the login
mysql_connect($host, $user_name, $password)
   or die('Could not connect: ' . mysql_error());

//select database
mysql_select_db($database_name) or die('Could not select database');
$result = mysql_query("SELECT * FROM users WHERE username='$_user_name'") or die(mysql_error()); 
$row = mysql_fetch_array( $result );

if($_POST['username'] == '' || $_POST['password'] == '')

{
?>
	<script language="JavaScript">
	alert("veuillez remplir tous les champs svp. Merci de recommencer");
	window.location.replace("index.php");// On inclut le formulaire d'identification
	</script>
	<?php
}
else
{
if($row['password'] == $_password)
{
$_SESSION['logged'] = "hgu654895gjdg65";
$_SESSION['user'] = $_user_name;
header("location:" . $redirect_url);
}
else
if($row['username'] == '')
{
?>
	<script language="JavaScript">
	alert("Le nom ou le mot de passe que vous aviez saisie est incorrect. Merci de recommencer");
	window.location.replace("index.php");// On inclut le formulaire d'identification
	</script>
	<?php
}
}

}
?>
