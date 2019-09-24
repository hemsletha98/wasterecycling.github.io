<?php
session_start();
	$conn= new mysqli("localhost","root","","wasterecycle");

	if(!$conn)
	{
		echo "no db connection".$conn->connect_error;
	}

	$product=$_POST['product'];
	$amount=$_POST['amountInTons'];
	$userId=$_SESSION['sellerId'];

	$sql="INSERT INTO productinfo(sellerId,productName,productAmount) VALUES('$userId','$product','$amount')";

	$sql2="SELECT productName,productAmount FROM productinfo WHERE sellerId='$userId'";

	if($conn->query($sql) && $query=$conn->query($sql2))
	{
		$data=$query->fetch_assoc();
		$_SESSION['productName']=$data['productName'];
		$_SESSION['productAmount']=$data['productAmount'];
		header('location:profile.php');
	}else
	{
		echo 'failed'.$conn->error;
	}




?>