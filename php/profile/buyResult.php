<?php
	session_start();
	$conn= new mysqli('localhost','root','','wasterecycle');
	if(!$conn)
	{
		echo "no db connection".$conn->connect_error;
	}
	include 'security.php';
$x=loginTest();

if($x==true)
{

	$productName=$_GET['productName'];

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['fName'].' '.$_SESSION['lName']; ?> </title>
	<link rel="stylesheet" type="text/css" href="../../css/index.css">
	<link rel="stylesheet" type="text/css" href="../../css/profile.css">
	<link rel="stylesheet" type="text/css" href="../../css/buyResults.css">
	<script type="text/javascript" src="../../javascript/profile.js"></script>
</head>
<body>
	<div class="mainWrapper">
			<div class="header">
				<div class="logo">
					<img src="../../images/Vignan_Logo.jpg" width="130px" height="130px">
				</div>
				<div class="heading">
					<h1 style="font-size: 25px;">
					VIGNAN'S INSTITUTE OF INFORMATION TECHNOLOGY<br/>WASTE RECYCLE MANAGEMETN SYSTEM</h1>
				</div>
				<div class="profile">
					<div class="profileShowButton" onclick="showButton()"></div>
					<div class="profileInsideDiv">
						<a href="profile.php"><button><b><?php echo $_SESSION['fName'];?></b></button></a>
						<a href="mainp.php"><button><b>Home</b></button></a>
						<a href="profileUpdate.php"><button><b>update</b></button></a>
						<a href=""><button><b>history</b></button></a>
						<a href="logout.php"><button><b>logout</b></button></a>
					</div>
				</div>
			</div>
			<div class="subWrapper">
				<div class="details">
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

}
	
?>
				</div>
				<?php
				
				/* if($_SESSION['productName']==null)
				{
					
					echo '<div class="sellForm">';
					echo '<h2>';
						echo 'please sell ';
					echo '</h2>';
					echo '	<form action="dataSubmit.php" method="post">';
					echo '		<select name="product">';
					echo '		<option>NONE</option>';
					echo	'<option>SUGARCANE</option>';
					echo 	'<option>CARDBOARD</option>';
					echo '	<option>WOOD</option>';
					echo '	<option>PLASTIC</option>';
					echo '	</select>';
					echo '	<input type="number" name="amountInTons" placeholder="amount">';
					echo '	<input type="submit" value="sell">';
					echo '	</form>';
					echo '	</div>';
		}else
		{

			echo '<div class="sellForm">';
				echo '<h1>';
					echo 'your sellings';
				echo '</h1>';	
				echo '<h2>';
					echo $_SESSION['productName'];
				echo '</h2>';

				echo '<h2>';
					echo $_SESSION['productAmount'];
				echo '</h2>';
			echo '	</div>';	
		}
		*/
		?>
			</div>
	</div>
		
</body>
</html>

