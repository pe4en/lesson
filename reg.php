<?php
if( $_POST["mail"] || $_POST["pass"]  )
{
	//isset ($_POST["name"]) {}
	echo "You mail and username is -->". $_POST['mail']. "<br />";
	echo "Your password -->". $_POST['pass'];
	exit();
}
?>
