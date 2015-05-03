<?php
session_start();

if (isset($_SESSION['visits']))
{
	echo 'Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/content1.php">here</a> to go to Content1';
}
else
{
	echo 'You must be logged in to access this page.  Click <a href="http://web.engr.oregonstate.edu/~chrijohn/CS290/Assignment4/login.php">here</a> to return to login screen';
}


?>