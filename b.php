<?php
if (!empty($_POST["mail"])) {
    echo "Yes, mail is set";    
}else{  
    echo "thanks";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$dob =$_POST['dob'];
$password =$_POST['pass'];
$Gender =$_POST['gender'];


$sql = "INSERT INTO submit (firstname, lastname, email, dob, password,gender)
VALUES ('$name', '$lastname', '$email','$dob','$password','$Gender')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Location:aftersubmit.html");
?>