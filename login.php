<?php
session_start();

if($_GET['action']== 'logout')
{
	session_destroy();	
	echo '<form action = "http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/content1.php" method= "post">
	<p> Enter Username: <input type= "text" name="name"></p>
	<p><input type="submit"></p>';

}
else{
if (isset($_SESSION['visits'])) 
{
	echo "$_SESSION[name] is currently logged in. \n";
	echo 'Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/login.php?action=logout">here</a> to log out. </br>';
	echo 'Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/content1.php">here</a> to resume your session';
	
}
else
{	
	echo '<form action = "http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/content1.php" method= "post">
	<p> Enter Username: <input type= "text" name="name"></p>
	<p><input type="submit"></p>';
}
}
?>