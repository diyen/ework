<?php

session_start();

$expire = time()-8640055;
setcookie('testsite', $_SESSION['name'], $expire);
session_destroy();
echo "session ended!";
header("refresh:1; url=hom.php");



?>