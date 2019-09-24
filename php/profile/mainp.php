<?php
	session_start();
	$_SESSION['productName']=null;
	include 'security.php';
$x=loginTest();

if($x==true)
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>waste recycle </title>
	<link rel="stylesheet" type="text/css" href="../../css/index.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/popUpBox.css">
	<script type="text/javascript" src="../../javascript/profile.js"></script>
	<style type="text/css">
.profile
{
	width:150px;
	height:100px;
	display: flex;	

}
.nButton
{
	background-color:white;
	width:130px;
	height:30px;
	transition: 0.3s;
}
.nButton:hover
{
	transition: 0.3s;
	margin: 5px;
	background-color: gray;
}
.profileInsideDiv
{
	width:130px;
	height:120px;
	background: linear-gradient(white,gray);
	box-shadow: 2px 2px 2px ;
	display: flex;
	flex-direction: column;
	flex-grow: 2;
	z-index: 20;

	display: none;
}
.show
{
	display: flex;
}
.profileShowButton
{
	width:20px;
	height: 20px;
	background-color: white;
	box-shadow: 4px 4px 1px;
	border-bottom-right-radius: 40px;
	border-bottom-left-radius: 40px;

}
	</style>
	<script type="text/javascript" src="../../javascript/main.js"></script>
</head>
<body>
	<div class="mainWrapper">
		<div class="header">
			<img src="../../images/recycle.png" width="120px" height="120px">
			<h1>WASTE RECYCLE MANAGEMETN SYSTEM</h1>
		</div>
		<div class="navBar">
			<div class="profile">
					<div class="profileShowButton" onclick="showButton()"></div>
					<div class="profileInsideDiv">
						<a href="profile.php"><button class="nButton"><b><?php echo $_SESSION['fName']?></b></button></a>
						<a href="mainp.php"><button class="nButton"><b>Home</b></button></a>
						<a href="profileUpdate.php"><button class="nButton"><b>update</b></button></a>
						<a href="fetchHistory.php"><button class="nButton"><b>history</b></button></a>
						<a href="logout.php"><button class="nButton"><b>logout</b></button></a>

					</div>
				</div>
		</div>
		
		<div class="popUpBox">
			<div class="popUpBoxCloseButton" onclick="hideIt()"></div>
			<div class="formDiv">
				<form  class="sellerForm" onclick="return validate()" method="post" action="../dataSubmit.php">
					<div>


						
						<select name="product">
						<option>NONE</option>
						<option>SUGARCANE</option>
						<option>CARDBOARD</option>
						<option>WOOD</option>
						<option>PLASTIC</option>
						</select>
						<input type="number" name="amountInTons" placeholder="amount">
						<input type="submit" value="sell">
						</form>
						
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

<?php
}
?>