<?php
require_once('template/client.php');
session_start();
if(isset($_SESSION['userId']) && isset($_SESSION['realName']))
{
    $loggedInUserId= $_SESSION['userId'];
    $loggedInUserRealname= $_SESSION['realName'];
    $loggedInAccessRole= $_SESSION['accessRoleId'];
	$isLoggedIn= $_SESSION['isLoggedIn'];
}
else
{
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location:http://$host$uri/");
}