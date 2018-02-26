<!DOCTYPE html>

<?php
include("connect.php");
session_start();
?>
<html>
<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:title" content="Creatheavity - A creative industries that makes greatnest">
  <meta property="og:description" content="Offering a great problem solving skill for you and your business whereever you are.">
  <meta property="og:image" content="https://creatheavity.com/img/creatheavity.png">
  <meta property="og:url" content="https://creatheavity.com/">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <!-- Bootstrap CSS -->
  <style>
    .dropdown-toggle:hover .dropdown-menu {
      display: block;
    }
    .imgg{
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }
    input[type="text"]{
      font-size: 16px;
      width: 240px;
      height: 40px;
      margin-left: 10px;
      border: 1px solid black;
      border-radius: 5px;
      padding: 0 0 0 10px;
      margin-bottom: 20px;
      outline: none;
      
    }
    h1{
      margin-bottom: 20px;
      font-size: 30px;
    }
    input[type="submit"]{
      font-size: 20px;
      background-color: black;
      color: white;
      width: 150px;
      height: 35px;
      border-radius: 5px;
      margin-top: 20px;
      outline: none;
    }
    .container{
      padding-top: 10vh;
    }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>
</head>
<body style=" margin-bottom: 0px;">
    <section class="login">
      <div class="container">
        <div class="row justify-content-center no-gutters text-center">
          <div class="col-sm-6">
            <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/05/1495976550cpanel-logo.png" alt="Cpanel" class="img-fluid">
            <h1>Username</h1>
            <img src="https://cryptoinbox.com/images/user-icon.svg" alt="username" class="imgg">
            <input type="text" name="username" placeholder="Username"><br />
            <h1>Password</h1>
            <img src="https://www.bettercloud.com/wp-content/uploads/reset-passwords-grey1.png" alt="password" class="imgg"><input type="text" name="password" placeholder="Password"><br />
            <input type="submit" name="login" value="Login">
          </div>
        </div>
      </div>
    </section>
</body>
</html>