
<?php

$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newpassword = $_REQUEST['newpassword'];

mysql_connect("localhost", "root", "") or die("problem with connections!"); 
mysql_select_db("testsite");
mysql_query("DELETE FROM users WHERE id='".$_REQUEST['id']."'");
echo "the user has been deleted successfully";

mysql_close();
?>