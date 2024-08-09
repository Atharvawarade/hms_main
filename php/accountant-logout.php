<?php
session_start();

// Unset only the warden_loggedin session variable
unset($_SESSION['accountant_login']);

// Redirect to warden login page
header("Location: ../Stakeholders/Accountant/accountant-login.html");
exit;
?>
