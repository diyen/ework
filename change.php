
<?php
session_start();



if(isset($_REQUEST['submit'])){


$mypic = $_FILES['newupload']['name'];
$temp = $_FILES['newupload']['tmp_name'];
$type = $_FILES['newupload']['type'];


$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newpassword = $_REQUEST['newpassword'];

if($newname && $newemail && $newpassword){

	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
			if(($newname) || ($newemail) != ""){

mysql_connect("localhost", "root", "") or die("problem with connections!"); 
mysql_select_db("testsite");
mysql_query("UPDATE users SET name='$newname', email='$newemail', password='$newpassword', WHERE id='$id'");
}else{

echo "you have to type a new name and email";
}
if($newpassword != "";){
$md5 = md5($newpassword);
mysql_query("UPDATE users SET password='$md5' WHERE id='ids'")
}

	if(($_SESSION['name']) != $newname){
		$dir = "profiles/."$_SESSION['name']."/images";
		$files = 0;
		$handle = opendir($dir);
			while($file = readdir($handle) != FALSE)
			if($file!="."&&$file!=".."&&$file!="thumbs.db"){
				unlink($dir."/".$file);
				$files++;
				echo "<br />";
			}
	}
move_uploaded_file($temp, "profiles/$newname/images/$mypic");
echo "you have been updated successfully ";
}else {closedir($handle);
			sleep(1);
			rename("profiles/".$_SESSION['name'], "profiles/$newname");

echo "please echo a valid jpeg, jpg or bmp file";

}

header("refresh:2; url=logout.php")
}else {

echo "please complete the form";
}
mysql_close();

include('links.php');

}else{

	echo "not allowedo";
}
?>