<?php
session_start();
$_SESSION['theme']="White";

header("Location: theme.php");
exit;