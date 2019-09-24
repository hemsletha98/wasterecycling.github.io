<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<script type="text/javascript" src="../javascript/validation.js"></script>
</head>
<body>	
	<div class="wrapper">
		<div class="header">
			<a href="main.php"><button>HOME</button></a>
		</div>
		<form onsubmit="return loginValidate()" action="userLogin.php" method="post" >
			<input type="name" name="loginName" placeholder="name || email">
			<input type="password" name="loginPassword" placeholder="password">
			<input type="submit" name="login" value="login">
		</form>
		<h3 class="warningText" style="color:red;"></h3>
	</div>

</body>
</html>