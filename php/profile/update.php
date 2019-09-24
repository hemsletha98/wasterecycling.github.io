<?php
session_start();
	$conn= new mysqli("localhost","root","","wasterecycle");

	if(!$conn)
	{
		echo "no db connection".$conn->connect_error;
	}

	$sellerId=$_SESSION['sellerId'];

	$fName=$_POST['firstName'];
	$lName=$_POST['lastName'];
	$email=$_POST['userEmail'];
	$phoneNumber=$_POST['phoneNumber'];
	$companyName=$_POST['companyName'];
	$city=$_POST['city'];
	$area=$_POST['userArea'];
	$zipCode=$_POST['userZipCode'];
	$street=$_POST['userStreet'];


	if($fName==null)
	{
		$fName=$_SESSION['fName'];
	}
	if($lName==null)
	{
		$lName=$_SESSION['lName'];
	}
	if($email==null)
	{
		$email=$_SESSION['email'];
	}
	if($phoneNumber==null)
	{
		$phoneNumber=$_SESSION['phone'];
	}
	if($companyName==null)
	{
		$companyName=$_SESSION['company'];
	}
	if($city==null)
	{
		$city=$_SESSION['city'];
	}
	if($area==null)
	{
		$area=$_SESSION['area'];
	}
	if($zipCode==null)
	{
		$zipCode=$_SESSION['zipCode'];
	}
	if($street==null)
	{
		$street=$_SESSION['street'];
	}

	$updateSql="UPDATE sellers SET firstName='$fName',lastName='$lName',email='$email',phoneNumber='$phoneNumber',companyName='$companyName',city='$city',area='$area',zipCode='$zipCode',street='$street' WHERE sellerId='$sellerId'";

	if($conn->query($updateSql))
	{
		header('location:../userLogin.php');
	}else
	{
		echo $conn->mysqli_error();
	}
?>