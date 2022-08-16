


<?php
$servername = "localhost";
$username = "root"; // database username, default Username for MySQL database is root
$password = ""; //database password, default password for mysql is null
$dbname = "isw"; //Database name
	    $a=$_POST['fullname'];
        $b=$_POST['fathername'];
        $c=$_POST['rollnumber'];
        $d=$_POST['address'];
        $e=$_POST['phoneno'];
        $f=$_POST['messeage'];
		

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

      $sql="INSERT INTO 'submit'('fullname','fathername','rollnumber','address','phoneno','messeage')VALUES('$a','$b','$c','$d','$e','$f')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>