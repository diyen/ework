

<html>
<head></head>
<body>
<center><h3><i>Search Engine</i></h3>
<form method="GET" action="searchenginetrial.php">

<input type="text" name="search">
<input type="submit" name ="submit" value="search database">
</center>
<hr />

<?php


if(isset($_REQUEST['submit'])) {

	$search = $_GET['search'];
	$terms = explode(" ", $search);
	$query = "SELECT * FROM users WHERE ";
	
$i=0;
foreach($terms as $each) {
$i++;
if($i==1){
	$query .= "name LIKE '%$each%' ";
}else {
$query .= "OR name LIKE '%$each%' ";
}

}	
	
mysql_connect("localhost", "root", "");
mysql_select_db("testsite");

$query = mysql_query($query);
$num = mysql_num_rows($query);

if($num > 0 && $search!="") {
	echo "$num result(s) found for <b>$search</b>"
while($row = mysql_fetch_assoc($query {
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$password = $row['password'];

	echo "<h3>name:$name(id: $id)</h3><br />$email<br />$password<br />";
}
echo

}


}
mysql_close();

echo "please type any word...";

}else {

echo "No result found!";
}





?>

</form>
</body>

</html>