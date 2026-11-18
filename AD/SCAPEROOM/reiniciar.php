<?php
session_start();
$_SESSION = [];
session_destroy();
header("Location: hab0.php");
exit;
