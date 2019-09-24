<?php
session_start();
	$conn= new mysqli('localhost','root','','wasterecycle');
	if($_SESSION['email']==null)
	{
		$userName=$_POST['username'];
		$password=$_POST['pass'];
	}else
	{
		$userName=$_SESSION['email'];
		$password=$_SESSION['pass'];
	}



	$sql="SELECT * FROM sellers WHERE email='$userName' && password='$password'";

	if($query=$conn->query($sql))
	{


		if($query->num_rows)
		{
			$data=$query->fetch_assoc();
			$userId=$data['sellerId'];
			$_SESSION['pass']=$password;
			$_SESSION['sellerId']=$userId;
			$_SESSION['fName']=$data['firstName'];
			$_SESSION['lName']=$data['lastName'];
			$_SESSION['email']=$data['email'];
			$_SESSION['phone']=$data['phoneNumber'];
			$_SESSION['company']=$data['companyName'];
			$_SESSION['city']=$data['city'];
			$_SESSION['area']=$data['area'];
			$_SESSION['zipCode']=$data['zipCode'];
			$_SESSION['street']=$data['street'];
			header("location:profile/");
			
		}else
		{
			header('location:loginVerify.php');
		}
	}
?>