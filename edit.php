
<html>
<head>
</head>
<body>

<h3>Edit user: <?php echo $_REQUEST['names']; ?></h3>


<form ENCTYPE="multipart/form-data" method="POST" action="change.php">
<table border="0" width="30%">

<tr><td width="30%">Name: </td><td><input type="text" name="newname"
value="<?php echo $_REQUEST['names'];?>"> </td></tr>

<tr><td width="30%">Email: </tr>  <td><input type="text" name="newemail"
value="<?php echo $_REQUEST['emails'];?>"> </td></tr>

<tr><td width="30%">Password: </td><td><input type="text" name="newpassword"
value=""> </td></tr>
</table>

</form>
</body>
change picture:<input type='file' name='newupload' /><p>
<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">

<input type="submit" name="submit" value="save and update" />




</html>