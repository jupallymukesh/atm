<!DOCTYPE html>
<html>
  <head>
    <title>Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <style>
   .bg-container{
    text-align:center;
    font-family:bree serif;
    font-size:40px;
    background-color:#65f2f7;
    height:100vh;
    font-weight:bold;
    padding:20px;
}
.div{
    text-align:right;
}
.div a {
          margin:35px;
          font-size:40px;
          color:#0b2696;
          text-decoration:none;
}
.heading{
    font-family:bree serif;
    font-weight:bold;
    color:#0b2696;
    font-size:50px;
    margin:20px;
}
.span {
 color:red;
 height:20px;
}
.pgap {
   height:60px;
}
  </style>
</head>
<?php
$login_id = $_COOKIE['param1'];
	
$host="localhost";
$dbname="atm";
$username="root";
$password="";

$conn = new mysqli($host,$username,$password,$dbname);

if(mysqli_connect_errno())
{
	die ("Connection Failed".mysqli_connect_error());
}

$sql="select * from account_details where login_id='".$login_id."'";
$result=$conn->query($sql);

$row = $result->fetch_assoc();
$balance=$row["balance"];

setcookie('param2', $balance, time() + 3600, '/');
$conn->close();
?>
  <body>
    <div class="bg-container">
        <h1 class="heading"> Please Select Option</h1>
        <div class="d-flex flex-column justify-content-end">
            <div class="div">
       <div class="pgap"></div>
       <a href="balance.php">CHECK BALANCE <span class="span">&#62;</span></a>
       <div class="pgap"></div>
       <a href="deposit.php"> CASH DEPOSIT <span  class="span">&#62;</span></a>
       <div class="pgap"></div>
       <a href="withdrawal.php">CASH WITHDRAWAL <span class="span">&#62;</span></a>
       <div class="pgap"></div>
       <a href="#mini">MINI STATEMENT  <span class="span">&#62;</span></a>
        </div></div>
    </div>
  </body>
</html>