<?php
include "config.php";

$name=$_POST["name"];


$id=$_POST["id"];
$sql = "UPDATE  station  SET  name ='$name' WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
   header('location: station.php?st=suceess');
	
} else {
    echo "<script>alert('User Already Exist');</script>";
	
}


?>