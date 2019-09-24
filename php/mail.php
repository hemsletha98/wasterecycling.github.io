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
		<div class="popUpBox">
			<div class="popUpBoxCloseButton" onclick="hideIt()"></div>
			<div class="formDiv">
				<form  class="sellerForm" onclick="return validate()" action="sellerSubmin.php">
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
				
				<form class="buyersForm"  action="#">
					<h1>what you want to buy</h1>
					<select>
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
				<h2>abstract</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				</p>
			</div>
		</div>
		
	</div>

</body>
</html>