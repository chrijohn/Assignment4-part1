<?php
session_start();

if (isset($_SESSION['visits']))
{
	echo "Hello  $_SESSION[name], you have visited this page $_SESSION[visits] times before. \n";
	echo 'Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/login.php?action=logout">here</a> to log out. </br>';
	echo 'Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/content2.php">here</a> to go to Content2';
	$_SESSION['visits']++;
}
else{
if ($_POST['name'] == "" || $_POST['name'] == null)
	{
		echo 'A username must be entered.  Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/login.php">here</a> to return to login screen';
	}
		
else if(session_status() == PHP_SESSION_ACTIVE)
{
	if(isset($_POST['name']))
	{
		$_SESSION['name'] = $_POST['name'];
	}
	if (!isset($_SESSION['visits']))
	{
		$_SESSION['visits'] = 0;
	}
	
	echo "Hello  $_SESSION[name], you have visited this page $_SESSION[visits] times before. \n";
	echo 'Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/login.php?action=logout">here</a> to log out. </br>';
	echo 'Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/content2.php">here</a> to go to Content2';
	$_SESSION['visits']++;
}
}

?>