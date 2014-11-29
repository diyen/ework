
<?php
session_start();

if(isset($_SESSION['name'])||isset($_COOKIE['testsite'])){

if(!isset($_SESSION['name'])&&isset($_COOKIE['testsite'])){
	$_SESSION['name'] = $_COOKIE['testsite'];
}
$date = date('F d, Y, g:i:s a');
echo "Today is ".$date;
echo "<br />";


$dir = "profiles/".$_SESSION['name']."/images/";
$open = opendir($dir);

while(($file = readdir($open)) !=FALSE){

if($file!="."&&$file!=".."&&$file!="thumbs.db"){
echo "<img border='1' width='70' height='70' src='$dir/$file'>";

}

}
echo "&nbsp<b>".$_SESSION['name']."</b>'s session<br /><a href='logout.php'>Logout</a>";


include('links.php');

}else{

echo "Access denied!";
header("refresh:1; url=hom.php");
}


?>

