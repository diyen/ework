<?php

include("sessions.php");

if(!isset($_SESSION['name'])){

echo "Access denied";


}else{
echo "<h3>Choose an ID to delete</h3>";



mysql_connect("localhost", "root", "") or die("problem with connection...");
mysql_select_db("testsite");

$per_page = 6;
$pages_query = mysql_query("SELECT COUNT('id') FROM users");
$pages = ceil(mysql_result($pages_query, 0) / $per_page);


$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start =($page - 1) * $per_page;
$query = mysql_query("SELECT * FROM users LIMIT $start, $per_page");



echo "<table width='90%' align=center border=2>";
echo "<tr><td width='40%' align=center bgcolor='FFFF00'>ID</td>
<td width='40%' align=center bgcolor='FFFF00'>NAME</td>
<td width='40%' align=center bgcolor='FFFF00'>EMAIL</td>
<td width='40%' align=center bgcolor='FFFF00'>PASSWORD</td></tr>";

while($row=mysql_fetch_assoc($query)) {

	$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];
	
echo "<tr><td align=center>
<a href=\"delete1.php?ids=$id&names=$name&emails=$email&passwords=$password\">$id</a></td>
<td>$name</td><td>$email</td><td>$password></td>";	
	
	
}echo "</table>";

$prev = $page - 1;
$next = $page + 1;


echo "<center>";


if(!($page<=1)){
echo "<a href='update.php?page=$prev'>prev</a> ";
}
if($pages >= 1) {

	for($x=1;$x<=$pages;$x++) {
	
		echo ($x == $pages ) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ':'<a href="?page='.$x.'">'.$x.'</a> '; 
	
	}
}

if(!($page>=$pages)){

echo "<a href='update.php?page=$next'>next</a> ";

}
echo "</center>";
mysql_close();
}
?>