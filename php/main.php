<?php
	session_start();
	$_SESSION['productName']=null;
?>

<!DOCTYPE html>
<html>
<head>
	<title>waste recycle </title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/popUpBox.css">
	<script type="text/javascript" src="../javascript/main.js"></script>
</head>
<body>
	<div class="mainWrapper">
		<div class="header">
			<img src="../images/recycle.png" width="120px" height="120px">
			<h1>WASTE RECYCLE MANAGEMETN SYSTEM</h1>
		</div>
		<div class="navBar">
			<a href="login.php"><button class="navButton"><b>login</b></button></a>
		</div>
		
		<div class="popUpBox">
			<div class="popUpBoxCloseButton" onclick="hideIt()"></div>
			<div class="formDiv">
				<form  class="sellerForm" onclick="return validate()" method="post" action="sellerSubmin.php">
					<input type="name" name="firstName" placeholder="first name">
					<br>
					<input type="name" name="lastName" placeholder="last name">
					<br>
					<input type="email" name="userEmail" placeholder="email">
					<br>
					<input type="number" name="phoneNumber" placeholder="phone">
					<br>
					<input type="text" name="companyName" placeholder="company name">
					<br>
					<input type="text" name="city" placeholder="city">
					<br>
					<input type="text" name="userArea" placeholder="area">
					<br>
					<input type="number" name="userZipCode" placeholder="zip code">
					<br>
					<input type="text" name="userStreet" placeholder="street">
					<br>
					<input type="password" name="userPassword" placeholder="password">
					<br>
					<input type="password" name="checkPassword" placeholder="retype password">
					<br>
					<input type="submit" name="submit">
				</form>
				
				<form class="buyersForm" method="get"  action="buyResult.php">
					<h1>what you want to buy</h1>
					<select name="productName">
						<option>NONE</option>
						<option>SUGARCANE</option>
						<option>CARDBOARD</option>
						<option>WOOD</option>
						<option>PLASTIC</option>
					</select>
					<input type="submit" name="submit">
				</form>
			</div>
		</div>
		<br>
		<div class="semiWrapper">
			<div class="leftSide">
				<button onclick="sell()">
					<h1>SELL</h1>
				</button>
			</div>
			<div class="rightSide" >
				<Button onclick="buy()">
					<h1>BUY</h1>
				</button>
			</div>
			<div class="abstract">
				<h2><b>abstract</b></h2>
				<p><b>In the present growing world numirious things are being manifactured each of them produces wastes during their generation some are harmfull and some are not and some can be used by other to manifacture other products, so our goal is to make all different waste products avalible online, so the needy can get them with ease. This could reduce the waste ,therby the pollution.</b>
				</p>
			</div>
		</div>
		
	</div>

</body>
</html>