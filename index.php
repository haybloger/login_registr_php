<?php
require 'core.php';
require 'connect.php';
 
 
if (loggedin()) {
echo '<a href="logout.php">Log out</a>';
} else {
include 'loginform.php';
}
 
?>
