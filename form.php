<html>
<head></head>

<body>
<h2>Register Form</h2>
<form ENCTYPE="multipart/form-data" method="post" action="insert.php">

<table border="0" width="60%">

<tr><td width="10%">Name: <input type="text" name="name" max lenght="15" /></td></tr><br />
<tr><td width="10%">Email: <input type="text" name="email" maxlenght="20" /></td></tr><br />
<tr><td width="10%">Password: <input type="password" name="password" maxlenght="15" /></td></tr><br />
<tr><td width="10%">Confirm password: <input type="password" name="cpassword" maxlenght="15" /></tr></tr>
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
</table>
<p>
choose a profile picture<input type="file" name="upload">
<input type="submit" name="submit" value="register" /><br />
</form>
<p>

</body>

</html> 