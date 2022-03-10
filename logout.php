<?php
session_start();
session_unset(); /* Remove all session */
session_destroy(); // destroy the session


header("location:signIn.php?logout=false");

?>