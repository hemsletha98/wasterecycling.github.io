<?php
		$conn= new mysqli('localhost','root','','wasterecycle');
	if(!$conn)
	{
		echo "no db connection".$conn->connect_error;
	}


	$productName=$_GET['productName'];

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/buyResults.css">
	<title><?php echo $productName?> sellers</title>
</head>
<body>
<div class="wrapper">
	<div class="header">
			<a href="main.php"><button>HOME</button></a>
		</div>
	<form class="buyersForm" method="get"  action="buyResult.php">
					<h1>what you want to buy</h1>
					<select name="productName">
						<option>NONE</option>
						<option>SUGARCANE</option>
						<option>CARDBOARD</option>
						<option>WOOD</option>
						<option>PLASTIC</option>
					</select>
					<input type="submit" name="submit" value="search">
				</form>

	<?php   
	
	
	$sql="SELECT sellerId,productName,productAmount FROM productinfo WHERE productName='$productName' ";

	if($query=$conn->query($sql))
    {

    	
    	if($query->num_rows)
    	{
    			
    	
        	 
        	 	while($data=$query->fetch_array())
        			{
        				$id=$data['sellerId'];
        				$sql1="SELECT email,phoneNumber,companyName,city,productName,productAmount FROM sellers,productinfo WHERE sellers.sellerId=productinfo.sellerId AND sellers.sellerId='$id'";
        				if($query1=$conn->query($sql1))
        				{
        					$data1=$query1->fetch_assoc();

        				echo "<div class='sellerDetails'>";
        					
        					echo "<div class='sellerInformation'>";
        						echo "<h3>email</h3>".$data1['email'];
        						echo "<h2>city</h2>".$data1['city'];
        						
        						echo "<h2>company name</h2>".$data1['companyName'];
        						
        						echo "<h2>phone number</h2>".$data1['phoneNumber'];


        					echo "</div>";

        					echo "<div class='productInformation'>";
        						echo $data1['productName'];
        						echo "<br/>";
        						echo $data1['productAmount']." "."tons";
        					echo "</div>";

        					echo "<div class=''>";
        						echo '<button>buy</button>';
        						echo "<input type='number' max='200'>";
        					echo "</div>";

        				echo "</div>";	  
        				}else{
        					echo "failed";
        				}     				
        			}

        	
           		 
       		 
    	}else
    	{
    		echo 'no is selling these peoducts';
    	}
        

        

    }
	
?>



</div>>
</body>
</html>

