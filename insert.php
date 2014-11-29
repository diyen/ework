<?php
$mypic = $_FILES['upload']['name'];
$temp = $_FILES['upload']['tmp_name'];
$type = $_FILES['upload']['type'];


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($name && $email && $password && $cpassword) {

 
if(strlen($password) > 3) {



if($password==$cpassword) {


mysql_connect("localhost", "root", "") or die("we could not connect!");

mysql_select_db("testsite");

$username = mysql_query("SELECT name FROM users WHERE name='$name'");
$count = mysql_num_rows($username);
$remail = mysql_query("SELECT email FROM users WHERE email='$email'");
$checkemail = mysql_num_rows($remail);

if($checkemail!=0){

echo "This email is already registered! please enter another email";

}else {


if($count!=0){

echo "This name is already registered! please type another name";
} 

if(($type=="image/jpeg") ||($type=="image/jpg") ||($type=="image/bmp")){
	
	$directoty = "./profiles/$name/images/";
	mkdir($directoty, 0777, true);
 move_uploaded_file($temp, "profiles/$name/images/$mypic");
	
	echo "This is your profile picture <p><img border='1' width='70' height='70' src='profiles/$name/images/$mypic'><p>";

	$passwordmd5 =md5($password);
	mysql_query("INSERT INTO users(name,email,password) VALUES('$name','$email','$passwordmd5')");
echo "you have successfully been registered";

}else{

echo "file format not supported please upload a jpeg, jpg, or bmp file";
}
}
}

} else {
echo "your passwords do not match, please enter another password";

 }
} else {

echo "your password is too short please enter another password between 4 to 15 characters";

}

include("links.php");

?>