<?php
	$conn= new mysqli("localhost","root","","wasterecycle");

	if(!$conn)
	{
		echo "no db connection".$conn->connect_error;
	}

	$fName=$_POST['firstName'];
	$lName=$_POST['lastName'];
	$email=$_POST['userEmail'];
	$phoneNumber=$_POST['phoneNumber'];
	$companyName=$_POST['companyName'];
	$city=$_POST['city'];
	$area=$_POST['userArea'];
	$zipCode=$_POST['userZipCode'];
	$street=$_POST['userStreet'];
	$password=$_POST['userPassword'];
	$sql="INSERT INTO sellers(firstName,lastName,email,phoneNumber,companyName,city,area,zipCode,street,password) VALUES('$fName','$lName','$email','$phoneNumber','$companyName','$city','$area','$zipCode','$street','$password')";

	if($conn->query($sql))
	{
		header("location:login.php");
	}else
	{
		echo 'failes'.$conn->error;
	}

?>

