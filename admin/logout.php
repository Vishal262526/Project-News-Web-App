<?php

// Cannect to the server
include "config.php";

// Find the session
session_start();

// Delete aal the key values pairs in the session
session_unset();

// Destroy the session from the server
session_destroy();
header("location: index.php");

?>
