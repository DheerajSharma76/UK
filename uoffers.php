<?php
session_start();
if(!isset($_SESSION['un']))
{
header("location:index.html");
}
?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

img
{
  border: double 5px;
  border-radius: 7px;
}

</style>
</head>
<body>

<div class="sidebar">
<a href="uhome.php"><i class="fa fa-home"></i> Home</a>
  <a href="uprofile.php"><i class="fa fa-user"></i> Profile</a>
  <a href="usearch.php"><i class="fa fa-search"></i> Search</a>
  <a href="uoffers.php" style="  background-color: #f44336;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;"><i class="fa fa-gift"></i> Offers</a>
  <a href="index.html"><i class="fa fa-sign-out"></i> Signout</a>
</div>

<div class="main">
<div class="coupon">
  <div class="container">
  
  </div>
  <div class="row">
  <div class="col">
<img src="images/offers/1/1.jpg" alt="Avatar" style="width:100%;">
</div>
<div class="col">
<img src="images/offers/1/2.jpg" alt="Avatar" style="width:100%; height:88%">
</div>
<div class="col">
<img src="images/offers/1/3.jpg" alt="Avatar" style="width:100%;height:88%">
</div>

</div>
 
  <div class="container" style="background-color:white">
    <h2><b>1. Stonehenge, Windsor Castle, and Bath from London</b></h2> 
  </div>
  <div class="container">
    <br>
    <p>For: <span >£85.00</span></p>

    Days: 2 <br><br>
    Day 1: Stonehenge
    Time:
<br>
    Day 1: Bath from London
    Time:
    <br>
    Day 2: Windsor Castle
    Time:
    <br><br>
    <p class="expire">Expires: Jun 03, 2022 &nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary" onclick="this.style.display='none';alert('Added Successfully to cart');">Add to Cart</button></p>
  </div>
  </div>

  <br><br>

  <div class="coupon">
  <div class="container">
  
  </div>
  <div class="row">
  <div class="col">
<img src="images/places/park/hyde.jpg" alt="Avatar" style="width:100%;height:88%">
</div>
<div class="col">
<img src="images/places/Streets/oxford.jpg" alt="Avatar" style="width:100%; height:88%">
</div>
<div class="col">
<img src="images/places/Bridge/tower.jpg" alt="Avatar" style="width:100%;height:88%">
</div>

</div>
 
  <div class="container" style="background-color:white">
    <h2><b>2. Hyde Park, Oxford Street, and Tower Bridge</b></h2> 
  </div>
  <div class="container">
    <br>
    <p>For: <span >£49.00</span></p>

    Days: 1 <br><br>
    Day 1: Hyde Park
    Time:
<br>
    Day 1:  Oxford Street
    Time:
    <br>
    Day 1: Tower Bridge
    Time:
    <br><br>
    <p class="expire">Expires: July 15, 2022 &nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary" onclick="this.style.display='none';alert('Added Successfully to cart');">Add to Cart</button></p>
  </div>
  </div>

</div>
     
</body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
  font-family: Arial;
}

.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 900px;
}

.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}
</style>
</head>
</html> 
