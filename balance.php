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
</style>
<script>
       var timer=setTimeout(function (){window.location.href="guide.php"},15000);  
</script>
</head>
<body>
<div class="cont">
<div class="d">
<h1 class="h">YOUR CURRENT ACCOUNT BALANCE IS:</h1>
</div>
<div class="pgap"></div>
<div class="d">
<span class="sp">&#8377</span>
<div style="width:500px">
<p id="balance" class="sp">
<?php
$balance = $_COOKIE['param2'];
echo $balance ;
?>
</p>
</div>
</div>
</div>
</body>
</html>