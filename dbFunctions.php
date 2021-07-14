<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "c302_p07";

// Open a new connection to the MySQL server Alias of mysqli::__construct
$link = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB) or
die(mysqli_connect_error()); // Returns a string description of the last connect error

?>

