<!DOCTYPE html>
<html>
<head>
	<title>sin up</title>
</head>
<center><body background="25.jpg">
<h2>Register Here!</h2>
<form action="home.php" method="post">
<table border="1" width="300" height="150">
<tr><td>Name:</td>
<td><input type="text" name="name"></td>
</tr>
<tr><td>Password:</td>
<td><input type="password" name="password">	</td>
</tr>
<tr><td>Email:</td>
<td><input type="text" name="email"></td>
</tr>
<tr><td colspan="5" align="center"><input type="submit" name="signup" value="signup"></td></tr>


</table>
</form>

</body></center>
</html>





<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("legs") or die (mysql_error());

if(isset($_POST['signup'])){

	  $name=$_POST['name'];
	  $pass=$_POST['password'];
	  $emailid=$_POST['email'];
	  if($name==''){
	  	echo "<script>alert('please enter the name')</script>";
	  
	  }
	  	if($pass==''){
	  	echo "<script>alert('please enter the password')</script>";
	  	
	  }
	  	if($emailid==''){
	  	echo "<script>alert('please enter the email id')</script>";
	  	
	  }
	  
 $query="insert into user(name,password,email)values('$name','$pass','$emailid')";
 if(mysql_query($query)){
 	echo "<h3>you have registered!!</h3>";
 
 }
}

?>