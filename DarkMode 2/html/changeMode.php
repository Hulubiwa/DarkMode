<?php
session_start();

if($_SESSION['theme'] == "White"){
    $_SESSION['theme'] = "Dark";
}else{
    $_SESSION['theme'] = "White";
}

header("Location: theme.php");
?>