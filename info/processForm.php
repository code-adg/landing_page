<?php
session_start();

// Store form data in session
$_SESSION['occasion'] = isset($_POST['occasion']) ? $_POST['occasion'] : '';
$_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : '';

// Redirect to next page
header('Location: nextPage.php');
exit;
?>
