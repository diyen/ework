<?php


if(isset($_COOKIE['testsite'])){

	header('location: sessions.php');

}else{

echo" 
<html>

<head>
</head>
<body>

<h1><center>Welcome to CRUD system!</center></h1>

<center>Please login...</center>
<center>

<form method='post' action='login.php'>

<table border='1' width='25%'>

<tr><td width='10%'>Name: <input type='text' name='name' max length='15' /></td></tr><br />
<tr><td width='10%'>Password: <input type='password' name='password' maxlenght='15' /></td></tr><br />
<tr><td width='10%'>Remember me?: <input type='checkbox' name='remember' /></td></tr><br /
</table>


<input type='submit' name='submit' value='login' /><br />

<a href='form.php'><u>Register?</u></a>
</center>
</form>
</body>


</html>";
}
?>