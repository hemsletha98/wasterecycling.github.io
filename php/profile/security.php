<?php
function loginTest()
{
	if($_SESSION['sellerId']==null)
	{
		header('location:../main.php');
	}else
	{
		return true;
	}
}
	
?>