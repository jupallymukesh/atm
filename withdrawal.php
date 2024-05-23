<!DOCTYPE HTML>
<html>
<head>
<title>balance</title>
<meta name="viewport" content="width=device-width  initial-scale=1">
<style>
    .h 
      {
       color:#0b2696;
       font-size:50px;
      }
    .d { align-items:center;justify-content:center;display:flex;}
    .cont {background-color:#65f2f7;height:100vh;}
    .sp {align-items:center;justify-content:center;display:flex;font-size:100px;color:#0b2696;}
    .pgap {height:200px;}
	.in {width: 150%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;}
	.button {padding: 15px 32px;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);}
</style>
</head>
<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve the form data
			$amount = $_POST["amount"];
			$balance = $_COOKIE['param2'];
			$login_id = $_COOKIE['param1'];
			
			settype($balance, "integer");
			settype($amount, "integer");
			if($balance>=$amount)
			{
			$balance=$balance - $amount;
			
			$host="localhost";
			$dbname="atm";
			$username="root";
			$password="";
			
			$conn = new mysqli($host,$username,$password,$dbname);

			if(mysqli_connect_errno())
			{
				die ("Connection Failed".mysqli_connect_error());
			}
			$sql="UPDATE account_details SET balance = '".$balance."' WHERE login_id = '".$login_id."'";
			
			if ($conn->query($sql) === TRUE) {
				$message="Transaction Sucessfull Amount debited from your account";
                header("Location:transcation.php?message=".$message);
			} else {
			  $message="Transaction Failed";
                header("Location:transcation.php?message=".$message);
			}
			// Process the input
			
			}
			else
			{
				$message="Insufficient Balance";
                header("Location:transcation.php?message=".$message);
			}
		}
?>
<body>
<div class="cont">
<div class="d">
<h1 class="h">ENTER AMOUNT TO WITHDRAW:</h1>
</div>
<div class="d">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input class="in" type="text" name="amount"></input>
<button>Withdraw</button>
</form>
</div>
</body>
</html>