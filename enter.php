<?php

session_start();

if(isset($_SESSION['name'])||isset($_COOKIE['testsite'])){

	include('sessions.php');

}else{
echo "Access denied";

}





?>