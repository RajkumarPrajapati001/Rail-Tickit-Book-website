<?php
include "config.php";

$name=$_POST["name"];


$sql = "insert into station (name) values('$name')";


if ($conn->query($sql) === TRUE) {
   header('location: station.php?st=suceess');
	
} else {
    echo "<script>alert('User Already Exist');</script>";
	
}


?>