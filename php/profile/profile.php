<?php
	session_start();
	include 'security.php';
$x=loginTest();

if($x==true)
{
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['fName'].' '.$_SESSION['lName']; ?> </title>
	<link rel="stylesheet" type="text/css" href="../../css/index.css">
	<link rel="stylesheet" type="text/css" href="../../css/profile.css">
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
						<a href="fetchHistory.php"><button><b>history</b></button></a>
						<a href="logout.php"><button><b>logout</b></button></a>
					</div>
				</div>
			</div>
			<div class="subWrapper">
				<div class="details">
					<h2><SPAN>NAME:</SPAN><?php echo $_SESSION['fName'].' '.$_SESSION['lName'];?></h2>
					<h2><SPAN>EMAIL:</SPAN><?php echo $_SESSION['email']; ?></h2>
					<h2><SPAN>NUMBER:</SPAN><?php echo $_SESSION['phone']; ?></h2>
					<h2><SPAN>COMPANY:</SPAN><?php echo $_SESSION['company']; ?></h2>
					<h2><SPAN>CITY:</SPAN><?php echo $_SESSION['city']; ?></h2>
					<h2><SPAN>AREA:</SPAN><?php echo $_SESSION['area']; ?></h2>
					<h2><SPAN>ZIPCODE:</SPAN><?php echo $_SESSION['zipCode']; ?></h2>
					<h2><SPAN>STREET:</SPAN><?php echo $_SESSION['street']; ?></h2>
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
		
			<h3>Welcome <?php echo $_SESSION['fName']; ?></h3>
	</div>
		
</body>
</html>
<?php
}
?>