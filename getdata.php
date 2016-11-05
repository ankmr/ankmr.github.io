<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname= 'fuck';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   echo 'connected succesfully';
   
   
   $sql = 'SELECT  username, password FROM you';
   mysql_select_db('fuck');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo 
	  
         "EMP NAME : {$row['username']} <br> ".
         "EMP password : {$row['password']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   header('Location:afterlogin.html');
   
   
   mysql_close($conn);
?>