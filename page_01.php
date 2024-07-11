<?php
session_start();

$_SESSION["fname"] = "Alex";

print $_SESSION ["fname"];

?>
<br>

<a href="page_02.php">Go to page 02</a>