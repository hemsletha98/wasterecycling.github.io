<?php
	session_start();
	include 'security.php';
$x=loginTest();

if($x==true)
{
	
	$conn= new mysqli('localhost','root','','wasterecycle');
	$userId=$_SESSION['sellerId'];

	if(!$conn)
	{

	}else
	{

		$sql2="SELECT productName,productAmount FROM productinfo WHERE sellerId='$userId'";
			if($query1= $conn->query($sql2))
			{
				if($query1->num_rows)
				{
					$data1=$query1->fetch_assoc();
					$_SESSION['productName']=$data1['productName'];
					$_SESSION['productAmount']=$data1['productAmount'];
					header("location:history.php");
				}
				
			}
	}
		
}
		
?>