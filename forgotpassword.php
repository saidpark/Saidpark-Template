<?php
//include the header
require("config.php");

if($_GET['action'] == 'email')
{



//check the login
mysql_connect($host, $user_name, $password)
   or die('Could not connect: ' . mysql_error());
   
mysql_select_db($database_name) or die('Could not select database');
   
$result = mysql_query("SELECT * FROM users
WHERE Email='{$_POST['Email']}'") or die(mysql_error()); 
$row = mysql_fetch_array( $result );

if($row['username'] == '')
{
?>
	<script language="JavaScript">
	alert("L'adresse Email que vous avez entré n'appartienne à aucun membre. Merci de vérifier");
	window.location.replace("sendpass.php");// On inclut le formulaire d'identification
	</script>
	<?php
}

// The message
$message = "Your password is : " . $row['password'] . ".";
// Send
mail($_POST['Email'], 'Forgot password', $message);
?>
	<script language="JavaScript">
	alert("Votre mot de passe vient d'étre envoyer par Said verifie votre boite Email.Merci :-)");
	window.location.replace("index.php");// On inclut le formulaire d'identification
	</script>
	<?php



}
?>
