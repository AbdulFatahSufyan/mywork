<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include'connection.php';
	if (isset($_POST['submit'])); {
		$Firstname=$_POST['Firstname'];
		$Othername=$_POST['Othername'];
         
         $SQL="INSERT INTO bedrock(Firstname,Othername)
         VALUES ('$Firstname','$Othername')";
         $Query=mySQLi_Query($conn, $SQL);
         if ($Query) {
         	echo "registered successfully";
         }
         else {
         	echo "registration unsuccessfull";
         }
	}
	 ?>
<center><form action="myphp.php" method="post">
	Firstname<br><input type="text" name="Firstname" required=""><br>
	Othername<br><input type="text" name="Othername" required=""><br><br>
	<button><input type="submit" name="submit"></button>
</form></center>
</html>