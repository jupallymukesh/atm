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
$login_id = $_POST["login_id"];
$pin = $_POST["pin"];


$host="localhost";
$dbname="atm";
$username="root";
$password="";


$conn = new mysqli($host,$username,$password,$dbname);

if(mysqli_connect_errno())
{
	die ("Connection Failed".mysqli_connect_error());
}

$sql="select * from account_login where login_id='".$login_id."'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	$row = $result->fetch_assoc();
	if($row["pin"]==$pin)
	{
		setcookie('param1', $login_id, time() + 3600, '/');
		header('Location: http://localhost/atm1/guide.php');
	}
	else
	{
		?>
		<p style="color:red"><?php echo"you've entered Incorrect pin!"?></p>
		<?php
	}
}
else
{
	?>
	<p style="color:red"><?php echo"Credentials are Wrong try again"?></p>
	<?php
}
$conn->close();
}
?>
<body>
<div>
<img src="vjitlogo.png" alt="logo">
<br>
<div>
<h3>WELCOME TO BANK OF VJIT</h3>
</div>
<br>
<div>
<form method="post" action="http://localhost/atm1/login.php">
<label for="login_id">Enter Login Id</label>
<br>
<input type="text" id="login_id" name="login_id" maxlength="15"></input>
<label for="pin">PLEASE ENTER PIN : </label>
<br>
<input type="password" id="pin" name="pin" maxlength="6"></input>
<br>
<button>SUBMIT</button>
</form>
</div>
</div>
</body>
</html>