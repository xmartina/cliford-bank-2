<?php

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ac/index.php"); // Redirecting To Home Page
}
?>