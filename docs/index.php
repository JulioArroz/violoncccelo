<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$txtName = $_POST['txtName'];

// database insert SQL code
$sql = "INSERT INTO `test`(`name`) VALUES ('$txtName')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
