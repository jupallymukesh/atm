<!DOCTYPE html>
<html>
<head>
<title>ATM</title>
<meta name="viewport" content="width=device-width initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST["name"];
$login_id=$_POST["login_id"];
$pin=$_POST["pin"];
$phno=$_POST["phno"];
$balance=$_POST["balance"];

//var_dump($name, $cartype,$days,$sugesstions,$driver);

$host="localhost";
$dbname="atm";
$username="root";
$password="";

$conn=mysqli_connect(hostname : $host,database :$dbname,username:$username,password:$password);

if(mysqli_connect_errno()){
	die("Connection error :".mysqli_connect_error());
	goto mukesh;
}

$sql = "INSERT INTO account_login(login_id,pin) values (?,?)";
$sql1 = "INSERT INTO account_details(name,phno,balance,login_id) values (?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
?>
<?php
if(!mysqli_stmt_prepare($stmt,$sql))
{
?>
	<p><?php echo ("dhu".mysqli_error($conn));goto mukesh;?></p>
<?php
}
?>
<?php

mysqli_stmt_bind_param($stmt,"si",$login_id,$pin);
mysqli_stmt_execute($stmt);
?>
<?php
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1))
{
?>
	<p><?php echo ("dhu".mysqli_error($conn));goto mukesh;?></p>
<?php
}
?>
<?php
if(!mysqli_stmt_prepare($stmt1,$sql1))
{
?>
	<p><?php echo ("dhu".mysqli_error($conn));goto mukesh;?></p>
<?php
}
?>
<?php

mysqli_stmt_bind_param($stmt1,"ssis",$name,$phno,$balance,$login_id);
mysqli_stmt_execute($stmt1);
?>
<p style="color:red"><?php echo"sucessfully account created"?></p>
<?php mukesh:
}
?>
<body>
	<h1>Bank of VJIT</h1>
	<h2>Enter Details</h2>
	<form action="http://localhost/atm1/details_entry.php" method="post">
	<label for="login_id">Enter login Id</label>
	<br>
	<input type = "text" maxlength="15" id ="login_id" name="login_id">
	<label for="pin">Pin</label>
	<br>
	<input type = "text" maxlength="6" id ="pin" name="pin">
	<label for="name">Name</label>
	<br>
	<input type = "text" id ="name" name="name">
	<label for="phno">phno</label>
	<br>
	<input type = "text" id ="phno" maxlength="13" name="phno">
	<label for="balance">Balance</label>
	<br>
	<input type = "text" id ="balance" name="balance">
	<div>
	<button>SUBMIT</button>
	</div>
	</form>	
</body>
</html>