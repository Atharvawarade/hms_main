<?php
session_start();

// Unset only the warden_loggedin session variable
unset($_SESSION['warden_loggedin']);
unset($_SESSION['username']); // Unset the username if it's specific to the warden
unset($_SESSION['WardenId']); // Unset the WardenId if it's specific to the warden

// Redirect to warden login page
header("Location: ../Stakeholders/Warden/Warden-login.html");
exit;
?>
