<?php
$mail='kalys';
$pass='123456';
if( $_POST["mail"] || $_POST["pass"]  )
{
	if ($_POST["mail"]==$mail && $_POST["pass"]==$pass)
		header("Location: http://localhost://lesson/index.html"); else header("Location: http://localhost://lesson/authorization.html");
	exit();
}
?>
