<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name      =$_POST['name'];
$fathername  =$_POST['fathername'];
$programme =$_POST['programme'];
$semester  =$_POST['semester'];
$enrollment =$_POST['enrollment'];
$state      =$_POST['state'];
$dob       =$_POST['date'];
$category   =$_POST['category'];
$mobile    =$_POST['mobile'];
$gender    =$_POST['accept'];
$local      =$_POST['local'];
$permanent  =$_POST['permanent'];
$fate       =$_POST['Date'];
$accept   =$_POST['accept1'];
$file   =$_POST['fileupload'];



$sql = "INSERT INTO form (name, fathername,programme,semester,enrollment,state, dob, category,mobile,gender,local,permanent,
date,confirmation, file)
VALUES ( '$name', '$fathername ','$programme','$semester','$enrollment','$state', '$dob', '$category','$mobile','$gender','$local','$permanent',
'$Fate', '$accept', '$file')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>