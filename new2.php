<?php
	if(isset($_POST['login']))
	{
  $username= $_POST['username'];
	 $password= $_POST['password'];
	 
	$username= stripcslashes($username);
		$password = stripcslashes($password);
		$username= mysql_real_escape_string($username);
		$password =mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");
	
	$result = mysql_query("SELECT  * FROM you where username='$username' and password='$password' ")
	        or die("Unable to connect to $result");
			
			$row = mysql_fetch_array($result);
			
			if( $row['username']==$username && $row['password']== $password)
			{

		header('Location: /h.php');
	
				
			}
			else
				 echo "please try again later";
	}
			 
?>