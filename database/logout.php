<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../login.php"); // Adjust path if login.php is in parent folder
exit();
?>

