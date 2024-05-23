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
 <script>
       var timer=setTimeout(function (){window.location.href="atm.php"},20000);  
</script>
</head>
  <body>
    <div class="bg-container">
        <h1 class="heading"><?php
    if($_GET){
        echo $_GET['message']; // print_r($_GET); //remember to add semicolon      
    }?></h1>
    </div>
  </body>
</html>