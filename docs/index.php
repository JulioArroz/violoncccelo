<?php

$con = mysqli_connect('bsrud28jfdhtlgb57sxg-mysql.services.clever-cloud.com', 'ugcbfn1nqyaxnonq', 'w1raDIKeMsiU8pI5cm5w','bsrud28jfdhtlgb57sxg');

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
