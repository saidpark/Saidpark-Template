<?php
include("config.php");

if($_GET['do'] == 'check')
{
if($_POST['nom'] == '' || $_POST['prenom'] == '' || $_POST['Email'] == '' || $_POST['username'] == '' || $_POST['password'] == ''  )
{
?>
	<script language="JavaScript">
	alert("Veuillez remplir tous les champs svp. Merci de recommencer");
	window.location.replace("enregistrement.php");// On inclut le formulaire d'identification
	</script>
	<?php
}
else
{
if($_POST['password'] == $_POST['passwordc'])
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
if($row['username'] == '')
{

//create user
  
mysql_query ("INSERT INTO users (nom, prenom, email, username, password, admin) VALUES('{$_POST['nom']}', '{$_POST['prenom']}', '{$_POST['Email']}', '{$_POST['username']}', '{$_POST['password']}', '0') ")

?>
	<script language="JavaScript">
	alert("Félicitation votre inscription est terminée avec succée. Connectez-vous mtn :-)");
	window.location.replace("index.php");// On inclut le formulaire d'identification
	</script>
	<?php
}
else
{
?>
	<script language="JavaScript">
	alert("Le nom d'utilisateur que vous aviez choisi exixte déja. Merci de recommencer");
	window.location.replace("enregistrement.php");// On inclut le formulaire d'identification
	</script>
	<?php
}
}
else
{
?>
	<script language="JavaScript">
	alert("Le password que vous aviez entré ne correspond pas. Merci de recommencer");
	window.location.replace("enregistrement.php");// On inclut le formulaire d'identification
	</script>
	<?php
}
}
}
?>
