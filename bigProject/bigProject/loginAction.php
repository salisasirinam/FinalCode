<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("cakeshop");
	$strSQL = "SELECT * FROM user WHERE Username = '".mysql_real_escape_string($_POST['username'])."' 
	and Password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			$_SESSION['errMsg'] = 'Username and Password Incorrect!';
			header('location: login.php');
	}
	else
	{
				header("location:dashboard.php");
		
	}
	mysql_close();
?>